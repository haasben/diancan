<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:30:"./template/pc/view_product.htm";i:1577781978;s:37:"D:\WWW\diancan\template\pc\header.htm";i:1571728724;s:37:"D:\WWW\diancan\template\pc\banner.htm";i:1571728724;s:37:"D:\WWW\diancan\template\pc\footer.htm";i:1571728724;}*/ ?>


<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=0">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp"/>
<!--页面seo标题-->
<title><?php echo $eyou['field']['seo_title']; ?></title>
<!--页面seo描述-->
<meta name="description" content="<?php echo $eyou['field']['seo_description']; ?>" />
<!--页面seo关键词-->
<meta name="keywords" content="<?php echo $eyou['field']['seo_keywords']; ?>" />
<!--网站地址栏图标-->
<link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmspath"); echo $__VALUE__; ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/amazeui.min.css","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/app.css","","",""); echo $__VALUE__; ?>
<!--[if lt IE 9]>
<div class="notsupport">
	<h1>:( 非常遗憾</h1>
	<h2>您的浏览器版本太低，请升级您的浏览器</h2>
</div>
<![endif]--> 
<?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/jquery.min.js","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/amazeui.min.js","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/app.js","","",""); echo $__VALUE__; ?> 
</head>
<body>
<!--网站公用头部——开始-->

<div class="top">
  <div class="width">
	<div class="user">
		<?php  $tagUser = new \think\template\taglib\eyou\TagUser; $__LIST__ = $tagUser->getUser("open", "off", "", "", "");if(!empty($__LIST__) || (($__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator ) && $__LIST__->isEmpty())): $field = $__LIST__;  $tagUser = new \think\template\taglib\eyou\TagUser; $__LIST__ = $tagUser->getUser("cart", "off", "", "", "");if(!empty($__LIST__) || (($__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator ) && $__LIST__->isEmpty())): $field = $__LIST__; ?>
        <a href="<?php echo $field['url']; ?>" id="<?php echo $field['id']; ?>" >购物车</a>
         <?php echo $field['hidden']; endif; $field = [];  $tagUser = new \think\template\taglib\eyou\TagUser; $__LIST__ = $tagUser->getUser("login", "off", "", "", "");if(!empty($__LIST__) || (($__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator ) && $__LIST__->isEmpty())): $field = $__LIST__; ?>
		<a href="<?php echo $field['url']; ?>" id="<?php echo $field['id']; ?>">登录</a>　
		 <?php echo $field['hidden']; endif; $field = [];  $tagUser = new \think\template\taglib\eyou\TagUser; $__LIST__ = $tagUser->getUser("reg", "off", "", "", "");if(!empty($__LIST__) || (($__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator ) && $__LIST__->isEmpty())): $field = $__LIST__; ?>
		<a href="<?php echo $field['url']; ?>" id="<?php echo $field['id']; ?>">注册</a> 
		 <?php echo $field['hidden']; endif; $field = [];  $tagUser = new \think\template\taglib\eyou\TagUser; $__LIST__ = $tagUser->getUser("logout", "off", "", "", "");if(!empty($__LIST__) || (($__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator ) && $__LIST__->isEmpty())): $field = $__LIST__; ?>
		<a href="<?php echo $field['url']; ?>" id="<?php echo $field['id']; ?>">退出</a> 
		 <?php echo $field['hidden']; endif; $field = []; endif; $field = []; ?>
	</div>	
  </div>
</div>
 <div class="width header">
  <div class="fl"><a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_logo"); echo $__VALUE__; ?>" alt="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?>"></a></div>
  <div class="fr">
     <div class="tel"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_1"); echo $__VALUE__; ?></div>
    
    </div>
  <div class="clear"></div>
</div>
    
<div class="bg_nav">
        <div class="width">
        	<ul class="nav">
             <li class="<?php if(\think\Request::instance()->param('m') == 'Index'): ?>hover<?php endif; ?>"><a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>" title="首页">首页</a></li>
			 <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 60; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "top", "hover", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
			 <li class="<?php echo $field['currentstyle']; ?>"><a href="<?php echo $field['typeurl']; ?>"><?php echo $field['typename']; ?></a>
			  <?php if(!(empty($field['children']) || (($field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator ) && $field['children']->isEmpty()))): ?>
			  <ul class="subnav">
			    <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 100; endif;if(is_array($field['children']) || $field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($field['children']) ? array_slice($field['children'],0,100, true) : $field['children']->slice(0,100, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field2): $field2["typename"] = text_msubstr($field2["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field2;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
				 <li><a href="<?php echo $field2['typeurl']; ?>"><?php echo $field2['typename']; ?></a>
	             <?php if(!(empty($field2['children']) || (($field2['children'] instanceof \think\Collection || $field2['children'] instanceof \think\Paginator ) && $field2['children']->isEmpty()))): ?>
		            <ul class="subnav2">
						<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 100; endif;if(is_array($field2['children']) || $field2['children'] instanceof \think\Collection || $field2['children'] instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($field2['children']) ? array_slice($field2['children'],0,100, true) : $field2['children']->slice(0,100, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field3): $field3["typename"] = text_msubstr($field3["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field3;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
						 <li><a href="<?php echo $field2['typeurl']; ?>"><?php echo $field3['typename']; ?></a> </li>
						<?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field3 = []; ?>   
		            </ul> 
		         <?php endif; ?>  
		         </li>
			    <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field2 = []; ?>   
			  </ul>
			 <?php endif; ?>
			 </li>
		 	 <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
            </ul>
        </div>
</div>

<!--网站公用头部——结束-->
<!--网站公用自定义文件——开始-->
<!--判断后台是否有输出图片，没有则显示默认图片开始-->
<div class="bg_inner" 
<?php $toplitpic = gettoptype($eyou['field']['typeid'],"litpic"); if(empty($toplitpic) || (($toplitpic instanceof \think\Collection || $toplitpic instanceof \think\Paginator ) && $toplitpic->isEmpty())): ?>
style="background: url(<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/cate_bg_<?php echo gettoptype($eyou['field']['typeid'],'id'); ?>.jpg) center center no-repeat;"
<?php else: ?>
style="background: url(<?php echo gettoptype($eyou['field']['typeid'],'litpic'); ?>) center center no-repeat;"
<?php endif; ?>
 >
 <!--判断后台是否有输出图片，没有则显示默认图片结束-->
  <div class="banner_inner width" >
    <div class="con"><?php echo $eyou['field']['typename']; ?><span><?php echo $eyou['field']['englist_name']; ?></span>
    </div>
  </div>
</div>




<!--网站公用自定义文件——结束-->
<div class="width inner_container">
  <!--当前位置调用-->
<ol class="am-breadcrumb">
    <li><i class="am-icon-home"></i> <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagPosition = new \think\template\taglib\eyou\TagPosition; $__VALUE__ = $tagPosition->getPosition($typeid, "", ""); echo $__VALUE__; ?></li>  
  </ol>
  <div class="pro_show">
    <div class="left">
     <!--图集循环调用——开始-->
     <!--调用一条数据-->
      <?php if(is_array($eyou['field']['image_list']) || $eyou['field']['image_list'] instanceof \think\Collection || $eyou['field']['image_list'] instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($eyou['field']['image_list']) ? array_slice($eyou['field']['image_list'],0,1, true) : $eyou['field']['image_list']->slice(0,1, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
      <div id="zoom_pic" class="zoom"><img src="<?php echo $field['image_url']; ?>" alt="<?php echo $eyou['field']['title']; ?>" width="500" id="zoom"></div>
      <?php echo isset($field["ey_1563185380"])?$field["ey_1563185380"]:""; ?><?php echo (1 == $e && isset($field["ey_1563185376"]))?$field["ey_1563185376"]:""; ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
     <!--图集循环调用——结束--> 
      <div class="thumb_pic">
        <ul>
          <!--图集循环调用——开始-->
          <?php if(is_array($eyou['field']['image_list']) || $eyou['field']['image_list'] instanceof \think\Collection || $eyou['field']['image_list'] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $eyou['field']['image_list'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
          <li <?php if($i == '1'): ?>class="hover"<?php endif; ?>><img src="<?php echo $field['image_url']; ?>" data-url="<?php echo $field['image_url']; ?>" alt="<?php echo $eyou['field']['title']; ?>" width="60" height="60"></li>
          <?php echo isset($field["ey_1563185380"])?$field["ey_1563185380"]:""; ?><?php echo (1 == $e && isset($field["ey_1563185376"]))?$field["ey_1563185376"]:""; ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
        </ul>
        <!--图集循环调用——结束-->
      </div>
    </div>
    <div class="right">
      <!--产品标题-->
      <h1><?php echo $eyou['field']['title']; ?></h1>
      <!--产品描述-->
      <div class="intro"> <?php echo $eyou['field']['seo_description']; ?></div>
      <hr>
      <!--产品参数调用——开始-->
      <ul class="attribute">
       <?php  if(empty($aid)) : $aid_tmp = ""; endif;  $taid = 0;  if(!empty($aid_tmp)) : $taid = $aid_tmp; elseif(!empty($aid)) : $taid = $aid; endif; $tagAttribute = new \think\template\taglib\eyou\TagAttribute; $_result = $tagAttribute->getAttribute($taid, "auto"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$attr): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
		<li><em><?php echo $attr['name']; ?>：</em><?php echo $attr['value']; ?> </li> 
	   <?php ++$e; endforeach;endif; else: echo htmlspecialchars_decode("");endif; $attr = []; ?>
      </ul>
      <!--产品参数调用——结束-->
      <!--商城购买行为调用——开始-->
     <!--购物车组件start--> 
<?php  $tagSppurchase = new \think\template\taglib\eyou\TagSppurchase; $__LIST__ = $tagSppurchase->getSppurchase("btn-danger");if(!empty($__LIST__) || (($__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator ) && $__LIST__->isEmpty())): $field = $__LIST__; ?> 
    <!-- 价格 标签开始 --> 
    <div class="ey-price"><span>￥<?php echo $field['users_price']; ?></span> </div> 
    <!-- 价格 标签结束 --> 

    <!-- 规格 标签开始 --> 
    <div class="ey-spec"> 
    <?php if(is_array($field['ReturnData']) || $field['ReturnData'] instanceof \think\Collection || $field['ReturnData'] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $field['ReturnData'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field2): $i= intval($key) + 1;$mod = ($i % 2 ); ?> 
        <div class="row m-t-15"> 
            <label class="form-control-label col-sm-7"><?php echo $field2['spec_name']; ?></label> 
            <div class="col-sm-10"> 
            <?php if(is_array($field2['spec_value']) || $field2['spec_value'] instanceof \think\Collection || $field2['spec_value'] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $field2['spec_value'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field3): $i= intval($key) + 1;$mod = ($i % 2 ); ?> 
                <a href="JavaScript:void(0);" <?php echo $field3['SpecData']; ?> class="btn btn-default btn-selected <?php echo $field3['SpecClass']; ?>"><?php echo $field3['spec_value']; ?></a> 
            <?php echo isset($field3["ey_1563185380"])?$field3["ey_1563185380"]:""; ?><?php echo (1 == $e && isset($field3["ey_1563185376"]))?$field3["ey_1563185376"]:""; ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field3 = []; ?> 
            </div> 
        </div> 
    <?php echo isset($field2["ey_1563185380"])?$field2["ey_1563185380"]:""; ?><?php echo (1 == $e && isset($field2["ey_1563185376"]))?$field2["ey_1563185376"]:""; ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field2 = []; ?> 
    </div> 
    <!-- 规格 标签结束 --> 

    <!-- 数量操作 标签开始 --> 
    <div class="ey-number"> 
        <label>数量</label> 
        <div class="btn-input"> 
            <button class="layui-btn" <?php echo $field['ReduceQuantity']; ?>>-</button> 
            <input type="text" class="layui-input" <?php echo $field['UpdateQuantity']; ?>> 
            <button class="layui-btn" <?php echo $field['IncreaseQuantity']; ?>>+</button> 
        </div> 
    </div> 
    <!-- 数量操作 标签结束 --> 

    <!-- 库存量 标签开始 --> 
    <span <?php echo $field['stock_show']; ?>>库存量：<?php echo $field['stock_count']; ?> 件</span> 
    <!-- 库存量 标签结束 --> 

    <!-- 购买按钮 标签开始 --> 
    <div class="ey-buyaction"> 
        <a class="ey-joinin" href="JavaScript:void(0);" <?php echo $field['ShopAddCart']; ?>>加入购物车</a> 
        <a class="ey-joinbuy" href="JavaScript:void(0);" <?php echo $field['BuyNow']; ?>>立即购买</a> 
    </div> 
    <!-- 购买按钮 标签结束 --> 

    <?php echo $field['hidden']; endif; $field = []; ?> 
<!--购物车组件end-->
      <!--商城购买行为调用——结束-->
      <!--tag标签——开始-->
      <?php if(!(empty($eyou['field']['tags']) || (($eyou['field']['tags'] instanceof \think\Collection || $eyou['field']['tags'] instanceof \think\Paginator ) && $eyou['field']['tags']->isEmpty()))): ?>
      <div class="tags"><span class="am-icon-tags"></span> 标签：
      <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(!isset($aid) || empty($aid)) : $aid = "0"; endif; $tagTag = new \think\template\taglib\eyou\TagTag; $_result = $tagTag->getTag(0, $typeid, $aid, 100, "now", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, 100, true) : $_result->slice(0, 100, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
		<a href="<?php echo $field['link']; ?>"  <?php echo $field['target']; ?>><?php echo $field['tag']; ?></a>
	  <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; unset($aid); $field = []; ?>
	  </div>
	  <?php endif; ?>
	<!--tag标签——结束-->
    </div>
    <div class="clear"></div>
  </div>
  <div class="pro_intro">
    <div class="left">
      <div class="tabs">
        <ul>
          <li class="hover"><a>推荐产品</a></li>
        </ul>
        <div class="clear"></div>
      </div>
      <div class="plist">
        <ul>
         <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "3"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 5; endif; $channelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "c",      "noflag"=> "",      "channel"=> $channelid,      "joinaid"=> "", ); $tag = array (
  'flag' => 'c',
  'orderby' => 'now',
  'titlelen' => '30',
  'row' => '5',
  'typeid' => '3',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "now", "","desc","",$tag,"0","on");if(is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 30, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
          <li><a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>">
            <div><img src="<?php echo $field['litpic']; ?>" alt="<?php echo $field['title']; ?>"></div>
            <p><?php echo $field['title']; ?></p>
            </a></li>
         <?php ++$e; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?> 
        </ul>
        <div class="clear"></div>
      </div>
    </div>
    <div class="right">
      <div class="tabs">
        <ul>
          <li class="hover"><a>产品介绍</a></li>
        </ul>
        <div class="clear"></div>
      </div>
      <div class="intro" >
        <!--产品详情-->
        <?php echo $eyou['field']['content']; ?> 
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>

<!--网站公用底部——开始-->
<div class="bg_footer">
    	<div class="width footer">
        	<div class="fl">
            	<h1><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?></h1>
                <h5></h5>
                <?php  $tagSearchform = new \think\template\taglib\eyou\TagSearchform; $_result = $tagSearchform->getSearchform("","","","",""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
				  <form method="get" action="<?php echo $field['action']; ?>">
					<?php echo $field['hidden']; ?>
                	<input type="text" name="keywords" placeholder="请输入关键字">
					<input type="submit" value="搜索">
                </form>
				<?php ++$e; endforeach;endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?> 
            </div>
            <div class="fr">
            	<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 4; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "top", "", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
                <div class="left">
                    <ul>
                        <h6><?php echo $field['typename']; ?></h6>
                        <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 100; endif;if(is_array($field['children']) || $field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($field['children']) ? array_slice($field['children'],0,100, true) : $field['children']->slice(0,100, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field2): $field2["typename"] = text_msubstr($field2["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field2;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
						<li><a href="<?php echo $field2['typeurl']; ?>" title="<?php echo $field2['typename']; ?>"><?php echo $field2['typename']; ?></a></li>
						<?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field2 = []; ?>
                    </ul>
                </div>
                <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
            </div>
            <div class="clear"></div>
            <div class="copyright">
                <?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_copyright"); echo $__VALUE__; ?>　<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_recordnum"); echo $__VALUE__; ?> <a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>/sitemap.xml">Xml网站地图 </a>
            </div>
        </div>
    </div>
    <!-- 应用插件标签 start -->
      <?php  $tagWeapp = new \think\template\taglib\eyou\TagWeapp; $__VALUE__ = $tagWeapp->getWeapp("default"); echo $__VALUE__; ?>
    <!-- 应用插件标签 end -->
    
    
    <!--[if lt IE 9]>
    <div class="notsupport">
        <h1>:( 非常遗憾</h1>
        <h2>您的浏览器版本太低，请升级您的浏览器</h2>
    </div>
    <![endif]-->
    
<!--网站公用底部——结束-->

<?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/jquery.zoombie.js","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/toastr.css","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/toastr.min.js","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/jquery.validator.min.js","","",""); echo $__VALUE__; ?> 

</body>
</html>