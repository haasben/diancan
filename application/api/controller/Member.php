<?php

namespace app\api\controller;

use think\Db;
use think\Controller;
class Member extends Controller {



	public function get_member()
	{

		$pay_wechat_config = !empty($this->usersConfig['pay_wechat_config']) ? unserialize($this->usersConfig['pay_wechat_config']) : [];
		// dump($pay_wechat_config);die;
		$appid = $this->appid;
		$secret = $this->AppSecret;
		$code = trim($_POST['code']);
		//获取openid
		$url = 'https://api.weixin.qq.com/sns/jscode2session?appid='.$appid.'&secret='.$secret.'&js_code='.$code.'&grant_type=authorization_code';
		$res = httprequest($url);
		//用户openid跟session_key
		$r = json_decode($res,true);

		//获取用户微信信息，包括昵称，头像等等
		$u = $_POST['data'];
		$user = json_decode($u,true);
		



	}

}


