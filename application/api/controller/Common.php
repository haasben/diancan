<?php
/**
 * 易优CMS
 * ============================================================================
 * 版权所有 2016-2028 海南赞赞网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.eyoucms.com
 * ----------------------------------------------------------------------------
 * 如果商业用途务必到官方购买正版授权, 以免引起不必要的法律纠纷.
 * ============================================================================
 * Author: 小虎哥 <1105415366@qq.com>
 * Date: 2018-4-3
 */

namespace app\api\controller;

use think\Db;
use think\Controller;

class Common extends controller {

    public $table_id;//桌号
    public $store_id;//店铺ID

    /**
     * 析构函数
     */
    function __construct() 
    {
        $this->table_id = input('table_id');
        $store_id = Db::name('table')->where('id',$this->table_id)->limit(1)->value('store_id');
        $this->store_id = $store_id;
        
    }
     public function _initialize() 
    {
        parent::_initialize();

    }

}