<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:44:"./application/admin/template/table\index.htm";i:1578291304;s:59:"D:\WWW\diancan\application\admin\template\public\layout.htm";i:1571728724;s:56:"D:\WWW\diancan\application\admin\template\member\bar.htm";i:1578276579;s:59:"D:\WWW\diancan\application\admin\template\public\footer.htm";i:1571728724;}*/ ?>
<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-capable" content="yes">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<link href="/public/plugins/layui/css/layui.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link href="/public/static/admin/css/main.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link href="/public/static/admin/css/page.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link href="/public/static/admin/font/css/font-awesome.min.css" rel="stylesheet" />
<!--[if IE 7]>
  <link rel="stylesheet" href="/public/static/admin/font/css/font-awesome-ie7.min.css">
<![endif]-->
<script type="text/javascript">
    var eyou_basefile = "<?php echo \think\Request::instance()->baseFile(); ?>";
    var module_name = "<?php echo MODULE_NAME; ?>";
    var GetUploadify_url = "<?php echo url('Uploadify/upload'); ?>";
    var __root_dir__ = "";
    var __lang__ = "<?php echo $admin_lang; ?>";
</script>  
<link href="/public/static/admin/js/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
<link href="/public/static/admin/js/perfect-scrollbar.min.css" rel="stylesheet" type="text/css"/>
<style type="text/css">html, body { overflow: visible;}</style>
<script type="text/javascript" src="/public/static/admin/js/jquery.js"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="/public/plugins/layer-v3.1.0/layer.js"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery.cookie.js"></script>
<script type="text/javascript" src="/public/static/admin/js/admin.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery.validation.min.js"></script>
<script type="text/javascript" src="/public/static/admin/js/common.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="/public/plugins/layui/layui.js"></script>
<script src="/public/static/admin/js/myFormValidate.js"></script>
<script src="/public/static/admin/js/myAjax2.js?v=<?php echo $version; ?>"></script>
<script src="/public/static/admin/js/global.js?v=<?php echo $version; ?>"></script>
</head>

<body class="bodystyle" style="overflow-y: scroll; cursor: default; -moz-user-select: inherit;min-width:auto;">
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page" style="min-width:auto;">
<!--         <div class="fixed-bar">
        <div class="item-title">
            <?php if(preg_match('/^money_/i', ACTION_NAME)): ?>
                <a class="back" href="<?php echo url(CONTROLLER_NAME.'/money_index'); ?>" title="返回列表">
                    <i class="fa fa-chevron-left"></i>
                </a>
            <?php else: if(preg_match('/^shop/i', CONTROLLER_NAME)): ?>
                    <a class="back" href="<?php echo url("Shop/index"); ?>" title="返回列表">
                        <i class="fa fa-chevron-left"></i>
                    </a>
                <?php else: if(preg_match('/^UsersRelease/i', CONTROLLER_NAME)): ?>
                        <a class="back" href="<?php echo url("Member/users_index"); ?>" title="返回列表">
                            <i class="fa fa-chevron-left"></i>
                        </a>
                    <?php else: ?>
                        <a class="back" href="<?php echo url(CONTROLLER_NAME.'/users_index'); ?>" title="返回列表">
                            <i class="fa fa-chevron-left"></i>
                        </a>
                    <?php endif; endif; endif; ?>
            <div class="subject">
                <h3>会员中心</h3>
                <h5></h5>
            </div>
            <ul class="tab-base nc-row">
                <?php if(is_check_access('Member@users_index') == '1'): ?>
                    <li>
                        <a href="<?php echo url('Member/users_index'); ?>" <?php if(in_array(ACTION_NAME, ['users_index','level_index','attr_index','users_config'])): ?>class="current"<?php endif; ?>>
                            <span>会员列表</span>
                        </a>
                    </li>
                <?php endif; if(is_check_access('Member@pay_set') == '1'): if(1 == $userConfig['pay_open']): ?>
                        <li>
                            <a href="<?php echo url('Member/pay_set'); ?>" <?php if(in_array(ACTION_NAME, ['pay_set','money_index','money_edit'])): ?>class="current"<?php endif; ?>>
                                <span>支付功能</span>
                            </a>
                        </li>
                    <?php endif; endif; if(is_check_access('Shop@index') == '1'): if(1 == $userConfig['shop_open']): ?>
                        <li>
                            <a href="<?php echo url('Shop/index'); ?>" <?php if(in_array(CONTROLLER_NAME, ['Shop'])): ?>class="current"<?php endif; ?>>
                                <span>商城中心</span>
                            </a>
                        </li>
                    <?php endif; endif; if(is_check_access('Level@index') == '1'): if(1 == $userConfig['level_member_upgrade']): ?>
                        <li>
                            <a href="<?php echo url('Level/index'); ?>" <?php if(in_array(CONTROLLER_NAME, ['Level'])): ?>class="current"<?php endif; ?>>
                                <span>会员升级</span>
                            </a>
                        </li>
                    <?php endif; endif; if(is_check_access('UsersRelease@conf') == '1'): if(1 == $userConfig['users_open_release']): ?>
                        <li>
                            <a href="<?php echo url('UsersRelease/conf'); ?>" <?php if(in_array(CONTROLLER_NAME, ['UsersRelease'])): ?>class="current"<?php endif; ?>>
                                <span>会员投稿</span>
                            </a>
                        </li>
                    <?php endif; endif; ?>
            </ul>
        </div>
    </div> -->
    <div class="flexigrid">
        <div class="mDiv">
            <div class="ftitle">
                <h3>桌号列表</h3>
                <h5>(共<?php echo $pager->totalRows; ?>条数据)</h5>
            </div>
            <div title="刷新数据" class="pReload"><i class="fa fa-refresh"></i></div>
            <form class="navbar-form form-inline" id="postForm" action="<?php echo url('Shop/index'); ?>" method="get" onsubmit="layer_loading('正在处理');">
                <?php echo (isset($searchform['hidden']) && ($searchform['hidden'] !== '')?$searchform['hidden']:''); ?>
                <div class="sDiv">
                    <!-- 订单状态查询 -->
                    <div class="sDiv2 fl" style="margin-right: 6px;">  
                        <select name="order_status" class="select" style="margin:0px 5px;" onchange="OrderQueryStatus();">
                            <option value="">查看全部</option>
                            <?php if(is_array($OrderStatus) || $OrderStatus instanceof \think\Collection || $OrderStatus instanceof \think\Paginator): $i = 0; $__LIST__ = $OrderStatus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo $vo['order_status']; ?>" <?php if(\think\Request::instance()->param('order_status') == $vo['order_status']): ?>selected<?php endif; ?>><?php echo $vo['status_name']; ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </div>
                    <!-- 订单号查询 -->
                    <div class="sDiv2 fl" style="margin-right: 6px;">
                        <input type="text" size="50"  name="order_code" class="qsbox" style="width: 200px;" value="<?php echo \think\Request::instance()->param('order_code'); ?>" placeholder="搜索订单号...">
                        <input type="submit" class="btn" value="搜索">
                    </div>
                </div>
            </form>
        </div>
        <div class="hDiv">
            <div class="hDivBox">
                <table cellspacing="0" cellpadding="0" style="width: 100%">
                    <thead>
                    <tr>
                        <th class="sign w40" axis="col0">
                            <div class="tc">选择</div>
                        </th>
                        <th abbr="article_title" axis="col3" class="">
                            <div style="text-align: left; padding-left: 10px;" class="">桌号名称</div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w100">
                            <div class="tc">桌位数</div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w100">
                            <div class="tc">启用</div>
                        </th>
   
                        <th axis="col1" class="w160">
                            <div class="tc">操作</div>
                        </th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="bDiv" style="height: auto;">
            <div id="flexigrid" cellpadding="0" cellspacing="0" border="0">
                <table style="width: 100%">
                    <tbody>
                    <?php if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?>
                        <tr>
                            <td class="no-data" align="center" axis="col0" colspan="50">
                                <i class="fa fa-exclamation-circle"></i>没有符合条件的记录
                            </td>
                        </tr>
                    <?php else: if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <tr>
                            <td class="sign">
                                <div class="w40 tc"><input type="checkbox" name="ids[]" value="<?php echo $vo['id']; ?>"></div>
                            </td>
                            <td class="" style="width: 100%;">
                                <div class="tl" style="padding-left: 10px;">
                                    <a href="<?php echo url('Table/edit',array('id'=>$vo['id'])); ?>">
                                        <?php echo $vo['name']; ?>
                                    </a>
                                </div>
                            </td>
                            <td class="">
                                <div class="w100 tc">
                                    <?php echo $vo['num_seats']; ?>
                                </div>
                            </td>
                            
                            <td class="">
                                <div class="w100 tc">
                                    <?php if($vo['status'] == 1): ?>
                                        <span class="yes" <?php if(is_check_access(CONTROLLER_NAME.'@edit') == '1'): ?>onClick="changeTableVal('ad_position','id','<?php echo $vo['id']; ?>','status',this);"<?php endif; ?> ><i class="fa fa-check-circle"></i>是</span>
                                    <?php else: ?>
                                        <span class="no" <?php if(is_check_access(CONTROLLER_NAME.'@edit') == '1'): ?>onClick="changeTableVal('ad_position','id','<?php echo $vo['id']; ?>','status',this);"<?php endif; ?> ><i class="fa fa-ban"></i>否</span>
                                    <?php endif; ?>
                                </div>
                            </td>
                            
                           
                            
                            <td>
                                  <div class="w160 tc">
                                    <!-- <a class="btn blue" href="<?php echo url('Other/index',array('pid'=>$vo['id'])); ?>"><i class="fa fa-search"></i>查看</a> -->
                                    <?php if(is_check_access(CONTROLLER_NAME.'@edit') == '1'): ?>
                                    <a href="<?php echo url('Table/edit',array('id'=>$vo['id'])); ?>" class="btn blue"><i class="fa fa-pencil-square-o"></i>编辑</a>
                                    <?php endif; if($main_lang == $admin_lang): if(is_check_access(CONTROLLER_NAME.'@del') == '1'): ?>
                                    <a class="btn red"  href="javascript:void(0);" data-url="<?php echo url('table/del'); ?>" data-id="<?php echo $vo['id']; ?>" onClick="delfun(this);"><i class="fa fa-trash-o"></i>删除</a>
                                    <?php endif; endif; ?>
                                    <a class="btn blue" href="javascript:void(0);" onclick="copyToClipBoard(<?php echo $vo['id']; ?>, '<?php echo $vo['name']; ?>')">二维码</a>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                    </tbody>
                </table>
            </div>
            <div class="iDiv" style="display: none;"></div>
        </div>
        <div class="tDiv">
            <div class="tDiv2">
                <div class="fbutton checkboxall">
                    <input type="checkbox" onclick="javascript:$('input[name*=ids]').prop('checked',this.checked);">
                </div>
                <div class="fbutton">
                    <a onclick="batch_del(this, 'ids');" data-url="<?php echo url('table/del'); ?>">
                        <div class="add" title="批量删除">
                            <span><i class="fa fa-close"></i>批量删除</span>
                        </div>
                    </a>
                </div>
                <div class="fbutton">
                    <a href="<?php echo url('Table/add'); ?>">
                        <div class="add" title="新增广告">
                            <span class="red"><i class="fa fa-plus"></i>新增桌号</span>
                        </div>
                    </a>
                </div>

            </div>
            <div style="clear:both"></div>
        </div>
        <!--分页位置-->
        <?php echo $page; ?>
    </div>
</div>
<script>
    $(document).ready(function(){
        // 表格行点击选中切换
        $('#flexigrid > table>tbody >tr').click(function(){
            $(this).toggleClass('trSelected');
        });

        // 点击刷新数据
        $('.fa-refresh').click(function(){
            location.href = location.href;
        });

        <?php if($is_syn_theme_shop == '1'): ?>
            syn_theme_shop();
        <?php endif; ?>
        function syn_theme_shop()
        {
            layer_loading('订单初始化');
            // 确定
            $.ajax({
                type : 'get',
                url : "<?php echo url('Shop/ajax_syn_theme_shop'); ?>",
                data : {_ajax:1},
                dataType : 'json',
                success : function(res){
                    layer.closeAll();
                    if(res.code == 1){
                        layer.msg(res.msg, {icon: 1, time: 1000});
                    }else{
                        layer.alert(res.msg, {icon: 2, title:false}, function(){
                            window.location.reload();
                        });
                    }
                },
                error: function(e){
                    layer.closeAll();
                    layer.alert(ey_unknown_error, {icon: 2, title:false}, function(){
                        window.location.reload();
                    });
                }
            })
        }
    });
/**
     * 代码调用js
     * @param id  id
     * @param limit 条数
     */
    function copyToClipBoard(id, name) {
      // var advstr = "{eyou:adv pid='" + id + "'}\r\n   <img src='{$"+"field.litpic}' alt='{$"+"field.title}' />\r\n{/eyou:adv";
      // var contentdiv = '<div class="dialog_content" style="margin: 0px; padding: 0px;"><dl style="padding:10px 30px;line-height:30px"><dd>标签 adv 调用：</dd>'
      // contentdiv += '<textarea rows="4" cols="60" style="width:400px;height:60px;">' + advstr + '}</textarea>'
      // contentdiv += '<dd>JavaScript：</dd>'
      // contentdiv += '<dd><input type="text" style=" width:400px;" value="<script type=&quot;text/javascript&quot; src=&quot;http://' + '<?php echo \think\Request::instance()->server('http_host'); ?>' + '/index.php?m=api&amp;c=Other&amp;a=other_show&amp;pid=' + id + '&amp;row='+limit+'&quot;><\/script>"></dd>'
      // contentdiv += '<dd style="border-top: dotted 1px #E7E7E7; color: #F60;">请将标签adv或JavaScript代码复制并粘贴到对应模板文件中！</dd></dl></div>'

      $.post('<?php echo url("table/get_code"); ?>',{id:id},function(data){

            if(data.code == 1){

                var contentdiv = '<img src="'+data.url+'" style="width:100%;height:100%">';
                 layer.open({
                    title: '桌号 '+name+' 二维码',
                    type: 1,
                    skin: 'layui-layer-demo',
                    area: ['300px', '300px'], //宽高
                    content: contentdiv
              });
            }
           
      })
      return false;


      
    }
   
    
</script>

<br/>
<div id="goTop">
    <a href="JavaScript:void(0);" id="btntop">
        <i class="fa fa-angle-up"></i>
    </a>
    <a href="JavaScript:void(0);" id="btnbottom">
        <i class="fa fa-angle-down"></i>
    </a>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#think_page_trace_open').css('z-index', 99999);
    });
</script>
</body>
</html>