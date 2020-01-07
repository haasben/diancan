<?php 
namespace app\api\model;
use think\Model;
use think\Db;

/**
*@param 订单详情模型
**/
class OrderDetails extends Model
{
	protected $name = 'shop_order_details';

//订单列表
	public function order_details($order_id){

		$data = self::field('product_name,num,data,product_price,special_price,litpic,is_add_dish')
			->where('order_id',$order_id)
			->select();
		foreach ($data as $k => $v) {
			// dump($v['data']);
			if(!empty($v['data'])){
				$spec_value_attr = '';
				$spec_value = unserialize($v['data']);
	            $spec_value = htmlspecialchars_decode($spec_value['spec_value']);

	            if(!empty($spec_value)){
	            	$spec_value = array_filter(explode('<br/>', $spec_value));
	            	foreach ($spec_value as $key => $value) {
	            		$spec_value_attr .= explode('：', $value)[1].'_';
	            	}
	            }
	            
	            $data[$k]['data'] = trim($spec_value_attr,'_');
			}
			
		}

		return $data;
        
	}


	



	



}