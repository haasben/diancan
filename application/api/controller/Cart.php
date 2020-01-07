<?php
namespace app\api\controller;
use think\Db;
use think\Controller;
class Cart extends Common {

	public $cart;
	/**
     * 析构函数
     */
    function __construct() 
    {
        parent::__construct();
        $this->cart = Model('Cart');

    }
    
    /*
     * 初始化操作
     */
    public function _initialize() 
    {
        parent::_initialize();

    }

    public function cart_list(){

        
        $list = $this->cart->cart_list($this->table_id);
        return return_ajax(1,'success',$list);
    }

//添加到购物车
    public function add_cart(){

        $data = input();
        $result = $this->validate($data,
        [
            'product_id|产品ID'  => 'require',
            'product_num|产品数量'   =>'require',
            'table_id|桌号' =>'require',
        ]);
        if(true !== $result){
            // 验证失败 输出错误信息
            return return_ajax(2,$result);
        }

        if(!isset($data['spec_value_id']) || empty($data['spec_value_id'])){
            $data['spec_value_id'] = '';
        }
        //增加到购物车
        $bool = $this->cart->add_cart($data);
   
        return return_ajax($bool['code'],$bool['msg']);
        
    }
//购物车商品数量增加减少
    public function edit_num()
    {

        $data = input();
        $result = $this->validate($data,
        [
            'product_id|产品ID'  => 'require',
            'edit_status|修改状态'=>'require',
            'table_id|桌号'=>'require',
        ]);
        if(true !== $result){
            // 验证失败 输出错误信息
            return return_ajax(2,$result);
        }
        if(!isset($data['spec_value_id']) || empty($data['spec_value_id'])){
            $data['spec_value_id'] = '';
        }

        $bool = $this->cart->edit_num($data);

        return return_ajax($bool['code'],$bool['msg']);
    }

//删除购物车数据
    public function del_cart(){

        $cart_id = input('cart_id');
        if(empty($cart_id)){
            return return_ajax(2,'请选择要删除的菜品');
        }
        $bool = $this->cart->del_cart($cart_id);
        return return_ajax(1,'删除成功');
    }
//清空购物车
    public function clear_cart(){

        //增加到购物车
        $bool = $this->cart->clear_cart($this->table_id);
        if($bool){
            return return_ajax(1,'success');
        }else{
            return return_ajax(2,'清空失败');
        }
    }

//显示购物车商品的数量
    public function cart_num(){

        $cart_num = $this->cart->cart_num($this->table_id);
        return $cart_num;
    }

//



}