<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:43:"./template/pc/users\pay_recharge_detail.htm";i:1571728724;s:53:"D:\WWW\diancan\template\pc\users\skin\css\diy_css.htm";i:1571728724;s:49:"D:\WWW\diancan\template\pc\users\users_header.htm";i:1571728724;s:49:"./public/static/template/users/users_leftmenu.htm";i:1571728724;s:52:"./public/static/template/users/pay_recharge_type.htm";i:1571728724;s:49:"D:\WWW\diancan\template\pc\users\users_footer.htm";i:1571728724;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title>订单支付-<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?></title>
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
    <?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("/public/static/common/js/jquery.min.js","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("/public/plugins/layer-v3.1.0/layer.js","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("users/skin/js/global.js","","",""); echo $__VALUE__; ?>
</head>

<body>
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

<div class="member-profile ey-member">
    <div class="container">
        <div class="member-profile-content">
            <div class="row">
                <div class="page bg-pagebg1 new now">
                    <div class="page-content row">
                        <div class="panel">
                            <div class="panel-body row pay-order-top">
                                <div class="col-lg-1 col-md-1 text-xs-center">
                                    <i class="icon wb-check-circle font-size-75 green-400" aria-hidden="true"></i>
                                </div>
                                <div class="col-lg-7 col-md-6">
                                    <h1 class="text-xs-center text-md-left">订单提交成功！去付款咯~</h1>
                                        <p>订单号 : <span class="m-r-20 red-600"><?php echo $data['unified_number']; ?></span>
                                        <br class="hidden-sm-up">
                                        商品名称 : <span class="m-r-20 red-600"><?php echo $data['cause']; ?> [￥<?php echo $data['unified_amount']; ?>元]</span>
                                        <br class="hidden-sm-up">
                                    </p>
                                </div>
                                <div class="col-md-4 text-md-right font-size-20 pay-order-price">
                                    应付总额 :
                                   <span class="red-600 font-size-24">￥<?php echo $data['unified_amount']; ?>元</span>
                                    <?php if($data['transaction_type'] == '1'): ?>
                                        <a href="<?php echo url('user/Pay/pay_account_recharge', ['unified_number'=>$data['unified_number'],'money'=>$data['unified_amount']]); ?>">(更改)</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="panel m-b-0">
                            <div class="panel-body">
                                <h2 class="panel-title p-0"></h2>
                                <hr class="m-b-20">
                                <ul class="blocks-xs-2 blocks-sm-3 blocks-md-4 blocks-lg-5 blocks-xl-6 pay-order-mode-body">
                                <!-- 支付方式 -->
                                <?php if($data['transaction_type'] == '2'): ?>
<li class="text-xs-center pay-order-zhifubao" data-toggle="modal" data-target="#pay-order-modal">
    <a class="block cover pay-online" href="JavaScript:void(0);" id="BalancePayment" onclick="BalancePayment();">
        余额支付
    </a>
    拥有余额：<?php echo $users['users_money']; ?>
</li>
<?php endif; ?>

<!-- 
UpdateMethod 方法
作用说明：
点击选择支付方式时，标记订单的支付方式和支付类型并调起支付

参数说明：
第一个参数(pay_method)      ：标识支付方式及使用的支付类型，所有必传
第二个参数(url)             ：跳转调用的URL，在支付宝支付和微信H5支付时必传，其余不必穿
第三个参数(msg)             ：错误信息返回，在微信或支付宝未配置时提示
第四个参数(unified_id)      ：订单ID，微信扫码或微信内部支付时必传，其余不必传
第五个参数(unified_number)  ：订单号，微信扫码或微信内部支付时必传，其余不必传
第六个参数(transaction_type)：订单类型(金额充值或购买支付)，微信扫码或微信内部支付时必传，其余不必传
-->

<?php if($is_wechat == '2'): if(empty($is_open_alipay) || (($is_open_alipay instanceof \think\Collection || $is_open_alipay instanceof \think\Paginator ) && $is_open_alipay->isEmpty())): ?>
    <li class="text-xs-center pay-order-zhifubao" data-toggle="modal" data-target="#pay-order-modal">
        <?php if(empty($isbrowser) || (($isbrowser instanceof \think\Collection || $isbrowser instanceof \think\Paginator ) && $isbrowser->isEmpty())): ?>
            <a class="block cover pay-online" href="JavaScript:void(0);" onclick="UpdateMethod('AliPay','<?php echo $alipay_url; ?>');">
                <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/users/skin/images/payOnline_zfb.png" class="img-fluid inline-block">
            </a>
        <?php else: ?>
            <a class="block cover pay-online" href="JavaScript:void(0);" onclick="UpdateMethod('AliPayMsg');">
                <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/users/skin/images/payOnline_zfb.png" class="img-fluid inline-block">
            </a>
        <?php endif; ?>
    </li>
    <?php else: ?>
    <!-- <li class="text-xs-center pay-order-zhifubao" data-toggle="modal" data-target="#pay-order-modal">
        <a class="block cover pay-online" href="JavaScript:void(0);" onclick="UpdateMethod('AliPayMsg','','<?php echo $AlipayMsg; ?>');" >
            <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/users/skin/images/payOnline_zfb.png" class="img-fluid inline-block">
        </a>
    </li> -->
    <?php endif; endif; if(empty($is_open_wechat) || (($is_open_wechat instanceof \think\Collection || $is_open_wechat instanceof \think\Paginator ) && $is_open_wechat->isEmpty())): ?>
<li>
    <!-- 微信支付配置已配置 -->
    <?php if(empty($isweixin) || (($isweixin instanceof \think\Collection || $isweixin instanceof \think\Paginator ) && $isweixin->isEmpty())): if(empty($isbrowser) || (($isbrowser instanceof \think\Collection || $isbrowser instanceof \think\Paginator ) && $isbrowser->isEmpty())): ?>
            <!-- 在PC中支付则调用扫码支付 -->
            <!-- 微信扫码支付：WeChatScanCode -->
            <a class="block cover pay-online" href="JavaScript:void(0);" onclick="UpdateMethod('WeChatScanCode','','','<?php echo $data['unified_id']; ?>','<?php echo $data['unified_number']; ?>','<?php echo $data['transaction_type']; ?>');">
                <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/users/skin/images/weixinpay.png" class="img-fluid inline-block">
            </a>
        <?php else: ?>
            <!-- 在微信端中 -->
            <!-- 微信内部调用支付：WeChatInternal -->
            <a class="block cover pay-online" href="JavaScript:void(0);" onclick="UpdateMethod('WeChatInternal','','','<?php echo $data['unified_id']; ?>','<?php echo $data['unified_number']; ?>','<?php echo $data['transaction_type']; ?>');">
                <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/users/skin/images/weixinpay.png" class="img-fluid inline-block">
            </a>
        <?php endif; else: ?>
        <!-- 在移动端中，但并不在微信端中，支付则调用H5页面支付 -->
        <!-- 微信H5页面支付：WeChatH5 -->
         <a class="block cover pay-online" href="JavaScript:void(0);" onclick="UpdateMethod('WeChatH5','<?php echo $weixin_url; ?>');" >
            <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/users/skin/images/weixinpay.png" class="img-fluid inline-block">
        </a>
    <?php endif; ?>
</li>
<?php else: ?>
<!-- 没有配置微信支付配置：WeChatMsg -->
<!-- <li>
    <a class="block cover pay-online" href="JavaScript:void(0);" onclick="UpdateMethod('WeChatMsg','','<?php echo $WechatMsg; ?>');" >
        <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/users/skin/images/weixinpay.png" class="img-fluid inline-block">
    </a>
</li> -->
<?php endif; ?>
                                <!-- 支付方式 -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    // 查询订单是否支付
    $(function(){
        var is_open_wechat = '<?php echo $is_open_wechat; ?>';
        if (0 == is_open_wechat) {
            var i = 0;
            i = setInterval('pay_deal_with()', 500);
        }

        var t = 0;
        t = setInterval('getOrderDetail()', 2000);
    });
    
    // 查询微信订单是否已支付，若已支付则进行订单处理，0.5秒调用一次
    function pay_deal_with(){
        var unified_number   = '<?php echo $data['unified_number']; ?>';
        var transaction_type = '<?php echo $data['transaction_type']; ?>';
        $.ajax({
            url: "<?php echo url("user/Pay/pay_deal_with","",true,false,null,null,null);?>",
            data: {unified_number:unified_number,transaction_type:transaction_type},
            type:'post',
            dataType:'json',
            success:function(res){
                if (1 == res.data.status) {
                    window.location.href = res.url;
                }
            }
        });
    }

    // 查询订单用什么支付方式完成支付，2秒调用一次
    function getOrderDetail() {
        var unified_number   = '<?php echo $data['unified_number']; ?>';
        var unified_id       = '<?php echo $data['unified_id']; ?>';
        var transaction_type = '<?php echo $data['transaction_type']; ?>';
        $.ajax({
            async:false,
            url: "<?php echo url("user/Pay/get_order_detail","",true,false,null,null,null);?>",
            data: {unified_id:unified_id,unified_number:unified_number,transaction_type:transaction_type},
            type:'post',
            dataType:'json',
            success:function(res){
                if (1 == res.code) {
                    layer.msg(res.msg, {time: 2000}, function(){
                        window.location.href = res.url;
                    });
                }
            }
        });
    };

    // 更新支付方式
    function UpdateMethod(pay_method,url='',msg='',unified_id='',unified_number='',transaction_type=''){
        if ('WeChatInternal' == pay_method) {
            // 更新支付方式
            var result = UpdatePayMethod(pay_method);
            if (result) {
                layer.alert(result, {icon:0});
                return false;
            }
            // 手机微信端H5支付
            WeChatInternal(unified_id,unified_number,transaction_type);

        }else if ('WeChatScanCode' == pay_method) {
            // 更新支付方式
            var result = UpdatePayMethod(pay_method);
            if (result) {
                layer.alert(result, {icon:0});
                return false;
            }
            // PC端微信扫码支付
            WeChatScanCode(pay_method,unified_id,unified_number,transaction_type);

        }else if ('WeChatH5' == pay_method) {
            // 更新支付方式
            var result = UpdatePayMethod(pay_method);
            if (result) {
                layer.alert(result, {icon:0});
                return false;
            }
            // 手机端浏览器H5支付
            window.open(url);

        }else if ('WeChatMsg' == pay_method) {
            // 微信错误提示
            AlertMsg(msg);

        }else if ('AliPayMsg' == pay_method) {
            // 支付宝错误提示
            AlertMsg(msg);

        }else if ('AliPay' == pay_method) {
            // 更新支付方式
            var result = UpdatePayMethod(pay_method);
            if (result) {
                layer.alert(result, {icon:0});
                return false;
            }
            // 进行支付宝支付
            window.open(url);
        }
    }

    // 判断支付类型是否一致并且更新支付方式
    function UpdatePayMethod(pay_method){
        var msg = false;
        var unified_id     = '<?php echo $data['unified_id']; ?>';
        var unified_number = '<?php echo $data['unified_number']; ?>';
        var transaction_type = '<?php echo $data['transaction_type']; ?>';
        $.ajax({
            async:false,
            url: "<?php echo url("user/Pay/update_pay_method","",true,false,null,null,null);?>",
            data: {unified_id:unified_id,unified_number:unified_number,pay_method:pay_method,transaction_type:transaction_type,order_source:3},
            type:'post',
            dataType:'json',
            success:function(res){
                if (0 == res.code) {
                    msg = res.msg;
                }
            }
        });
        return msg;
    }

    // 统一调用错误信息提示
    function AlertMsg(msg='')
    {
        if (!msg) {
            msg = '在微信端不可以使用支付宝支付！';
        }
        layer.alert(msg, {icon:0});
        return false;
    }

    // 微信内部中进行支付
    function WeChatInternal(unified_id,unified_number,transaction_type)
    {
        $.ajax({
            url: "<?php echo url("user/Pay/wechat_pay","",true,false,null,null,null);?>",
            data: {unified_id:unified_id,unified_number:unified_number,transaction_type:transaction_type},
            type:'post',
            dataType:'json',
            success:function(res){
                if (1 == res.code) {
                    callpay(res.msg);
                }else{
                    layer.alert(res.msg, {icon:0});
                }
            }
        });
    }

    // 微信扫码支付，用于PC端
    function WeChatScanCode(pay_method,unified_id,unified_number,transaction_type)
    {
        var url = "<?php echo url("user/Pay/pay_method","",true,false,null,null,null);?>";
        if (url.indexOf('?') > -1) {
            url += '&';
        } else {
            url += '?';
        }
        url += 'pay_method='+pay_method+'&unified_id='+unified_id+'&unified_number='+unified_number+'&transaction_type='+transaction_type;
        //iframe窗
        layer.open({
            type: 2,
            title: '充值支付',
            shadeClose: false,
            maxmin: false, //开启最大化最小化按钮
            area: ['310px', '350px'],
            content: url
        });
    }

    // 余额支付，仅用于购买商品时支付
    function BalancePayment(){
        var unified_number = '<?php echo $data['unified_number']; ?>';
        var unified_id     = '<?php echo $data['unified_id']; ?>';
        // 禁止再次点击余额支付
        $('#BalancePayment').prop("disabled",true).css("pointer-events","none");
        $.ajax({
            url: "<?php echo url("user/Pay/balance_payment","",true,false,null,null,null);?>",
            data: {unified_id:unified_id,unified_number:unified_number},
            type:'post',
            dataType:'json',
            success:function(res){
                if (1 == res.code) {
                    layer.msg(res.msg, {time: 2000}, function(){
                        window.location.href = res.url;
                    });
                }else{
                    IsRecharge(res.msg,res.url);
                }
            }
        });
    }

    // 是否要去充值
    function IsRecharge(msg='',url=''){
        layer.confirm(msg, {
            title: false,
            btn: ['去充值','其他方式支付'],
            cancel: function(index, layero){ 
                $('#BalancePayment').prop("disabled",false).css("pointer-events","");
            }
        }, function(){
            // 去充值
            window.open(url); 
            
            layer.confirm('充值成功，是否立即支付？', {
                title: false,
                btn: ['立即支付','其他方式支付'],
                cancel: function(index, layero){ 
                    $('#BalancePayment').prop("disabled",false).css("pointer-events","");
                }
            },function(){
                // 立即支付
                BalancePayment();

            },function(index){
                // 选择其他方式支付时，恢复禁用的余额支付按钮
                $('#BalancePayment').prop("disabled",false).css("pointer-events","");
                layer.closeAll(index);
            });
        }, function(index){
            // 选择其他方式支付时，恢复禁用的余额支付按钮
            $('#BalancePayment').prop("disabled",false).css("pointer-events","");
            layer.closeAll(index);
        });
    }


    //调用微信JS api 支付
    function jsApiCall(data)
    {
        WeixinJSBridge.invoke(
            'getBrandWCPayRequest',data,
            function(res){
                if(res.err_msg == "get_brand_wcpay_request:ok"){  
                    layer.msg('微信支付完成！', {time: 1000}, function(){
                        pay_deal_with();
                    });
                }else if(res.err_msg == "get_brand_wcpay_request:cancel"){
                    layer.alert('用户取消支付！', {icon:0});
                }else{  
                    layer.alert('支付失败', {icon:0});
                }  
            }
        );
    }
    
    // 微信内部支付时，先进行数据判断
    function callpay(data)
    {
        if (typeof WeixinJSBridge == "undefined"){
            if( document.addEventListener ){
                document.addEventListener('WeixinJSBridgeReady', jsApiCall, false);
            }else if (document.attachEvent){
                document.attachEvent('WeixinJSBridgeReady', jsApiCall); 
                document.attachEvent('onWeixinJSBridgeReady', jsApiCall);
            }
        }else{
            jsApiCall(data);
        }
    }

</script>
<!-- 底部 -->
	<div class="ey-footer">
    <footer class="container">
        <p><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_copyright"); echo $__VALUE__; ?></p>
    </footer>
</body>
</html>