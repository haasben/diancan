<?php

namespace app\api\controller;

use think\Db;
use think\Controller;
class Order extends Controller {

	public $shop;
    
	/**
     * 析构函数
     */
    function __construct() 
    {
        parent::__construct();
        $this->shop = Model('Shop');

    }
    
    /*
     * 初始化操作
     */
    public function _initialize() 
    {
        parent::_initialize();

    }

    public function index(){


        $data = 'a:4:{s:10:"attr_value";s:0:"";s:10:"spec_value";s:52:"辣度：特辣&lt;br/&gt;份量：小份&lt;br/&gt;";s:13:"spec_value_id";s:3:"4_9";s:8:"value_id";i:89;}';
        $data = unserialize($data);
        $data['spec_value'] = htmlspecialchars_decode($data['spec_value']);
        dump($data);
    }


    public function add_order(){

        $table_id = input('table_id');

        $cart_data = Db::name('shop_cart')
            ->alias('a')
            ->field('a.*,c.spec_price,c.spec_stock,c.value_id,oa.users_price,oc.discount,oc.rebate,oa.stock_count,oa.title,oa.aid,oa.litpic')
            ->join('o_product_spec_value c', 'a.spec_value_id = c.spec_value_id and a.product_id = c.aid', 'LEFT')
            ->join('o_archives oa','oa.aid = a.product_id')
            ->join('o_product_content oc','oc.aid = a.product_id')
            ->where('table_id',$table_id)
            ->select();
        // dump($cart_data);
        foreach ($cart_data as $k => $value) {
            // 购物车商品存在规格并且价格不为空，则覆盖商品原来的价格
            if (!empty($value['spec_value_id']) && $value['spec_price'] >= 0) {
                // 规格价格覆盖商品原价
                $value['users_price'] = $value['spec_price'];
            }
            // 计算折扣后的价格
            if (!empty($value['discount'] == '打折')) {
                // 折扣率百分比
                $discount_price = $value['rebate'] / 100;

                // 会员折扣价
                $value['users_price']      = $value['users_price'] * $discount_price;
                $cart_data[$k]['users_price'] = $value['users_price'];
            }
            // 购物车商品存在规格并且库存不为空，则覆盖商品原来的库存
            if (!empty($value['spec_stock'])) {
                // 规格库存覆盖商品库存
                $value['stock_count'] = $value['spec_stock'];
                $list[$k]['stock_count'] = $value['spec_stock'];
            }
            // 若库存为空则返回提示
            if (empty($value['stock_count'])) {
                return return_ajax(2,'《'.$value['title'].'》 库存不足！');
            }
            // 金额、数量计算
            if ($value['users_price'] >= 0 && !empty($value['product_num'])) {
                // 合计金额
                $TotalAmount += sprintf("%.2f", $value['users_price'] * $value['product_num']);
                // 合计数量
                $TotalNumber += $value['product_num'];
                // 判断订单类型，目前逻辑：一个订单中，只要存在一个普通产品(实物产品，需要发货物流)，则为普通订单
            }
        }

        if(empty($cart_data)) return return_ajax(2,'订单生成失败，没有相应的商品！');

        // 添加到订单主表
            $time = getTime();
            $OrderData = [
                'order_code'        => date('Ymd').$time.rand(10,100), //订单生成规则
                'users_id'          => 1,
                'order_status'      => 0, // 订单未付款
                'add_time'          => $time,
                'order_total_amount'=> $TotalAmount,
                'order_amount'      => $TotalAmount,
                'order_total_num'   => $TotalNumber,
                'table_id'          => $table_id,
            ];
            
            $OrderData['pay_name'] = 'wechat';// 如果在微信端中则默认为微信支付
            $OrderData['wechat_pay_type'] = 'WeChatInternal';// 如果在微信端中则默认为微信端调起支付
            // Db::startTrans();
            $OrderId = Db::name('shop_order')->insertGetId($OrderData);
             if (!empty($OrderId)) {

                $cart_ids   = $UpSpecValue = [];
                $attr_value = $spec_value = '';
                $shopModel = Model('Shop');

                // 添加到订单明细表
                foreach ($cart_data as $key => $value) {
                    // 产品规格处理

                    $spec_value = $shopModel->ProductSpecProcessing($value);
                    $Data = [
                        // 产品属性
                        'attr_value' => '',
                        // 产品规格
                        'spec_value' => htmlspecialchars($spec_value),
                        // 产品规格值ID
                        'spec_value_id' => $value['spec_value_id'],
                        // 对应规格值ID的唯一标识ID，数据表主键ID
                        'value_id'   => $value['value_id'],
                        // 后续添加
                    ];
                    // 订单副表添加数组
                    $OrderDetailsData[] = [
                        'order_id'      => $OrderId,
                        'users_id'      => $OrderData['users_id'],
                        'product_id'    => $value['aid'],
                        'product_name'  => $value['title'],
                        'num'           => $value['product_num'],
                        'data'          => serialize($Data),
                        'product_price' => $value['users_price'],
                        // 'prom_type'     => $value['prom_type'],
                        'litpic'        => $value['litpic'],
                        'add_time'      => $time,
                    ];

                    // 处理购物车ID
                    if (empty($value['under_order_type'])) {
                        array_push($cart_ids, $value['cart_id']);
                    }

                    // 产品库存处理
                    $UpSpecValue[] = [
                        'aid'           => $value['aid'],
                        'value_id'      => $value['value_id'],
                        'quantity'      => $value['product_num'],
                        'spec_value_id' => $value['spec_value_id'],
                    ];
                }

                $DetailsId = Db::name('shop_order_details')->insertAll($OrderDetailsData);

                if (!empty($OrderId) && !empty($DetailsId)) {
                    // 清理购物车中已下单的ID
                    if (!empty($cart_ids)) {
                        Db::name('shop_cart')->where('cart_id','IN',$cart_ids)->delete();
                    }

                    // 产品库存、销量处理
                    $shopModel->ProductStockProcessing($UpSpecValue);

                    // 选择在线付款并且在手机微信端、小程序中则返回订单ID，订单号，订单交易类型
                    $ReturnOrderData = [
                        'unified_id'       => $OrderId,
                        'order_code'   => $OrderData['order_code'],
                        'transaction_type' => 2, // 订单支付购买
                        'order_total_amount' => $TotalAmount,
                        'order_status'=>0,
                        'order_time' =>date('Y-m-d H:i',$time)
                    ];

                    foreach ($OrderDetailsData as $key => $value) {
                        $data = unserialize($value['data']);
                        $data['spec_value'] = htmlspecialchars_decode($data['spec_value']);
                        $OrderDetailsData[$key]['data'] = $data['spec_value'];
                    }

                    $ReturnOrderData['commodity'] = $OrderDetailsData;

                    return return_ajax(2,'订单生成成功',$ReturnOrderData);
                    
            }else{
                 return return_ajax(2,'订单生成失败');
            }


        }

    }

    // 取消订单
    public function shop_order_cancel()
    {

        $order_id = input('param.order_id');

        if (!empty($order_id)) {
            // 更新条件
            $Where = [
                'order_id' => $order_id,
            ];
            // 更新数据
            $Data  = [
                'order_status' => '-1',
                // 'update_time'  => getTime(),
            ];
            // 更新订单主表
            $return = Db::name('shop_order')->where($Where)->update($Data);

            if (!empty($return)) {
                // 订单取消，还原单内产品数量 
                model('ProductSpecValue')->SaveProducSpecValueStock($order_id);
                // 添加订单操作记录
                return return_ajax(1,'订单已取消！');
            }else{
                return return_ajax(2,'操作失败！');

            }
        }
    }

}