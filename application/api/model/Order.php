<?php 
namespace app\api\model;
use think\Model;
use think\Db;

/**
*@param 订单模型
**/
class Order extends Model
{
	protected $name = 'shop_order';
	// 定义时间戳字段名
    protected $createTime = 'add_time';
    protected $updateTime = 'pay_time';

//订单列表
	public function order_list($table_id){

		$data = self::field('order_id,order_code,order_status,pay_time,order_total_amount,order_amount,order_total_num,add_time')
			->where('lang','cn')
            ->where('table_id',$table_id)
            ->where('order_status',0)
            ->select();
        return $data;
	}

//单条订单详情
	public function order_details($order_id){

		$data = self::field('order_id,order_code,order_status,pay_time,order_total_amount,order_amount,order_total_num,add_time')
			->where('lang','cn')
            ->where('order_id',$order_id)
            ->find();

        return $data;
	}
	
//单条订单详情
public function order_table_details($table_id){

	$data = self::field('order_id,order_code,order_status,pay_time,order_total_amount,order_amount,order_total_num,add_time,users_id')
		->where('lang','cn')
		->where('order_status',0)
        ->where('table_id',$table_id)
        ->limit(1)
        ->order('order_id desc')
        ->find();

    return $data;
}



	



}