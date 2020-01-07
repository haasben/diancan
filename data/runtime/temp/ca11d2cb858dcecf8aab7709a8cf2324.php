<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:40:"./template/pc/users\shop_add_address.htm";i:1571728724;s:53:"D:\WWW\diancan\template\pc\users\skin\css\diy_css.htm";i:1571728724;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>添加收货地址-<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?></title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
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

    <?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("/public/static/common/js/jquery.min.js","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("/public/plugins/layer-v3.1.0/layer.js","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("/public/static/common/js/tag_global.js","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("/public/static/common/js/shop_add_addr.js","","",""); echo $__VALUE__; ?>
    <style type="text/css">
        #theForm .form-group{
            margin:10px 0px;
        }
    </style>
</head>
<body>
<div class="changepass">
    <form name='theForm' id="theForm" method="post">
        <div class="modal-body">
            <div class="form-group">
                <input type="text" name="consignee" required class="form-control" placeholder="收货人姓名">
            </div>
            
            <div class="form-group">
                <input type="text" name="mobile" required class="form-control" placeholder="收货人手机">
            </div>
            
            <div class="form-group">
                <select class="form-control" name="country">
                    <option value="1">中国</option>
                </select>
            </div>

            <div class="form-group">
                <select class="form-control" name="province" id='province' onchange="GetRegionData(this,'province');">
                    <option value="0">请选择</option>
                    <?php if(is_array($eyou['field']['Province']) || $eyou['field']['Province'] instanceof \think\Collection || $eyou['field']['Province'] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $eyou['field']['Province'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$P_v): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                        <option value="<?php echo $P_v['id']; ?>"><?php echo $P_v['name']; ?></option>
                    <?php echo isset($P_v["ey_1563185380"])?$P_v["ey_1563185380"]:""; ?><?php echo (1 == $e && isset($P_v["ey_1563185376"]))?$P_v["ey_1563185376"]:""; ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $P_v = []; ?>
                </select>
            </div>

            <div class="form-group">
                <select class="form-control" name="city" id='city' onchange="GetRegionData(this,'city');">
                    <option value="0">请选择</option>
                </select>
            </div>

            <div class="form-group">
                <select class="form-control" name="district" id='district'>
                    <option value="0">请选择</option>
                </select>
            </div>

            <div class="form-group">
                <textarea class="form-control" rows="3" name="address" placeholder="收货详情地址"></textarea>
            </div>
        </div>
        <input type="hidden" id="types" value="<?php echo $eyou['field']['types']; ?>">
        <input type="hidden" id="GetRegionDataS" value="<?php echo url("user/Shop/get_region_data","",true,false,null,null,null);?>">
        <input type="hidden" id="ShopAddAddress" value="<?php echo url("user/Shop/shop_add_address","",true,false,null,null,null);?>">
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" onclick="AddAddress();">确定</button>
        </div>
    </form>
</div>

<!-- 添加收货地址模板,需保留,可自行修改样式 -->
<div style="display: none" id="divhtml">
    <?php if('order' == $eyou['field']['types'] and empty($eyou['field']['addr_num'])): ?>
        <input type="hidden" name="#name#" id="#id#" value="#value#">
    <?php endif; ?>
    <li class="m-t-10" id="#ul_li_id#">
        <a class="list-group-item addr-list hover" href="javascript:void(0)" <?php if($eyou['field']['types'] == 'order'): ?> onclick="#selected#" <?php endif; ?>>
            <div class="btn-group-xs" style="float: right;">
                <?php if($eyou['field']['types'] == 'list'): ?>
                    <span onclick="#setdefault#">设为默认</span>
                <?php endif; ?>
                <button type="button" class="btn btn-outline btn-default addr-set-edit" onclick="#shopeditaddr#">
                    <i class="icon wb-edit m-0" aria-hidden="true"></i>
                </button>
                <button type="button" class="btn btn-outline btn-default addr-set-edit" onclick="#shopdeladdr#">
                    <i class="fa fa-close"></i>
                </button>
            </div>
            <h4 class="list-group-item-heading" id="#consigneeid#">
                #consignee#
            </h4>
            <p class="list-group-item-text m-b-5 addr-info" id="#mobileid#">
                #mobile#
            </p>
            <p class="list-group-item-text addr-info" id="#infoid#">
                #info#
            </p>
            <p class="list-group-item-text addr-info" id="#addressid#">
                #address#
            </p>
        </a>
    </li>
</div>
</body>
</html>