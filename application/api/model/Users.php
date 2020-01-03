<?php 
namespace app\api\model;
use think\Model;
use think\Db;

/**
*@param 用户模型
**/
class Arctype extends Model
{
	protected $name = 'users';

//通过openid获取用户信息
	public function get_users($openid){

		$user_data = self::where('open_id',$openid)
			->limit(1)
			->find();
        return $user_data;
	}

	public function add_users($data){

		$bool = self::allowField(true)->save($data);
		return $bool;
	}
	
	public function edit_users($data){

		$bool = self::isUpdate(true)->save($data);
		return $bool;

	}



	



}