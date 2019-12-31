<?php if (!defined('THINK_PATH')) exit(); /*a:9:{s:36:"./template/pc/users\users_centre.htm";i:1571728724;s:53:"D:\WWW\diancan\template\pc\users\skin\css\diy_css.htm";i:1571728724;s:49:"D:\WWW\diancan\template\pc\users\users_header.htm";i:1571728724;s:49:"./public/static/template/users/users_leftmenu.htm";i:1571728724;s:47:"D:\WWW\diancan\template\pc\users\users_left.htm";i:1571728724;s:55:"D:\WWW\diancan\template\pc\users\users_centre_field.htm";i:1571728724;s:60:"./public/static/template/users/users_centre_field_mobile.htm";i:1571728724;s:60:"./public/static/template/users/users_centre_field_extend.htm";i:1571728724;s:49:"D:\WWW\diancan\template\pc\users\users_footer.htm";i:1571728724;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title>会员中心-<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?></title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmspath"); echo $__VALUE__; ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("users/skin/css/basic.css","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("users/skin/css/eyoucms.css","","",""); echo $__VALUE__; ?>
    
<!-- 官方内置样式表，升级会覆盖变动，请勿修改，否则后果自负 -->

<style>
    .panel-default .panel-heading strong{border-bottom: 2px solid <?php echo $theme_color; ?>;color: <?php echo $theme_color; ?>;}
    .panel-default .panel-heading span{color:<?php echo $theme_color; ?>}
    .btn-primary{background: <?php echo $theme_color; ?> !important; border:1px solid <?php echo $theme_color; ?> !important}
    .btn-primary:hover,.btn-primary:focus,.btn-primary:active{background: <?php echo $theme_color; ?> !important;}
    .ey-head .user-info .breadcrumb a{ color:<?php echo $theme_color; ?>;}
    .reg .header{background-color: <?php echo $theme_color; ?>; }
    .radio-primary input[type=radio]:checked+label::before{border-color: <?php echo $theme_color; ?>;}
    .checkbox-primary input[type=radio]:checked+label::before, .checkbox-primary input[type=checkbox]:checked+label::before{border-color: <?php echo $theme_color; ?>; background:<?php echo $theme_color; ?>}
    a.list-group-item.active, a.list-group-item.active:focus, a.list-group-item.active:hover{background: <?php echo $theme_color; ?>;}
    footer.container a{ color:<?php echo $theme_color; ?>  }
    input.form-control:hover,input.form-control:active,input.form-control:focus,input.input-txt:hover,input.input-txt:active,input.input-txt:focus{border-color:<?php echo $theme_color; ?>;outline:none }
    .hamburger.is-closed .hamb-top,.hamburger.is-closed .hamb-middle,.hamburger.is-closed .hamb-bottom,.hamburger.is-open .hamb-bottom,.hamburger.is-open .hamb-top{background:<?php echo $theme_color; ?>}
    .btn-outline.btn-success{color: <?php echo $theme_color; ?>;border-color: <?php echo $theme_color; ?>;}
    .btn-outline.btn-success.active, .btn-outline.btn-success:active, .btn-outline.btn-success:focus, .btn-outline.btn-success:hover, .open>.btn-outline.btn-success.dropdown-toggle {border-color:<?php echo $theme_color; ?>;background-color:<?php echo $theme_color; ?>;}
    .list-group-item a{ text-align:center; padding-left:0; }
    .panel-heading span.fr a{ color:<?php echo $theme_color; ?>;}
    .shop .shop-order-top .ting h4{color:<?php echo $theme_color; ?>;}
    .shop .shop-order-top .ting .price{color:<?php echo $theme_color; ?>;}
    .shop-address li.selected a.addr-list{border: 1px solid <?php echo $theme_color; ?>}
</style>

<script type="text/javascript">
    var __root_dir__ = "";
    var __version__ = "<?php echo $version; ?>";
</script>


    <?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("/public/static/common/js/jquery.min.js","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("users/skin/js/bootstrap.min.js","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("users/skin/js/global.js","","",""); echo $__VALUE__; ?>
</head>

<body class="centre">
<!-- 头部 -->
<?php if($is_mobile == '1'): ?>
    <!-- 头像上传 -->
    <div id="update_mobile_file" style="display: none;">
        <form id="form1" style="text-align: center;" >
            <input type="button" value="点击上传" onclick="up_f.click();" class="btn btn-primary"/><br>
            <p><input type="file" id="up_f" name="up_f" onchange="MobileHeadPic();" style="display:none"/></p>
        </form>
    </div>

    <script type="text/javascript">
        function MobileHeadPic(){
            $.getScript('/public/plugins/layer_mobile/layer.js?v=<?php echo $version; ?>', function(){
                // 提示信息，2秒自动关闭
                function MsgOpen(msgs){
                    layer.open({
                        content: msgs,
                        skin: 'msg',
                        time: 2,
                    });
                }

                // 提示信息，估计在底部提示，点击空白处关闭
                function FooterOpen(msgs){
                    layer.open({
                        content: msgs,
                        skin: 'footer',
                    });
                }

                // 提示动画
                function LoaDing(){
                    var loading = layer.open({
                        type:2,
                        content: '正在处理',
                    });
                    return loading;
                }

                UpdateMobileHeadPic();

                // 移动端更换头像
                function UpdateMobileHeadPic()
                {
                    // 正在处理提示动画
                    var loading = LoaDing();
                    // 获取表单对象
                    var data = new FormData($('#form2')[0]);
                    // 上传类型
                    var UpFileType = $('#UpFileType').val();
                    $.ajax({
                        url: "<?php echo url("user/Uploadify/imageUp","savepath=allimg&pictitle=head_pic&dir=images",true,false,null,null,null);?>", 
                        type: 'post',  
                        data: data,  
                        dataType: 'json',
                        cache: false,  
                        processData: false,  
                        contentType: false,
                        success:function(res){
                            if (res.state == 'SUCCESS') {
                                layer.closeAll();
                                MsgOpen('上传成功！');
                                if (1 == UpFileType) {
                                    parent.$("#litpic_inpiut").val(res.url);
                                    parent.$("#litpic_img").attr('src', res.url);
                                }else{
                                    MobileHeadPic(res.url);
                                }
                            }else{
                                layer.close(loading);
                                MsgOpen(res.state);
                            }
                        },
                        error : function() {
                            layer.close(loading);
                            FooterOpen('网络失败，请刷新页面后重试');
                        }
                    });
                };

                // 上传头像成功后加载到页面
                function MobileHeadPic(fileurl_tmp)
                {
                    $("#head_pic").val(fileurl_tmp);
                    $("#head_pic_a").attr('src', fileurl_tmp);
                    // 正在处理提示动画
                    var loading = LoaDing();
                    $.ajax({
                        url: "<?php echo url("user/Users/edit_users_head_pic","",true,false,null,null,null);?>",
                        data: {filename:fileurl_tmp},
                        type:'post',
                        dataType:'json',
                        success:function(res){
                            if (1 == res.code) {
                                layer.closeAll();
                                MsgOpen(res.msg);
                            } else {
                                layer.close(loading);
                                MsgOpen(res.msg);
                            }
                        }
                    });
                }
            })
        }
    </script>
    <!-- 头像上传结束 -->

    <!-- 弹出侧边栏 -->
    <div id="wrapper">
        <div class="overlay" style="display: none;"></div>
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper">
              <div class="sidebar-header d-flex align-items-center">
                <div class="avatar">
                    <a href="javascript:void(0);">
                        <img id="head_pic_a" class="img-fluid rounded-circle" style="width: 100%;" src="<?php echo get_head_pic($users['head_pic']); ?>" <?php if($is_mobile == '1'): ?> onClick="GetUploadify_mobile(1)" <?php else: ?> onClick="GetUploadify(1,'','allimg','head_pic_call_back_mobile')" <?php endif; ?>/>
                    </a>
                    <input type="hidden" name="head_pic" id="head_pic" value="<?php echo $users['head_pic']; ?>">
                </div>
                <div class="title">
                  <h1 class="h4"><?php echo $nickname; ?></h1>
                  <p><?php echo $users['level_name']; ?></p>
                </div>
              </div>
            <div class="list-group">
                <!-- 插件菜单 -->
                    
    <?php  $tagUsermenu = new \think\template\taglib\eyou\TagUsermenu; $_result = $tagUsermenu->getUsermenu("active", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
        <li class="list-group-item ">
            <a href="<?php echo $field['url']; ?>" class="list-group-item icon<?php echo $i; ?> <?php echo $field['currentstyle']; ?>"><i></i><?php echo $field['title']; ?></a>
        </li>
    <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
                <!-- 插件菜单 -->
                <li class="list-group-item ">
                    <a href="<?php echo url("user/Users/logout","",true,false,null,null,null);?>" class="list-group-item">退出登录</a>
                </li>
            </div>
        </nav>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
          var trigger  = $('.hamburger'),
              overlay  = $('.overlay'),
              isClosed = false;

            trigger.click(function () {
                hamburger_cross();      
            });

            function hamburger_cross() {
                if (isClosed == true) {
                    overlay.hide();
                    trigger.removeClass('is-open');
                    trigger.addClass('is-closed');
                    isClosed = false;
                    window.location.reload();
                } else {
                    overlay.show();
                    trigger.removeClass('is-closed');
                    trigger.addClass('is-open');
                    isClosed = true;
                }
            }
          
            $('[data-toggle="offcanvas"]').click(function () {
                $('#wrapper').toggleClass('toggled');
            });
        });
    </script>
    <!-- 弹出侧边栏结束 -->
<?php endif; ?>

<!-- 头像默认更换路径 -->
<script type="text/javascript">
    var GetUploadify_url = "<?php echo url("user/Uploadify/upload","",true,false,null,null,null);?>";
</script>

<!-- 头部信息 -->
<div class="ey-head">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-6 logo">
                <ul class="list-none">
                    <li><a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>" class="ey-logo"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_logo"); echo $__VALUE__; ?>" /></a></li>
                    <li>会员中心</li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-6 user-info">
                <ol class="breadcrumb pull-right">
                    <li><a href="<?php echo url("user/Users/centre","",true,false,null,null,null);?>"><?php echo $nickname; ?></a></li>
                    <li><a href="<?php echo url("user/Users/logout","",true,false,null,null,null);?>" title="退出登录">退出登录</a></li>
                </ol>
                <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
                <span class="hamb-middle"></span>
                <span class="hamb-bottom"></span>
                </button>
            </div>
        </div>
    </div>
</div>
<!-- 头部信息结束 -->
<!-- 头部结束 -->

<div class="member-profile ey-member">
    <div class="container">
        <div class="member-profile-content">
            <div class="row">

                <!-- 侧边 -->
                <?php if($is_mobile == '2'):  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("/public/plugins/layer-v3.1.0/layer.js","","",""); echo $__VALUE__; ?>
    <script type="text/javascript">
        // 头像加载
        function head_pic_call_back(fileurl_tmp)
        {
            $("#head_pic").val(fileurl_tmp);
            $("#head_pic_a").attr('src', fileurl_tmp);
            layer_loading('正在处理');
            $.ajax({
                url: "<?php echo url("user/Users/edit_users_head_pic","",true,false,null,null,null);?>",
                data: {filename:fileurl_tmp},
                type:'post',
                dataType:'json',
                success:function(res){
                    if (1 == res.code) {
                        layer.msg(res.msg, {icon:6, time:1500});
                    } else {
                        layer.closeAll();
                        layer.alert(res.msg, {icon:5});
                    }
                }
            });
        }
    </script>

    <div class="col-sm-2 sidebar panel" >
        <div class="sidebar-box">
              <div class="sidebar-header d-flex align-items-center">
                <div class="avatar">
                    <a href="javascript:void(0);">
                        <img id="head_pic_a" class="img-fluid rounded-circle" style="width: 100%;" src="<?php echo get_head_pic($users['head_pic']); ?>" <?php if($is_mobile == '1'): ?> onClick="GetUploadify_mobile(1)" <?php else: ?> onClick="GetUploadify(1,'','allimg','head_pic_call_back')" <?php endif; ?>/>
                    </a>
                    <input type="hidden" name="head_pic" id="head_pic" value="<?php echo $users['head_pic']; ?>">
                </div>
                <div class="title">
                  <h1 class="h4"><?php echo $nickname; ?></h1>
                  <p><?php echo $users['level_name']; ?></p>
                </div>
              </div>
              
            <div class="list-group">
                <!-- 扩展菜单 -->
                    
    <?php  $tagUsermenu = new \think\template\taglib\eyou\TagUsermenu; $_result = $tagUsermenu->getUsermenu("active", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
        <li class="list-group-item ">
            <a href="<?php echo $field['url']; ?>" class="list-group-item icon<?php echo $i; ?> <?php echo $field['currentstyle']; ?>"><i></i><?php echo $field['title']; ?></a>
        </li>
    <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
                <!-- 扩展菜单 -->
            </div>
        </div>
    </div>
<?php endif; ?>


                <!-- 侧边结束 -->
                
                <!-- 中部 -->
                <div class="col-xs-12 col-sm-10 ey-member-safety" >
                    <div class="panel m-b-0">
                        <div class="panel-body ey-member-index ey-member-profile">
                            <div class="panel panel-default m-b-0 basic">
                                <div class="panel-heading">
                                    <strong><?php echo $eyou['field']['title']; ?></strong>
                                    <?php if($is_mobile == '1'): ?>
                                        <span onclick="ChangePwdMobile();">
                                    <?php else: ?>
                                        <span onclick="ChangePwd();">
                                    <?php endif; ?>
                                        修改密码
                                    </span>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            用户名
                                        </div>
                                        <div class="col-xs-9">
                                            <?php echo $users['username']; ?>
                                        </div>
                                    </div>
                                    
                                    <form name='theForm' id="theForm">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                昵称
                                            </div>
                                            <div class="col-xs-9">
                                                <input type="text" name="nickname" value="<?php echo $users['nickname']; ?>">
                                            </div>
                                        </div>
                                        <?php if(empty($users['password']) || (($users['password'] instanceof \think\Collection || $users['password'] instanceof \think\Paginator ) && $users['password']->isEmpty())): ?>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                设置密码
                                            </div>
                                            <div class="col-xs-9">
                                                <input type="text" name="password" id="password"><br/>
                                                微信注册用户，请设置密码。
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                        <!-- 更多资料中的会员属性 -->
                                        <?php if(is_array($users_para) || $users_para instanceof \think\Collection || $users_para instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $users_para;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); switch($vo['dtype']): case "hidden": ?>
                <!-- 隐藏域 start -->
                <div class="row" style="display: none;">
                    <dt class="tit">
                        &nbsp;&nbsp;<label><?php echo $vo['title']; ?></label>
                    </dt>
                    <dd class="opt">
                        <input type="hidden" class="input-txt" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" value="<?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:''); ?>">
                        <span class="err"></span>
                        <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                    </dd>
                </div>
                <!-- 隐藏域 start -->
            <?php break; case "mobile": ?>
                <!-- 手机文本框 start -->
                
                <div class="row">
                    <div class="col-xs-3"><?php echo $vo['title']; ?></div>
                    <div class="col-xs-9">
                        <?php if(1 == $vo['is_required']): ?>
                            <span class="redx">*</span>
                        <?php else: ?>
                            <span class="redx">&nbsp;</span>
                        <?php endif; ?>
                        <input type="text" class="input-txt" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" value="<?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:''); ?>"><?php echo (isset($vo['dfvalue_unit']) && ($vo['dfvalue_unit'] !== '')?$vo['dfvalue_unit']:''); ?>
                        <span class="err"></span>
                        <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                    </div>
                </div>
                <!-- <div class="form-group">                
                    <div class="row">
                        <div class="ey-form-file-title col-md-3">
                            <?php echo $vo['title']; if(1 == $vo['is_required']): ?>
                                <font color="red">*</font>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">                
                                <input type="text" class="form-control" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" value="<?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:''); ?>" placeholder="<?php echo $vo['title']; ?>">
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_code" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_code]" value="" placeholder="短信验证码">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <input type="button" onclick="get_<?php echo $vo['fieldArr']; ?><?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_code();" class="btn btn-primary" value="点击发送" style="height: 43px;" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
<!--                 <script type="text/javascript">
                    function get_<?php echo $vo['fieldArr']; ?><?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_code(){
                        
                    }
                </script> -->
                <!-- 手机文本框 end -->
            <?php break; case "email": ?>
                <!-- 邮箱文本框 start -->
                <div class="row">
                <div class="col-xs-3"><?php echo $vo['title']; ?></div>
                    <div class="col-xs-9">
                        <?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:''); if($is_mobile == '1'): ?>
                            <!-- 手机端 -->
                            <?php if($users['is_email'] == '1'): ?>
                                <span class="err"><a href="JavaScript:void(0);" onclick="BindEmailMobile('更改邮箱');">（更改邮箱）</a></span>
                            <?php else: ?>
                                <span class="err"><a href="JavaScript:void(0);" onclick="BindEmailMobile('绑定邮箱');">（绑定邮箱）</a></span>
                            <?php endif; else: ?>
                            <!-- PC端 -->
                            <?php if($users['is_email'] == '1'): ?>
                                <span class="err"><a href="JavaScript:void(0);" onclick="get_<?php echo $vo['fieldArr']; ?><?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_email_code('更改邮箱');">（更改邮箱）</a></span>
                            <?php else: ?>
                                <span class="err"><a href="JavaScript:void(0);" onclick="get_<?php echo $vo['fieldArr']; ?><?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_email_code('绑定邮箱');">（绑定邮箱）</a></span>
                            <?php endif; endif; ?>
                        <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                    </div>
                </div>
                <?php if($is_mobile == '2'): ?>
                    <script type="text/javascript">
                        function get_<?php echo $vo['fieldArr']; ?><?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_email_code(title)
                        {
                            var url = "<?php echo url("user/Users/bind_email","",true,false,null,null,null);?>";
                            if (url.indexOf('?') > -1) {
                                url += '&';
                            } else {
                                url += '?';
                            }
                            url += 'title='+title;
                            //iframe窗
                            layer.open({
                                type: 2,
                                title: title,
                                shadeClose: false,
                                maxmin: false, //开启最大化最小化按钮
                                area: ['350px', '300px'],
                                content: url
                            });
                        }
                    </script>
                <?php endif; ?>
                <!-- 邮箱文本框 end -->
            <?php break; case "text": ?>
                <!-- 单行文本框 start -->
                <div class="row">
                    <div class="col-xs-3"><?php echo $vo['title']; ?></div>
                    <div class="col-xs-9">
                        <?php if(1 == $vo['is_required']): ?>
                            <span class="redx">*</span>
                        <?php else: ?>
                            <span class="redx">&nbsp;</span>
                        <?php endif; ?>
                        <input type="text" class="input-txt" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" value="<?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:''); ?>"><?php echo (isset($vo['dfvalue_unit']) && ($vo['dfvalue_unit'] !== '')?$vo['dfvalue_unit']:''); ?>
                        <span class="err"></span>
                        <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                    </div>
                </div>
                <!-- 单行文本框 end -->
            <?php break; case "multitext": ?>
                <!-- 多行文本框 start -->
                <div class="row">
                    <div class="col-xs-3"><?php echo $vo['title']; ?></div>
                    <div class="col-xs-9">
                        <?php if(1 == $vo['is_required']): ?>
                            <span class="redx">*</span>
                        <?php else: ?>
                            <span class="redx">&nbsp;</span>
                        <?php endif; ?>
                        <textarea id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]"><?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:''); ?></textarea>
                        <span class="err"></span>
                        <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                    </div>
                </div>
                <!-- 多行文本框 end -->
            <?php break; case "checkbox": ?>
                <!-- 复选框 start -->
                <div class="row">
                    <div class="col-xs-3"><?php echo $vo['title']; ?></div>
                    <div class="col-xs-9">
                        <?php if(is_array($vo['dfvalue']) || $vo['dfvalue'] instanceof \think\Collection || $vo['dfvalue'] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $vo['dfvalue'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$v2): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                        <div class="checkbox-custom checkbox-primary">
                        <input type="checkbox" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>][]" value="<?php echo $v2; ?>" <?php if(isset($vo['trueValue']) AND in_array($v2, $vo['trueValue'])): ?>checked="checked"<?php endif; ?>><label><?php echo $v2; ?></label>
                        </div>
                        <?php echo isset($v2["ey_1563185380"])?$v2["ey_1563185380"]:""; ?><?php echo (1 == $e && isset($v2["ey_1563185376"]))?$v2["ey_1563185376"]:""; ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $v2 = []; if(1 == $vo['is_required']): ?>
                            （必选）
                        <?php endif; ?>
                        <span class="err"></span>
                        <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                        
                    </div>
                </div>
                <!-- 复选框 end -->
            <?php break; case "radio": ?>
                <!-- 单选项 start -->
                <div class="row">
                    <div class="col-xs-3"><?php echo $vo['title']; ?></div>
                    <div class="col-xs-9">
                        <?php if(is_array($vo['dfvalue']) || $vo['dfvalue'] instanceof \think\Collection || $vo['dfvalue'] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $vo['dfvalue'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$v2): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                        <div class="radio-custom radio-primary">
                        <input type="radio" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" value="<?php echo $v2; ?>" <?php if(isset($vo['trueValue']) AND in_array($v2, $vo['trueValue'])): ?>checked="checked"<?php endif; ?>><label><?php echo $v2; ?></label>
                        </div>
                        <?php echo isset($v2["ey_1563185380"])?$v2["ey_1563185380"]:""; ?><?php echo (1 == $e && isset($v2["ey_1563185376"]))?$v2["ey_1563185376"]:""; ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $v2 = []; if(1 == $vo['is_required']): ?>
                            （必选）
                        <?php endif; ?>
                        <span class="err"></span>
                        <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                    </div>
                </div>
                <!-- 单选项 end -->
            <?php break; case "select": ?>
                <!-- 下拉框 start -->
                <div class="row">
                    <div class="col-xs-3"><?php echo $vo['title']; ?></div>
                    <div class="col-xs-9">
                        <select name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>">
                            <option value="">请选择</option>
                            <?php if(is_array($vo['dfvalue']) || $vo['dfvalue'] instanceof \think\Collection || $vo['dfvalue'] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $vo['dfvalue'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$v2): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                                <option value="<?php echo $v2; ?>" <?php if(isset($vo['trueValue']) AND in_array($v2, $vo['trueValue'])): ?>selected<?php endif; ?>><?php echo $v2; ?></option>
                            <?php echo isset($v2["ey_1563185380"])?$v2["ey_1563185380"]:""; ?><?php echo (1 == $e && isset($v2["ey_1563185376"]))?$v2["ey_1563185376"]:""; ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $v2 = []; ?>
                        </select>
                            <?php if(1 == $vo['is_required']): ?>
                                <span class="redx" style="float:none">*</span>
                            <?php endif; ?>
                        <span class="err"></span>
                        <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p>
                    </div>
                </div>
                <!-- 下拉框 end -->
            <?php break; ?>
            <!-- 扩展 start -->
            <!-- 扩展 -->
            <!-- 扩展 end -->
        <?php endswitch; ?>
<?php echo isset($vo["ey_1563185380"])?$vo["ey_1563185380"]:""; ?><?php echo (1 == $e && isset($vo["ey_1563185376"]))?$vo["ey_1563185376"]:""; ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; ?>
                                        <!-- 结束 -->
                                        <div class="row" style="border-bottom:none;">
                                            <div class="col-xs-3">
                                            </div>
                                            <div class="col-xs-9">
                                                <input type="button" onclick="UpdateUsersData();" class="btn btn-primary" value="保存资料"/>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 中部结束 -->
            </div>
        </div>
    </div>
</div>

<?php if($is_mobile == '1'): ?>
    <!-- 手机端 -->
    <?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("/public/plugins/layer_mobile/layer.js","","",""); echo $__VALUE__; ?>
    <!-- 修改密码 -->
    <div id="users_change_pwd_html" style="display: none;">
        <div class="changepass">
            <form name='theForm_mobile_pwd' id="theForm_mobile_pwd" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="password" name="oldpassword" required class="form-control" placeholder="原密码">
                    </div>
                    <br/>
                    <div class="form-group">
                        <input type="password" name="password" required class="form-control" placeholder="新密码">
                    </div>
                    <br/>
                    <div class="form-group">
                        <input type="password" name="password2" required data-password="password" class="form-control" placeholder="确认密码">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="SubmitPwdData();">确定</button>
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        // 提示信息，2秒自动关闭
        function msg_open(msgs){
            layer.open({
                content: msgs,
                skin: 'msg',
                time: 2,
            });
        }

        // 提示信息，估计在底部提示，点击空白处关闭
        function footer_open(msgs){
            layer.open({
                content: msgs,
                skin: 'footer',
            });
        }

        // 提示动画
        function loa_ding(){
            var loading = layer.open({
                type:2,
                content: '正在处理',
            });
            return loading;
        }

        // 修改密码
        function ChangePwdMobile()
        {
            var content = $('#users_change_pwd_html').html();
            content = content.replace(/theForm_mobile_pwd/g, 'change_pwd_mobile_2019');
            layer.open({
                type: 1,
                title: '修改密码',
                style:'position:fixed; bottom:0; left:0; width: 100%; padding:10px 0; border:none;max-width: 100%;',
                anim:'up',
                content: content,
            });
            
        }

        // 提交修改密码信息
        function SubmitPwdData()
        {
            var loading = loa_ding();// 正在处理提示动画
            $.ajax({
                url: "<?php echo url("user/Users/change_pwd","",true,false,null,null,null);?>",
                data: $('#change_pwd_mobile_2019').serialize(),
                type:'post',
                dataType:'json',
                success:function(res){
                    if(res.code == 1){
                        layer.closeAll();
                        msg_open(res.msg);
                    }else{
                        layer.close(loading);
                        msg_open(res.msg);
                    }
                },
                error : function() {
                    layer.close(loading);
                    footer_open('网络失败，请刷新页面后重试');
                }
            });
        }

        // 修改会员属性信息
        function UpdateUsersData()
        {
            var loading = loa_ding();// 正在处理提示动画
            $.ajax({
                url: "<?php echo url("user/Users/centre_update","",true,false,null,null,null);?>",
                data: $('#theForm').serialize(),
                type:'post',
                dataType:'json',
                success:function(res){
                    layer.closeAll();
                    if (1 == res.code) {
                        // 删除密码框
                        // $('#password').parent().parent().remove();
                        msg_open(res.msg);
                        location.reload();
                    } else {
                        msg_open(res.msg);
                    }
                },
                error : function() {
                    layer.closeAll();
                    footer_open('网络失败，请刷新页面后重试');
                }
            });
        };
    </script>
    <!-- 修改密码结束 -->

    <!-- 绑定、更换邮箱 -->
    <div id="users_bind_email_html" style="display: none;">
        <div class="changepass">
            <form name='theForm_mobile_email' id="theForm_mobile_email" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" id="email_mobile_old" name="email" <?php if($users['is_email'] == '0'): ?> value="<?php echo $users['email']; ?>" <?php endif; ?> required class="form-control" placeholder="新的邮箱地址">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group" style="position: relative;">
                            <input type="text" class="form-control" id="email_code_mobile" name="email_code" placeholder="邮箱验证码" style="">
                            <input type="button" id="email_button_mobile" onclick="GetEmailCodeMobile();" class="btn btn-primary" value="点击发送" />
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" style="width:88%;" onclick="SubmitDataMobile();">确定</button>
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        // 绑定、更换邮箱
        function BindEmailMobile(title)
        {
            var content = $('#users_bind_email_html').html();
            content = content.replace(/theForm_mobile_email/g, 'bind_email_mobile_2019');
            content = content.replace(/email_mobile_old/, 'email_mobile_2019');
            content = content.replace(/email_code_mobile/, 'email_code_mobile_2019');
            content = content.replace(/email_button_mobile/, 'email_button_mobile_2019');
            layer.open({
                type: 1,
                title: title,
                style:'position:fixed; bottom:0; left:0; width: 100%; padding:10px 0; border:none;max-width: 100%;',
                anim:'up',
                content: content,
            });
        }

        // 获取邮箱验证码
        function GetEmailCodeMobile()
        {
            // 正在处理提示动画
            var loading = loa_ding();
            // 标题
            var title = $('h3').html();
            // 邮箱地址
            var email = $("#email_mobile_2019").val();
            // 验证邮箱格式是否正确
            var reg = /^[a-z0-9]([a-z0-9\\.]*[-_]{0,4}?[a-z0-9-_\\.]+)*@([a-z0-9]*[-_]?[a-z0-9]+)+([\.][\w_-]+){1,5}$/i;
            if(!reg.test(email)){
                layer.close(loading);
                msg_open('邮箱格式不正确，请正确输入邮箱地址！');
                return false;
            }

            $("#email_button_mobile_2019").val('发送中…');
            $.ajax({
                url: "<?php echo url("user/Smtpmail/send_email","",true,false,null,null,null);?>",
                data: {email:email,title:title,type:'bind_email',scene:'3'},
                type:'post',
                dataType:'json',
                success:function(res){
                    if(res.code == 1){
                        layer.close(loading);
                        CountDown();
                        msg_open(res.msg);
                    }else{
                        $("#email_button_mobile_2019").val('点击发送');
                        layer.close(loading);
                        msg_open(res.msg);
                    }
                },
                error : function() {
                    $("#email_button_mobile_2019").val('点击发送');
                    layer.close(loading);
                    footer_open('网络失败，请刷新页面后重试');
                }
            });
        }

        // 提交邮箱绑定信息
        function SubmitDataMobile()
        {   
            var loading = loa_ding();// 正在处理提示动画

            // 验证邮箱格式是否正确
            var email = $("#email_mobile_2019").val();
            var reg = /^[a-z0-9]([a-z0-9\\.]*[-_]{0,4}?[a-z0-9-_\\.]+)*@([a-z0-9]*[-_]?[a-z0-9]+)+([\.][\w_-]+){1,5}$/i;
            if(!reg.test(email)){
                layer.close(loading);
                msg_open('邮箱格式不正确，请正确输入邮箱地址！');
                return false;
            }

            // 邮箱验证码不能为空
            var email_code = $("#email_code_mobile_2019").val();
            if(!email_code){
                layer.close(loading);
                msg_open('邮箱验证码不能为空，请正确输入！');
                return false;
            }

            $.ajax({
                url: "<?php echo url("user/Users/bind_email","",true,false,null,null,null);?>",
                data: $('#bind_email_mobile_2019').serialize(),
                type:'post',
                dataType:'json',
                success:function(res){
                    if(res.code == 1){
                        layer.closeAll();
                        msg_open(res.msg);
                        location.reload();
                    }else{
                        layer.close(loading);
                        msg_open(res.msg);
                    }
                },
                error : function() {
                    layer.close(loading);
                    footer_open('网络失败，请刷新页面后重试');
                }
            });
        };

        // 倒计时
        function CountDown(){
            var setTime;
            var time = <?php echo config('global.email_send_time'); ?>;
            setTime = setInterval(function(){
                if(0 >= time){
                    clearInterval(setTime);
                    return;
                }
                time--;
                $("#email_button_mobile_2019").val(time+'秒');
                $("#email_button_mobile_2019").attr('disabled', 'disabled');

                if(time == 0){
                    $("#email_button_mobile_2019").val('点击发送');
                    $("#email_button_mobile_2019").removeAttr("disabled");
                }
            },1000);
        };
    </script>
    <!-- 绑定、更换邮箱结束 -->
    <!-- 手机端结束 -->

<?php else: ?>
    <!-- PC端 -->
    <script type="text/javascript">

        // 修改密码
        function ChangePwd()
        {
            var url = "<?php echo url("user/Users/change_pwd","",true,false,null,null,null);?>";
            //iframe窗
            layer.open({
                type: 2,
                title: '修改密码',
                shadeClose: false,
                maxmin: false, //开启最大化最小化按钮
                area: ['350px', '300px'],
                content: url
            });
        }

        // 修改会员属性信息
        function UpdateUsersData()
        {
            layer_loading('正在处理');
            $.ajax({
                url: "<?php echo url("user/Users/centre_update","",true,false,null,null,null);?>",
                data: $('#theForm').serialize(),
                type:'post',
                dataType:'json',
                success:function(res){
                    layer.closeAll();
                    if (1 == res.code) {
                        layer.msg(res.msg, {time: 1000},function(){
                            location.reload();
                        });
                    } else {
                        layer.msg(res.msg, {time: 1500, icon: 2});
                    }
                },
                error : function() {
                    layer.closeAll();
                    layer.alert('网络失败，请刷新页面后重试', {icon: 5});
                }
            });
        };
    </script>
    <!-- PC端结束 -->
<?php endif; ?>

<!-- 底部 -->
	<div class="ey-footer">
    <footer class="container">
        <p><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_copyright"); echo $__VALUE__; ?></p>
    </footer>
</body>
</html>