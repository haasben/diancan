<?php 
namespace app\api\model;
use think\Model;
use think\Db;

/**
*@param 分类模型
**/
class Arctype extends Model
{
	protected $name = 'arctype';

	public function get_cate_data($store_id){

		$data = self::field('id,typename,litpic')
			->where('lang','cn')
            ->where('is_del',0)
            ->where('status',1)
            ->where('store_id',$store_id)
            ->where('is_hidden',0)
            ->select();
        return $data;
	}

	



	



}