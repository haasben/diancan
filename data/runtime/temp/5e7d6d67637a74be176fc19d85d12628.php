<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:35:"./template/pc/users\shop_centre.htm";i:1571728724;s:53:"D:\WWW\diancan\template\pc\users\skin\css\diy_css.htm";i:1571728724;s:49:"D:\WWW\diancan\template\pc\users\users_header.htm";i:1571728724;s:49:"./public/static/template/users/users_leftmenu.htm";i:1571728724;s:47:"D:\WWW\diancan\template\pc\users\users_left.htm";i:1571728724;s:49:"D:\WWW\diancan\template\pc\users\users_footer.htm";i:1571728724;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
	<title>订单列表-<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?></title>
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

<body class="centre shop">
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
                            	<!-- 顶部导航栏 -->
                                <div class="panel-heading">
                                	<span class="fr">
                                		<a href="<?php echo url("user/Shop/shop_address_list","",true,false,null,null,null);?>" >
                                			<i class="fa fa-map-marker"></i> 管理收货地址
                                		</a>

                                        <a href="<?php echo url("user/Shop/shop_cart_list","",true,false,null,null,null);?>" >
                                        	<i class="fa fa-shopping-cart"></i> 购物车
                                        </a>
                                	</span>
                                    <strong><?php echo $eyou['field']['title']; ?></strong>
                                </div>
								<!-- 顶部导航栏结束 -->
					           	<br>

                            	<!-- 订单导航栏 -->
                            	<div class="topsub">
                            		<!-- 查询栏 -->
                            		<?php  $tagSpsearch = new \think\template\taglib\eyou\TagSpsearch; $_result = $tagSpsearch->getSpsearch(); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$search): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
							            <form  action="<?php echo $search['action']; ?>" method="get" class="serbox">
							            	<?php echo $search['hidden']; ?>
											<div class="shop-order-keyword m-y-20">
												<div class="form-group">
													<div class="input-search">
														<input type="text" class="form-control" name="keywords" value="<?php echo \think\Request::instance()->param('keywords'); ?>" placeholder="商品名称/订单号">
														<button type="submit" class="input-search-btn">
															<i class="icon wb-search" aria-hidden="true"></i>
														</button>
													</div>
												</div>
											</div>
										</form>
									<?php ++$e; endforeach;endif; else: echo htmlspecialchars_decode("");endif; $search = []; ?>
									<!-- 查询栏结束 -->

									<?php  $tagSporderlist = new \think\template\taglib\eyou\TagSporderlist; $_result = $tagSporderlist->getSpstatus();if(!empty($_result) || (($_result instanceof \think\Collection || $_result instanceof \think\Paginator ) && $_result->isEmpty())): $field3 = $_result; ?>
										<ul class="nav nav-tabs nav-tabs-line m-b-0 shop-order -state" id='each'>
											<li class="nav-item">
												<a class="nav-link <?php if(empty($field3['select_status']) || (($field3['select_status'] instanceof \think\Collection || $field3['select_status'] instanceof \think\Paginator ) && $field3['select_status']->isEmpty())): ?>active<?php endif; ?>" data-toggle="tab" href="<?php echo url("user/Shop/shop_centre","",true,false,null,null,null);?>">
													全部订单
												</a>
											</li>

											<li class="nav-item">
												<a class="nav-link <?php if($field3['select_status'] == 'dzf'): ?>active<?php endif; ?>" data-toggle="tab" href="<?php echo url("user/Shop/shop_centre","select_status=dzf",true,false,null,null,null);?>">
													<!-- select_status:dzf,表示状态为0 -->
													待付款
													<?php if(0 != $field3['PendingPayment']): ?>
														<em><?php echo $field3['PendingPayment']; ?></em>
													<?php endif; ?>
												</a>
											</li>

											<li class="nav-item">
												<a class="nav-link <?php if($field3['select_status'] == '2'): ?>active<?php endif; ?>" data-toggle="tab" href="<?php echo url("user/Shop/shop_centre","select_status=2",true,false,null,null,null);?>">
													待收货
													<?php if(0 != $field3['PendingReceipt']): ?>
														<em><?php echo $field3['PendingReceipt']; ?></em>
													<?php endif; ?>
												</a>
											</li>

											<li class="nav-item">
												<a class="nav-link <?php if($field3['select_status'] == '3'): ?>active<?php endif; ?>" data-toggle="tab" href="<?php echo url("user/Shop/shop_centre","select_status=3",true,false,null,null,null);?>">
													已完成
													<?php if(0 != $field3['Completed']): ?>
														<em><?php echo $field3['Completed']; ?></em>
													<?php endif; ?>
												</a>
											</li>
										</ul>
									<?php endif; $field3 = []; ?>
								</div>
								<!-- 订单导航栏结束 -->

								<?php if(empty($eyou['field']['data']) || (($eyou['field']['data'] instanceof \think\Collection || $eyou['field']['data'] instanceof \think\Paginator ) && $eyou['field']['data']->isEmpty())): ?>
									<!-- 订单数据为空 -->
									<div class="panel p-y-50 text-xs-center cart-not">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-4 text-lg-right iconbox"></div>
                                                <div class="col-lg-8 text-lg-left animation-fade txt">
                                                    <p class="cart-not-title m-t-0 m-b-20 blue-grey-400">
                                                    	没有查询到订单数据！
                                                    </p>
                                                    <a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>" class="btn btn-lg btn-squared btn-primary">马上去购物</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
								<?php else: ?>
									<!-- 获取订单数据列表 -->
				                    <?php  $tagSporderlist = new \think\template\taglib\eyou\TagSporderlist; $_result = $tagSporderlist->getSporderlist("10"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result["list"]; $__PAGES_ORDER__ = $_result["pages"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field):  $__SHOPCART_LIST__ = $field["details"]; $mod = ($e % 2 ); $i= intval($key) + 1;?>
										<div class="shop-order-item page-1 ">
                                            <div class="shop-order-top">
                                            	<div class="col-md-8 col-sm-8 ting">
                                            		<h4><?php echo $field['order_status_name']; ?></h4>
                                            		<span class="info">订单号 : <?php echo $field['order_code']; ?></span>
                                            		<span class="info"><?php echo date('Y-m-d H:i:s',$field['add_time']); ?></span>
                                            		<span class="info"><?php echo $field['pay_name']; ?></span>
                                            	</div>
                                                <div class="col-md-4 col-sm-4 ting text-sm-right">
                                                	<span class="price">￥<?php echo $field['order_amount']; ?>元</span><br>
                                                	含运费：¥<?php echo $field['shipping_fee']; ?>元
                                                </div>
                                                <div class="clearfix"></div>
                                           </div>

											<div class="clearfix shop-order-bottom">
												<!-- 获取订单商品 -->
												<?php  if(isset($__SHOPCART_LIST__) && !empty($__SHOPCART_LIST__)) : $_result = $__SHOPCART_LIST__; else : $_result = []; endif; if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0,1000, true) : $_result->slice(0,1000, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$order_field):  $__LIST__[$key] = $_result[$key] = $order_field;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
													<div class="col-sm-6 col-xl-7">
														<div class="media-xs m-t-10">
															<div class="media-left">
																<a href="<?php echo $order_field['arcurl']; ?>" target="_blank">
																	<img class="media-object" src="<?php echo $order_field['litpic']; ?>" alt="商品名称">
																</a>
															</div>
															<div class="media-body">
																<h4 class="media-heading">
																	<a href="<?php echo $order_field['arcurl']; ?>" target="_blank">
																		<?php echo $order_field['product_name']; ?>
																	</a>
																</h4>
																<p class="m-b-5">￥<?php echo $order_field['product_price']; ?> 元 x <?php echo $order_field['num']; ?></p>
															</div>
														</div>
			                                        </div>
												<?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $order_field = []; ?>
												<!-- 获取订单商品结束 -->
												
												<div class="col-xl-5 text-xs-right">
													<a href="<?php echo $field['OrderDetailsUrl']; ?>" class="btn btn-outline btn-default btn-squared m-t-10">
														订单详情
													</a>

													<!-- 订单状态判断，待付款 -->
													<?php if($field['order_status'] == '0'): if($is_wechat == '2'): ?>
			                                                <a href="<?php echo $field['PaymentUrl']; ?>" target="_blank" class="btn btn-primary btn-squared m-l-5 m-t-10">
																立即付款
															</a>
			                                            <?php else: ?>
			                                            	<a href="JavaScript:void(0);" class="btn btn-primary btn-squared m-l-5 m-t-10" onclick="UpdatePayMethod('<?php echo $field['order_id']; ?>','<?php echo $field['order_code']; ?>');">
																立即付款
															</a>
			                                            <?php endif; endif; ?>
													<!-- 待付款结束 -->

													<!-- 订单状态判断，待发货 -->
													<?php if($field['order_status'] == '1'): ?>
														<a href="javascript:void(0);" class="btn btn-primary btn-squared m-l-5 m-t-10" <?php echo $field['OrderRemind']; ?> >
															提醒发货
														</a>
													<?php endif; ?>
													<!-- 待发货结束 -->

													<!-- 订单状态判断，待收货 -->
													<?php if($field['order_status'] == '2'): ?>
														<!-- 订单类型判断，普通订单可查看物流，虚拟订单无需查看物流 -->
														<?php if($field['prom_type'] == '0'): if($is_wechat == '1'): ?>
																<a href="<?php echo $field['MobileExpressUrl']; ?>" class="btn btn-primary btn-squared m-l-5 m-t-10">物流查询</a>
															<?php else: ?>
																<a href="JavaScript:void(0);" class="btn btn-primary btn-squared m-l-5 m-t-10" <?php echo $field['LogisticsInquiry']; ?>>物流查询</a>
															<?php endif; endif; ?>
														<!-- 订单类型判断结束 -->
														<a href="javascript:void(0)" class="btn btn-primary btn-squared m-l-5 m-t-10" <?php echo $field['Confirm']; ?> >
															确认收货
														</a>
													<?php endif; ?>
													<!-- 待收货结束 -->
												</div>
											</div>
										</div>
										<!-- 表单、JS隐藏域 -->
										<?php echo $field['hidden']; ++$e; $__SHOPCART_LIST__ = ""; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
									<!-- 获取订单数据列表结束 -->
                			</div>
                        </div>
                    </div>
                    <!-- 分页输出 -->
                    <div class="dataTables_paginate paging_simple_numbers text-xs-center">
                    	<ul class="pagination">
                    		 <?php  $__PAGES_ORDER__ = isset($__PAGES_ORDER__) ? $__PAGES_ORDER__ : ""; $tagPagelist = new \think\template\taglib\eyou\TagPagelist; $__VALUE__ = $tagPagelist->getPagelist($__PAGES_ORDER__, "index,end,pre,next", "2"); echo $__VALUE__; ?>
                    	</ul>
                    </div>
                    <!-- 分页输出结束 -->
                    <?php endif; ?>
                </div>
                <!-- 中部结束 -->
			</div>
		</div>
	</div>
	<input type="hidden" id="unified_number">
    <input type="hidden" id="transaction_type">
</div>
<script type="text/javascript">
	// 判断支付类型是否一致并且更新支付方式
    function UpdatePayMethod(unified_id,unified_number,transaction_type='2'){
    	layer_loading('正在处理');
        $.ajax({
            url: "<?php echo url("user/Pay/update_pay_method","",true,false,null,null,null);?>",
            data: {unified_id:unified_id,unified_number:unified_number,pay_method:'WeChatInternal',transaction_type:transaction_type,order_source:2},
            type:'post',
            dataType:'json',
            success:function(res){
                layer.closeAll();
                if (0 == res.code) {
                	layer.alert(res.msg, {icon:0});
                }else{
                    if (1 == res.data.is_gourl) {
                        window.location.href = res.url;
                    }else{
                        $('#unified_number').val(unified_number);
                        $('#transaction_type').val(transaction_type);
                        WeChatInternal(unified_id,unified_number,transaction_type);
                    }
                }
            }
        });
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
            	layer.closeAll();
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
                    layer.alert('用户取消支付！', {icon:0});
                }else{
                    layer.alert('支付失败，原因可能是订单号已支付！', {icon:0});
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

