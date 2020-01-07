<?php 
namespace app\api\model;
use think\Model;
use think\Db;

/**
*@param 购物车
**/
class Cart extends Model
{
	protected $name = 'shop_cart';


//购物车列表
	public function cart_list($table_id){

		if(empty($table_id)){
			$where['c.users_id'] = input('uid');
		}else{
			$where['c.table_id'] = $table_id;
		}
		$data = self::alias('c')
			->field('c.cart_id,c.product_num,c.spec_value_id,c.table_id,a.litpic,a.aid,a.users_price as price,a.title')
			->join('archives a','c.product_id = a.aid')
			->where($where)
			->select();
		foreach ($data as $k => $v) {
			$data[$k]['is_spec'] = 0;
			if(!empty($v['spec_value_id'])){
				$data[$k]['is_spec'] = 1;
				$spec_value = $this->get_spec_value_one_archives($v['aid'],$v['spec_value_id']);
				$data[$k]['price'] = $spec_value['spec_price'];
				// $data[$k]['spec_stock'] = $spec_value['spec_stock'];
				$data[$k]['preset_value'] = $spec_value['preset_value'];
			}
		}
		return $data;


	}

//获取购物车商品的规格参数
	public function get_spec_value_one_archives($aid,$spec_value_id){

		$return_data = Db::name('product_spec_value')
			->field('spec_price')
			->where('aid',$aid)
			->where('spec_value_id',$spec_value_id)
			->limit(1)
			->find();
		$spec_val = explode('_', $spec_value_id);
		
		$data = Db::name('product_spec_preset')
			->field('preset_name,preset_value')
			->where('preset_id','in',$spec_val)
			->select();

		foreach ($data as $k => $v) {
			$return_data['preset_value'] .= '_'.$v['preset_value'];
		}
		$return_data['preset_value'] = ltrim($return_data['preset_value'],'_');

		return $return_data;
		// dump($spec);die;


	}


	public function add_cart($data){

		$where['table_id'] = $data['table_id'];
		$where['product_id'] = $data['product_id'];
		if(!empty($data['spec_value_id'])){
			$where['spec_value_id'] = $data['spec_value_id'];
		}
		$cart_data = self::where($where)->find();
		if(empty($cart_data['spec_value_id'])){
			$product_num = Db::name('archives')
			->where('aid',$data['product_id'])
			->limit(1)
			->value('stock_count');
		}else{
			$product_num = Db::name('product_spec_value')
			->where('aid',$data['product_id'])
			->where('spec_value_id',$cart_data['spec_value_id'])
			->limit(1)
			->value('spec_stock');
		}
		if($product_num < ($cart_data['product_num']+1)){
			return ['code'=>2,'msg'=>'库存不足'];
		}

		$data['add_time'] = time();
		$bool = self::allowField(true)->save($data);
        return ['code'=>1,'msg'=>'添加成功'];
	}
	public function edit_num($data){

		//查询产品库存是否充足

		$where['table_id'] = $data['table_id'];
		$where['product_id'] = $data['product_id'];
		if(!empty($data['spec_value_id'])){
			$where['spec_value_id'] = $data['spec_value_id'];
		}
		$cart_data = self::where($where)->find();

		switch ($data['edit_status']) {
			case '1':
				if(empty($cart_data['spec_value_id'])){
					$product_num = Db::name('archives')
					->where('aid',$data['product_id'])
					->limit(1)
					->value('stock_count');
				}else{
					$product_num = Db::name('product_spec_value')
					->where('aid',$data['product_id'])
					->where('spec_value_id',$cart_data['spec_value_id'])
					->limit(1)
					->value('spec_stock');
				}
				if($product_num < ($cart_data['product_num']+1)){
					return ['code'=>2,'msg'=>'库存不足'];
				}
				$status = 'setInc';
				break;
			default:
				$status = 'setDec';
				if(($cart_data['product_num'] -1) <= 0){
					
					self::where($where)->delete();
					return ['code'=>1,'msg'=>'删除成功'];
				}
				break;
		}
		
		$bool = self::where($where)->$status('product_num');
		return ['code'=>1,'msg'=>'修改成功'];
	}


	public function del_cart($cart_id){

		$bool = self::where('cart_id','in',$cart_id)->delete();
		return $bool;


	}

	public function cart_num($table_id){

		$cart_num = self::where('table_id',$table_id)
			->sum('product_num');
		return $cart_num;

	}
//清空购物车
	public function clear_cart($table_id){

		$bool = self::destroy(['table_id'=>$table_id]);

		return $bool;
	}

//查询某个产品加入到购物车的数量
	public function one_product_sum($table_id,$product_id){
		// dump($table_id);
		// dump($product_id);die;
		$sum = self::where('table_id',$table_id)->where('product_id',$product_id)->sum('product_num');
		return $sum;

	}



}