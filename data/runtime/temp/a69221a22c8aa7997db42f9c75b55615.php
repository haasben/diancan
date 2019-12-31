<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:38:"./template/pc/users\shop_cart_list.htm";i:1573115098;s:53:"D:\WWW\diancan\template\pc\users\skin\css\diy_css.htm";i:1571728724;s:49:"D:\WWW\diancan\template\pc\users\users_header.htm";i:1571728724;s:49:"./public/static/template/users/users_leftmenu.htm";i:1571728724;s:47:"D:\WWW\diancan\template\pc\users\users_left.htm";i:1571728724;s:49:"D:\WWW\diancan\template\pc\users\users_footer.htm";i:1571728724;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title>购物车-<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?></title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmspath"); echo $__VALUE__; ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("users/skin/css/bootstrap.min.css","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("users/skin/css/basic.css","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("users/skin/css/eyoucms.css","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("users/skin/css/shop.css","","",""); echo $__VALUE__; ?>
    
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
                        <div class="">
                            <div class="panel panel-default m-b-0 basic">
                                <!-- 顶部导航栏 -->
                             
                                <!-- 顶部导航栏 -->
                                <?php  $tagSpcart = new \think\template\taglib\eyou\TagSpcart; $_result = $tagSpcart->getSpcart("");if(!empty($_result["list"]) || (($_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator ) && $_result["list"]->isEmpty())): $field = $_result; $__SHOPCART_LIST__ = $_result["list"]; ?>
                                    <div class="cart-body">
                                        <div class="cart-list animation-fade">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-xs-center">
                                                                <div class="checkbox-custom checkbox-danger">
                                                                    <input type="checkbox" class="selectable-all" <?php echo $field['InputChecked']; ?>>
                                                                    <label></label>
                                                                    <?php echo $field['InputHidden']; ?>
                                                                </div>
                                                            </th>
                                                            <th>商品</th>
                                                            <th class="text-xs-center">单价</th>
                                                            <th class="text-xs-center">数量</th>
                                                            <th class="text-xs-center">小计</th>
                                                            <th class="text-xs-right">操作</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                    <?php  if(isset($__SHOPCART_LIST__) && !empty($__SHOPCART_LIST__)) : $_result = $__SHOPCART_LIST__; else : $_result = []; endif; if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0,1000, true) : $_result->slice(0,1000, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field2):  $__LIST__[$key] = $_result[$key] = $field2;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
                                                    <tr class="text-xs-center" <?php echo $field2['ProductId']; ?>>
                                                        <td>
                                                            <div class="checkbox-custom checkbox-danger m-y-0 inline-block vertical-align-middle">
                                                                <input type="checkbox" class="selectable-item" <?php echo $field2['CartChecked']; ?>>
                                                                <label></label>
                                                            </div>
                                                            <?php echo $field2['hidden']; ?>
                                                        </td>

                                                        <td class="text-xs-left">
                                                            <div class="media-left">
                                                                <a class="avatar" target="_blank" href="<?php echo $field2['arcurl']; ?>">
                                                                    <img class="img-responsive" src="<?php echo $field2['litpic']; ?>" alt="商品图" >
                                                                </a>
                                                            </div>

                                                            <div class="media-body">
                                                                <h4 class="media-heading">
                                                                    <a target="_blank" href="<?php echo $field2['arcurl']; ?>">
                                                                        <?php echo $field2['title']; ?>
                                                                    </a>
                                                                </h4>
                                                                <p class="m-b-0">
                                                                    <?php echo $field2['attr_value']; ?>
                                                                </p>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <span <?php echo $field2['UsersPriceId']; ?>><?php echo $field2['users_price']; ?></span>元
                                                        </td>

                                                        <td>
                                                            <div class="buynum">
                                                                <div class="input-group bootstrap-touchspin input-group-sm" style="width: 100px;">
                                                                    <span class="input-group-btn">
                                                                        <button class="btn btn-default bootstrap-touchspin-down" type="button" <?php echo $field2['ReduceQuantity']; ?> >-</button>
                                                                    </span>

                                                                    <input type="text" class="form-control input-sm text-xs-center buynum-input" style="display: block;"<?php echo $field2['UpdateQuantity']; ?> >

                                                                    <span class="input-group-btn">
                                                                        <button class="btn btn-default bootstrap-touchspin-up" type="button" <?php echo $field2['IncreaseQuantity']; ?> >+</button>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td style="color: red;" class="subtotal">
                                                            <span <?php echo $field2['SubTotalId']; ?>><?php echo $field2['subtotal']; ?></span>元
                                                        </td>

                                                        <td >
                                                            <a class="cart-remove" <?php echo $field2['CartDel']; ?>>
                                                                <i class="icon wb-trash" aria-hidden="true"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field2 = []; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blankgray"></div>
                                    <div class="panel cart-total p-0 animation-fade">
                                        <div>
                                            <div class="row">

                                                <div class="col-lg-10 col-md-6 col-sm-6 text-xs-right">
                                                    <span class="total-val">
                                                        共
                                                        <span <?php echo $field['TotalNumberId']; ?> style="color: red;"><?php echo $field['TotalNumber']; ?></span>
                                                        件商品，应付金额:￥
                                                        <span <?php echo $field['TotalAmountId']; ?> style="color: red;"><?php echo $field['TotalAmount']; ?></span>
                                                        元
                                                    </span>
                                                </div>

                                                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 text-xs-right">
                                                    <a href="JavaScript:void(0);" <?php echo $field['SubmitOrder']; ?> class="btn newbtn btn-lg btn-squared btn-primary white p-x-30 cart-tocheck">去结算</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php echo $field['hidden']; else: ?>
                                    <div class="panel p-y-50 text-xs-center cart-not">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-4 text-lg-right iconbox">
                                                    <i class="icon wb-shopping-cart blue-grey-300 animation-slide-top50" aria-hidden="true"></i>
                                                </div>
                                                <div class="col-lg-8 text-lg-left animation-fade txt">
                                                    <p class="cart-not-title m-t-0 m-b-20 blue-grey-400">购物车中还没有商品，赶紧选购吧！</p>
                                                    <a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>" class="btn btn-lg btn-squared btn-outline btn-primary">马上去购物</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; $__SHOPCART_LIST__ = ""; $field = []; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 中部结束 -->
            </div>
        </div>
    </div>
</div>
<!-- 底部 -->
	<div class="ey-footer">
    <footer class="container">
        <p><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_copyright"); echo $__VALUE__; ?></p>
    </footer>
</body>
</html>