<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:31:"./template/pc/lists_product.htm";i:1571728724;s:37:"D:\WWW\diancan\template\pc\header.htm";i:1571728724;s:37:"D:\WWW\diancan\template\pc\banner.htm";i:1571728724;s:37:"D:\WWW\diancan\template\pc\footer.htm";i:1571728724;}*/ ?>
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
  
  <div class="home_nav">
    <ul id="subnav">
     <!--当前栏目下二级栏目调用-->
      <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "first", "hover", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); if($eyou['field']['grade'] == '2'):  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = $eyou['field']['typeid']; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field1 = $__LIST__;if($field1['parent_id'] == $field['id']): $field['currentstyle'] = 'hover'; ?> <!--标签value='hover'hover-->
                    <?php endif; endif; else: echo htmlspecialchars_decode("");endif; $field1 = []; endif; ?>
      <li class="<?php echo $field['currentstyle']; ?>"><a href="<?php echo $field['typeurl']; ?>" title="<?php echo $field['typename']; ?>"><?php echo $field['typename']; ?></a>
       <?php if(!(empty($field['children']) || (($field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator ) && $field['children']->isEmpty()))): ?>
        <dl>
         <!--当前栏目下三级栏目调用-->
          <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif;if(is_array($field['children']) || $field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($field['children']) ? array_slice($field['children'],0,10, true) : $field['children']->slice(0,10, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field2): $field2["typename"] = text_msubstr($field2["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field2;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
          <dt><a href="<?php echo $field2['typeurl']; ?>" title="<?php echo $field2['typename']; ?>"><?php echo $field2['typename']; ?></a> </dt>
          <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field2 = []; ?>
        </dl>
       <?php endif; ?> 
      </li>
      <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
    </ul>
    <div class="clear"></div>
  </div>
  <!--筛选——开始-->
  <div class="filter">
   <?php  $tagScreening = new \think\template\taglib\eyou\TagScreening; $_result = $tagScreening->getScreening("hover", "", "", "全部", "");if(!empty($_result["list"]) || (($_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator ) && $_result["list"]->isEmpty())): $field = $_result; if(is_array($field['list']) || $field['list'] instanceof \think\Collection || $field['list'] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $field['list'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
    <dl>
      <dd><?php echo $vo['title']; ?>：</dd>
      <dt> 
       <?php if(is_array($vo['dfvalue']) || $vo['dfvalue'] instanceof \think\Collection || $vo['dfvalue'] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $vo['dfvalue'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$val): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
        <a <?php echo $val['onClick']; ?> class="<?php echo $val['currentstyle']; ?>"><?php echo $val['name']; ?></a>
       <?php echo isset($val["ey_1563185380"])?$val["ey_1563185380"]:""; ?><?php echo (1 == $e && isset($val["ey_1563185376"]))?$val["ey_1563185376"]:""; ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $val = []; ?>
      </dt>
      <div class="clear"></div>
    </dl>
    <?php echo isset($vo["ey_1563185380"])?$vo["ey_1563185380"]:""; ?><?php echo (1 == $e && isset($vo["ey_1563185376"]))?$vo["ey_1563185376"]:""; ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; ?>
    <?php echo $field['hidden']; endif; $field = []; ?>  
  </div>
  <!--筛选——结束-->
  <div class="home_pro">
    <ul>
      <?php  $typeid = "";  if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> "", ); $tagList = new \think\template\taglib\eyou\TagList; $_result_tmp = $tagList->getList($param, 12, "", "", "desc", "on");if(is_array($_result_tmp) || $_result_tmp instanceof \think\Collection || $_result_tmp instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result = $_result_tmp["list"]; $__PAGES__ = $_result_tmp["pages"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 20, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
      <li><a href="<?php echo $field['arcurl']; ?>">
        <div><img src="<?php echo $field['litpic']; ?>" alt="<?php echo $field['title']; ?>" height="279"></div>
        <p class="title"><?php echo $field['title']; ?></p>
        <p class="price"><span>点击数：<?php echo $field['click']; ?> </span>¥ <?php echo $field['users_price']; ?> </p>
        </a></li>
       <?php ++$e; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>  
    </ul>
    <div class="clear"></div>
  </div>
  <!--列表分页——开始-->
  <div class="pagelist">
    <ul>
        <?php  $__PAGES__ = isset($__PAGES__) ? $__PAGES__ : ""; $tagPagelist = new \think\template\taglib\eyou\TagPagelist; $__VALUE__ = $tagPagelist->getPagelist($__PAGES__, "index,pre,pageno,next,end", "2"); echo $__VALUE__; ?>
    </ul>
  </div>
  <!--列表分页——结束-->
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
</body>
</html>