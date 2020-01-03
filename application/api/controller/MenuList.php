<?php

namespace app\api\controller;

use think\Db;
use think\Controller;
class MenuList extends Common {

	public $arctypeModel;
	public $archivesModel;
    
	/**
     * 析构函数
     */
    function __construct() 
    {   
        parent::__construct();
        $this->arctypeModel = Model('Arctype');
        $this->archivesModel = Model('Archives');
    }
    
    /*
     * 初始化操作
     */
    public function _initialize() 
    {
        parent::_initialize();

    }
//菜单栏列表
    public function index(){

        //菜单列表
        $menu['cate'] = $this->arctypeModel->get_cate_data();
        
        $menu['child_data'] = array();
        //获取菜单的第一个栏目
        if(isset($menu['cate'][0]['id'])){
        	$menu['child_data'] = $this->archivesModel->get_cate_archives($menu['cate'][0]['id'],$this->table_id);
        }
        
        return return_ajax(1,'success',$menu);
        
    }
//切换栏目获取对应的菜品列表
    public function get_cate_info(){

    	$id = input('id');

    	$data = $this->archivesModel->get_cate_archives($id,$this->table_id);
    	return return_ajax(1,'success',$data);
    }

//根据ID获取菜品的规格值
    public function get_spec_value($aid){

    	$aid = input('aid');
    	$data = $this->archivesModel->get_spec_value_one_archives($aid);
        // dump($data);die;
    	return return_ajax(1,'success',$data);

    }

 //获取商品详情
 	public function shop_info(){
 		$aid = input('aid');
 		$data = $this->archivesModel->shop_info($aid);
        $data['img'] = $this->archivesModel->archives_img_arr($aid); 
 		return return_ajax(1,'success',$data);
 	}   



}