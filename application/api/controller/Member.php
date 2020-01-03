<?php

namespace app\api\controller;

use think\Db;
use think\Controller;
class Member extends Common {



	public function get_member()
	{

		$post = input();
		$pay_wechat_config = !empty($this->usersConfig['pay_wechat_config']) ? unserialize($this->usersConfig['pay_wechat_config']) : [];
		// dump($pay_wechat_config);die;
		$appid = $this->appid;
		$secret = $this->AppSecret;
		$code = trim($_POST['code']);
		//获取openid
		$url = 'https://api.weixin.qq.com/sns/jscode2session?appid='.$appid.'&secret='.$secret.'&js_code='.$code.'&grant_type=authorization_code';
		$res = httpRequest($url);
		//用户openid跟session_key
		$r = json_decode($res,true);
		if(!isset($r['openid']) || empty($r['openid'])){
			return return_ajax(2,'获取openid失败');
		}

		$openid = $r['openid'];

		$usersModel = Model('users');
		$userData = $usersModel->get_users($openid);
		$add_data['open_id'] = $openid;
		$add_data['nickname'] = $post['nickName'];
		$add_data['head_pic'] = $post['avatarUrl'];
		if(empty($userData)){

			//添加会员到数据库
			$bool = $usersModel->add_users($add_data);
		}else{
			$add_data['users_id'] = $userData['users_id'];
			$add_data['update_time'] = time();
			//修改会员数据
			$bool = $usersModel->edit_users($add_data);

		}
		
		$userData = $usersModel->get_users($openid);
		$token = md5($userData);

		cache($token,$userData);
		return ['code'=>1,'msg'=>'success','token'=>$token];



	}

	


}


