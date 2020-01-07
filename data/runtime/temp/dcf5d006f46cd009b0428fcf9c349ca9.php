<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:40:"./template/pc/users\shop_under_order.htm";i:1571728724;s:53:"D:\WWW\diancan\template\pc\users\skin\css\diy_css.htm";i:1571728724;s:49:"D:\WWW\diancan\template\pc\users\users_header.htm";i:1571728724;s:49:"./public/static/template/users/users_leftmenu.htm";i:1571728724;s:49:"D:\WWW\diancan\template\pc\users\users_footer.htm";i:1571728724;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title>下单页-<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?></title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmspath"); echo $__VALUE__; ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("users/skin/css/bootstrap.min.css","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("users/skin/css/eyoucms.css","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("users/skin/css/basic.css","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("users/skin/css/shop.css","","",""); echo $__VALUE__; ?>
    
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

    <?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("/public/static/common/js/jquery.min.js","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("/public/plugins/layer-v3.1.0/layer.js","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("/public/static/common/js/tag_global.js","","",""); echo $__VALUE__; ?>
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
        <div class="row">
        <div class="member-profile-content">
            <div class="row">
                <div class="container">
                    <div data-plugin="selectable" data-selectable="selectable">
                        <form action="" name='theForm' id="theForm" method="post">
                            <?php  $tagSpsubmitorder = new \think\template\taglib\eyou\TagSpsubmitorder; $_result = $tagSpsubmitorder->getSpsubmitorder();if(!empty($_result["data"]) || (($_result["data"] instanceof \think\Collection || $_result["data"] instanceof \think\Paginator ) && $_result["data"]->isEmpty())): $field = $_result["data"]; $__SHOPCART_LIST__ = $_result["list"]; ?>
                            <div class="panel cart-body">
                                <div class="panel-body">
                                    <!-- 判断是否填写商城配置中的温馨提示信息 -->
                                    <?php if(!(empty($field['shop_prompt']) || (($field['shop_prompt'] instanceof \think\Collection || $field['shop_prompt'] instanceof \think\Paginator ) && $field['shop_prompt']->isEmpty()))): ?>
                                        <div class="djtip">
                                            温馨提示：<?php echo $field['shop_prompt']; ?>
                                        </div>
                                        <br/>
                                    <?php endif; ?>

                                    <!-- 判断是否属于实体产品,虚拟产品不需要收货地址 -->
                                    <?php if(empty($field['PromType']) || (($field['PromType'] instanceof \think\Collection || $field['PromType'] instanceof \think\Paginator ) && $field['PromType']->isEmpty())): ?>
                                        <div>
                                            <a href="JavaScript:void(0);" <?php echo $field['ShopAddAddr']; ?> class="addadr"><i class="fa fa-plus"></i>添加收货地址</a>
                                        </div>
                                        <br/>
                                        <div>
                                            <ul class="blocks-100 blocks-sm-2 blocks-md-3 m-b-0 addr-body shop-address" <?php echo $field['UlHtmlId']; ?>>
                                                <?php  $tagSpaddress = new \think\template\taglib\eyou\TagSpaddress; $_result = $tagSpaddress->getSpaddress("data"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$addr_field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                                                    <?php echo $addr_field['DefaultHidden']; ?>
                                                    <li class="m-t-10" <?php echo $addr_field['ul_il_id']; ?>>
                                                        <a class="list-group-item addr-list hover" href="javascript:void(0)" <?php echo $addr_field['SelectEd']; ?> >
                                                            <div class="btn-group-xs" style="float: right;">
                                                                <button type="button" class="btn btn-outline btn-default addr-set-edit" <?php echo $addr_field['ShopEditAddr']; ?> >
                                                                    <i class="icon wb-edit m-0" aria-hidden="true"></i>
                                                                </button>

                                                                <button type="button" class="btn btn-outline btn-default addr-set-edit" <?php echo $addr_field['ShopDelAddr']; ?> >
                                                                    <i class="fa fa-close"></i>
                                                                </button>
                                                            </div>
                                                            <h4 class="list-group-item-heading" <?php echo $addr_field['ConsigneeId']; ?>>
                                                                <?php echo $addr_field['consignee']; ?>
                                                            </h4>

                                                            <p class="list-group-item-text m-b-5 addr-info" <?php echo $addr_field['MobileId']; ?>>
                                                                <?php echo $addr_field['mobile']; ?>
                                                            </p>

                                                            <p class="list-group-item-text addr-info" <?php echo $addr_field['InfoId']; ?>>
                                                                <?php echo $addr_field['Info']; ?>
                                                            </p>

                                                            <p class="list-group-item-text addr-info" <?php echo $addr_field['AddressId']; ?>>
                                                                <?php echo $addr_field['address']; ?>
                                                            </p>
                                                        </a>
                                                    </li>
                                                <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $addr_field = []; ?>
                                             </ul>
                                        </div>
                                        <?php else: ?>
                                        <div>
                                        <!-- 虚拟产品输出信息,可根据自身需求更改 -->
                                            该产品为虚拟产品，仅支持在线支付且无需选择收货地址及运费计算。<br/>
                                            若产品是充值类产品，请将您的手机号或需充值的卡号填入留言中。
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <div class="panel-body alpays">
                                    <?php echo $field['PayTypeHidden']; ?>
                                    <span>支付方式：</span>
                                    <a href="JavaScript:void(0);" <?php echo $field['OnlinePay']; ?> class="btn btn-info btn-primary" style="border: none;">
                                        <i class="fa fa-check-square-o"></i>在线支付
                                    </a>

                                    <!-- 判断是否开启商城配置中的货到付款开关 -->
                                    <?php if(empty($field['shop_open_offline']) || (($field['shop_open_offline'] instanceof \think\Collection || $field['shop_open_offline'] instanceof \think\Paginator ) && $field['shop_open_offline']->isEmpty())): ?>
                                        <!-- 判断是否属于实体产品,虚拟产品不支付货到付款 -->
                                        <?php if(empty($field['PromType']) || (($field['PromType'] instanceof \think\Collection || $field['PromType'] instanceof \think\Paginator ) && $field['PromType']->isEmpty())): ?>
                                            <a href="JavaScript:void(0);" <?php echo $field['DeliveryPay']; ?> class="btn btn-info" style="border: none;">
                                                <i class="fa fa-check-square-o"></i>货到付款
                                            </a>
                                        <?php endif; endif; ?>
                                </div>

                                <!-- 判断是否属于实体产品,虚拟产品不支付配送方式 -->
                                <?php if(empty($field['PromType']) || (($field['PromType'] instanceof \think\Collection || $field['PromType'] instanceof \think\Paginator ) && $field['PromType']->isEmpty())): ?>
                                    <div class="panel-body psfs">
                                        <span>配送方式：</span> 
                                        <span style="">
                                            快递配送 ( <?php echo $field['Shipping']; ?> )
                                        </span>
                                    </div>
                                <?php endif; ?>

                                <div class="panel-body">
                                    <div class="cart-list animation-fade" data-scale="500x500">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped">
                                                <thead>
                                                    <tr>
                                                        <th class="">商品</th>
                                                        <th class="text-xs-center">单价</th>
                                                        <th class="text-xs-center">小计</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php  if(isset($__SHOPCART_LIST__) && !empty($__SHOPCART_LIST__)) : $_result = $__SHOPCART_LIST__; else : $_result = []; endif; if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0,1000, true) : $_result->slice(0,1000, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$shop_field):  $__LIST__[$key] = $_result[$key] = $shop_field;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
                                                    <tr class="text-xs-center">
                                                        <td class="text-xs-left">
                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <a class="avatar text-middle" target="_blank" href="<?php echo $shop_field['arcurl']; ?>">
                                                                    <img class="img-responsive" src="<?php echo $shop_field['litpic']; ?>" alt="">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h4 class="media-heading">
                                                                        <a target="_blank" href="<?php echo $shop_field['arcurl']; ?>">
                                                                            <?php echo $shop_field['title']; ?>
                                                                        </a>
                                                                    </h4>
                                                                    <p class="m-b-0">
                                                                        <?php echo $shop_field['attr_value']; ?>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td style="width:120px">
                                                            ￥<?php echo $shop_field['users_price']; ?>元 X <?php echo $shop_field['product_num']; ?>
                                                        </td>
                                                        <td style="color: red;width:120px">
                                                            ￥<?php echo $shop_field['subtotal']; ?>元
                                                        </td>
                                                    </tr>
                                                    <?php echo $shop_field['ProductHidden']; ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $shop_field = []; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel cart-total p-0 animation-fade">
                                <textarea class="form-control" rows="3" name="message" placeholder="给商家留言，选填"></textarea>
                            </div>

                            <div class="panel cart-total tot2 p-0 animation-fade">
                                <div class="panel-body">
                                    <?php echo $field['TotalAmountOld']; ?>
                                    <div class="row">
                                        <div class="col-lg-9 col-md-6 col-sm-6 col-xs-6 text-xs-right">
                                            <span class="total-val">
                                                共选中
                                                <span style="color: red;"><?php echo $field['TotalNumber']; ?></span>
                                                件商品，合计:￥
                                                <span <?php echo $field['TotalAmountId']; ?> style="color: red;"><?php echo $field['TotalAmount']; ?></span>
                                                元
                                            </span>
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 text-xs-right">
                                            <!-- 判断是否由购物车提交过来 -->
                                            <?php if($field['submit_order_type'] == '0'): ?>
                                                <a href="<?php echo $field['ReturnCartUrl']; ?>" class="btn btn-primary">返回购物车</a>
                                            <?php endif; if($is_wechat == '2'): ?>
                                                <input type="button" name="submit" value="提交订单" class="btn btn-primary" <?php echo $field['ShopPaymentPage']; ?> >
                                            <?php else: ?>
                                                <input type="button" name="submit" value="提交订单" class="btn btn-primary" onclick="WeChatPayment();" >
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php echo $field['TokenValue']; ?>
                            <?php echo $field['hidden']; endif; $__SHOPCART_LIST__ = ""; $field = []; ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <input type="hidden" id="unified_number">
    <input type="hidden" id="transaction_type">
</div>
<script type="text/javascript">
    // 判断支付类型是否一致并且更新支付方式
    function WeChatPayment(){
        layer_loading('正在处理');
        $.ajax({
            url: "<?php echo url("user/Shop/shop_payment_page","",true,false,null,null,null);?>",
            data: $('#theForm').serialize(),
            type:'post',
            dataType:'json',
            success:function(res){
                layer.closeAll();
                if (1 == res.code) {
                    if (1 == res.data.is_gourl) {
                        window.location.href = res.url;
                    }else{
                        $('#unified_number').val(res.data.unified_number);
                        $('#transaction_type').val(res.data.transaction_type);
                        WeChatInternal(res.data);
                    }
                } else {
                    layer.msg(res.msg, {icon: 2,time: 2000});
                }
            }
        });
    }

    // 微信内部中进行支付
    function WeChatInternal(wechatdata)
    {
        $.ajax({
            url: "<?php echo url("user/Pay/wechat_pay","",true,false,null,null,null);?>",
            data: wechatdata,
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
                    layer.alert('用户取消支付，跳转至订单列表页进行支付！', {icon:0},function(){
                        var OrderUrl = "<?php echo url("user/Shop/shop_centre","",true,false,null,null,null);?>";
                        window.location.href = OrderUrl;
                    });
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

    function pay_deal_with(){
        var unified_number   = $('#unified_number').val();
        var transaction_type = $('#transaction_type').val();
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
</script>
<!-- 底部 -->
	<div class="ey-footer">
    <footer class="container">
        <p><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_copyright"); echo $__VALUE__; ?></p>
    </footer>
</body>
</html>