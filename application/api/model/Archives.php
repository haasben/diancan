<?php 
namespace app\api\model;
use think\Model;
use think\Db;

/**
*@param 菜品模型
**/
class Archives extends Model
{
	protected $name = 'archives';

//获取某个分类下的所有菜品
	public function get_cate_archives($cate_id,$table_id){
		$data = self::alias('a')
			->field('a.aid,a.typeid,a.title,a.litpic,a.users_price,oc.content,oc.discount,oc.rebate,a.stock_count')
			->join('o_product_content oc','oc.aid = a.aid')
			->where('a.typeid',$cate_id)
			->where('a.is_del',0)
			->where('a.status',1)
			->where('a.arcrank',0)
			->order('a.sort_order')
			->select();
		$cartModel = Model('Cart');
		foreach ($data as $k => $v) {
			$data[$k]['content'] = strip_tags(htmlspecialchars_decode($v['content']));
			$data[$k]['is_spec'] = $this->get_spec_value($v['aid']);
			$data[$k]['sales_num'] = $this->mouth_sales_num($v['aid'],'month');
			//加入购物车的数量
			$data[$k]['cart_num'] = $cartModel->one_product_sum($table_id,$v['aid']);
		}

		return $data;
	}
	//商品某个时间段的销量
	public function mouth_sales_num($aid,$day){

		$sales_num = Db::name('shop_order_details')
			->where('product_id',$aid)
			->whereTime('update_time',$day)
			->sum('num');
		return $sales_num;

	}

//获取对应产品是否有规格属性
	public function get_spec_value($aid){

		$spec_value = Db::name('product_spec_data')
			->where('aid',$aid)
			->where('spec_is_select',1)
			->limit(1)
			->value('spec_id');
		if($spec_value){
			$is_spec = 1;
		}else{
			$is_spec = 0;
		}
		return $is_spec;
	}

//获取具体产品的规格
	public function get_spec_value_one_archives($aid){

		$spec = Db::name('product_spec_data')
			->field('spec_id,spec_mark_id,spec_name,spec_value_id,spec_value')
			->where('aid',$aid)
			->where('spec_is_select',1)
			->select();
		$spec_arr = array();

		foreach ($spec as $k => $v) {
			$spec_arr[$v['spec_mark_id']]['spec_id'] = $v['spec_id'];
			$spec_arr[$v['spec_mark_id']]['name'] = $v['spec_name'];
			$spec_arr[$v['spec_mark_id']]['child'][] =$v; 
		}
		sort($spec_arr);
		$new_arr = array();
		$new_arr['spec'] = $spec_arr;

		$price = Db::name('product_spec_value')
			->alias('p')
			->join('o_shop_cart sc','sc.product_id = p.aid && sc.spec_value_id = p.spec_value_id','left')
			->field('p.spec_value_id,p.spec_price,p.spec_stock,p.spec_sales_num,sc.product_num as cart_num')
			->where('p.aid',$aid)
			->select();

		foreach ($price as $k => $v) {
			if($v['cart_num'] == null){
				$price[$k]['cart_num'] = 0;
			}
			// $price[$v['spec_value_id']] = $v;
			// unset($price[$k]);
		}
		$new_arr['price'] = $price;

		return $new_arr;
	}


//获取产品的详情
	public function shop_info($aid){

		$data = self::alias('a')
			->field('a.aid,a.typeid,a.title,a.litpic,a.users_price,oc.content,oc.discount,oc.rebate,a.stock_count')
			->join('o_product_content oc','oc.aid = a.aid')
			->where('a.aid',$aid)
			->limit(1)
			->find();
		$data['content'] = strip_tags(htmlspecialchars_decode($data['content']));
		$data['sales_num'] = $this->mouth_sales_num($v['aid'],'month');
		$data['is_spec'] = $this->get_spec_value($aid);
		if($data['is_spec'] == 1){
			$data['spec'] = $this->get_spec_value_one_archives($aid);
		}
		return $data;

	}
//产品图片集
	public function archives_img_arr($aid){

		$data = Db::name('product_img')
			->field('intro as title,image_url')
			->where('aid',$aid)
			->order('sort_order')
			->select();
		return $data;



	}


}