<?php

namespace app\admin\controller;

use think\Page;
use think\Db;
use think\Config;
use Endroid\QrCode\QrCode;

//桌号管理
class Table extends Base {



	public function index(){

		$list = array();
        $get = input('get.');
        $keywords = input('keywords/s');
        $condition = [];
        // 应用搜索条件
        foreach (['keywords'] as $key) {
            if (isset($get[$key]) && $get[$key] !== '') {
                if ($key == 'keywords') {
                    $condition['a.name'] = array('LIKE', "%{$get[$key]}%");
                } else {
                    $tmp_key = 'a.'.$key;
                    $condition[$tmp_key] = array('eq', $get[$key]);
                }
            }
        }
        // 多语言
        $condition['a.lang'] = array('eq', $this->admin_lang);
        if($this->store_id !=0){
            $condition['a.store_id'] = $this->store_id;
        }

        $adPositionM =  M('table');
        $count = $adPositionM->alias('a')->where($condition)->count();// 查询满足要求的总记录数
        $Page = new Page($count, config('paginate.list_rows'));// 实例化分页类 传入总记录数和每页显示的记录数
        $list = $adPositionM
        ->alias('a')
        ->where($condition)
        ->where('a.is_del',0)
        ->order('id desc')
        ->limit($Page->firstRow.','.$Page->listRows)
        ->select();

        $show = $Page->show();// 分页显示输出
        $this->assign('page',$show);// 赋值分页输出
        $this->assign('list',$list);// 赋值数据集
        $this->assign('pager',$Page);// 赋值分页对象


		return $this->fetch();
	}

    public function edit(){

        if(IS_POST){
            $data = input();
            
            $bool = Db::name('table')->where('id','<>',$data['id'])
                ->where('name',$data['name'])
                ->limit(1)
                ->find();
            if(!empty($bool)){
                $this->error("桌号重复，请重新输入", url('Table/edit',['id'=>$data['id']]));exit;
            }

            if(empty($data['num_seats'])){
                $data['num_seats'] = 4;
            }
            $bool = M('table')->where('id',$data['id'])->update([
                'name'=>$data['name'],
                'num_seats'=>$data['num_seats'],

            ]);

            $this->success("操作成功", url('Table/index'));

            exit;
        }

        $id = input('id');
        $table_data = M('table')->where('id',$id)->limit(1)->find();
        $this->assign('table_data',$table_data);
        return $this->fetch();

    }


	public function add(){

		if(IS_POST){

			$post = input('post.');
			if(empty($post['name'])){
				$this->error("桌号不能为空", url('Table/index'));exit;
			}
			if(empty($post['num_seats'])){
				$post['num_seats'] = 4;
			}
			//查询是否有相同的座号
            

            $where['store_id'] = $this->store_id;
            $where['name'] = $post['name'];

			$bool = M('table')->where($where)->limit(1)->find();
			if($bool){
				$this->error("桌号重复，请重新输入", url('Table/add'));exit;
			}

			
			$add_data = [
                'store_id'=>$this->store_id,
				'name'=>$post['name'],
				'num_seats'=>$post['num_seats'],
				'add_time'=>time(),

			];
            $pay_wechat_config = Db::name('users_config')->where('name','pay_wechat_config')
            ->where('store_id',$this->store_id)
            ->where('lang','cn')
            ->where('inc_type','pay')
            ->limit(1)
            ->value('value');
			//var_dump($this->store_id);die;
            if(empty($pay_wechat_config)){

                $this->error('请先配置小程序信息');
            }
           
			$id = M('table')->insertGetId($add_data);
			if($id){

                 $pay_wechat_config = unserialize($pay_wechat_config);
                 // dump($pay_wechat_config);
                // $web = M('config')
                //     ->where('store_id',$this->store_id)
                //     ->where('name','web_basehost')
                //     ->value('value');

                // $web_logo = M('config')
                //     ->where('store_id',$this->store_id)
                //     ->where('name','web_logo')
                //     ->value('value');
	            // $pngurl = $web.'?table_id='.$id;
                //调用小程序接口生成带参数的小程序码
                $appid = $pay_wechat_config['appid'];
                $secret = $pay_wechat_config['appsecret'];

                $data_sting = [
                    'scene' =>'table_id'.$id,
                ];
                $data_sting = json_encode($data_sting);
                $access_token = GetWeChatMiniAccessToken($appid,$secret);

                $access_token = $access_token['token'];
                $wx_code = raw_post('https://api.weixin.qq.com/wxa/getwxacodeunlimit?access_token='.$access_token,$data_sting);

                $date = date('Ymd');
                $dir = ROOT_PATH.'uploads/qrcode/'.$date;
                 if (!is_dir($dir)){
                    if (mkdir($dir, 0777, true)) {
                    }
                }
                $file_name = md5(mt_rand(100,12542).time()).'.png';
                $url = file_put_contents($dir.DS.$file_name,$wx_code);
                $url = '/uploads/qrcode/'.$date.'/'.$file_name;
	            // $url = create_code($pngurl,$web_logo);

				M('table')->where('id',$id)->update(['code_url'=>$url]);
				$this->success("操作成功", url('Table/index'));
			}else{
				$this->error("操作失败", url('Table/index'));
			}

			exit;

		}
		return $this->fetch();

	}


	    /**
     * 删除
     */
    public function del()
    {
        $this->language_access(); // 多语言功能操作权限

        $id_arr = input('del_id/a');
        $id_arr = eyIntval($id_arr);
        if(IS_POST && !empty($id_arr)){
            
            $del_data = M('table')->field('code_url')->where('id','IN',$id_arr)->select();
            foreach ($del_data as $k => $v) {
                unlink(ROOT_PATH.$v['code_url']);
            }
            $r = M('table')->where('id','IN',$id_arr)->delete();
            if ($r) {
                
                $this->success('删除成功');
            } else {
                $this->error('删除失败');
            }
        }else{
            $this->error('参数有误');
        }
    }

    /**
    *获取桌号二维码
    */
    public function get_code(){

        if(IS_AJAX){
            $id = input('id');
            $url = M('table')->where('id',$id)->limit(1)->value('code_url');

            return ['code'=>1,'url'=>$url];
        }

    }


}