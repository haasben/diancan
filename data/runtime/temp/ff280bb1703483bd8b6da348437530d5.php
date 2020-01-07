<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:35:"./template/pc/users\users_login.htm";i:1571728724;s:53:"D:\WWW\diancan\template\pc\users\skin\css\diy_css.htm";i:1571728724;s:49:"./public/static/template/users/users_loginapi.htm";i:1571728724;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8" />
<title>账号登录-<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?></title>
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

    <body class="reg login">
<div class="register_index ey-member">
      <div class="container">
    <form action="" name='theForm' id="theForm" method="post" class="form-register panel-body fv-form">
          <div class="mip-reg-logo"><a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>" class="ey-logo"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_logo"); echo $__VALUE__; ?>" /></a></div>
          <div class="mip-reg-heading">账号登录</div>
          <div class="form-group">
        <input type="text" name="username" required class="form-control" placeholder="用户名"/>
      </div>
          <div class="form-group">
        <input type="password" name="password" required class="form-control" placeholder="登录密码"/>
      </div>
          <?php if($is_vertify == '1'): ?>
          <div class="form-group">
        <div class="input-group-icon">
              <div class="formText">
            <input type="text" name="vertify" autocomplete="off" class="form-control" placeholder="图片验证码" />
            <img src="<?php echo url("api/Ajax/vertify","type=users_login",true,false,null,null,null);?>" class="chicuele" id="imgVerifys" onclick="fleshVerify();" title="看不清？点击更换验证码" align="absmiddle"> </div>
            </div>
      </div>
          <?php endif; ?>
          <input type="hidden" name="referurl" value="<?php echo $referurl; ?>"/>
          <input type="hidden" name="website" value="website"/>
          <input type="button" name="submit" class="btn btn-lg btn-primary btn-block" value="登录"/>
          <div class="login-link"> <a href="<?php echo url("user/Users/reg","",true,false,null,null,null);?>">注册</a><span>|</span> <a href="<?php echo url("user/Users/retrieve_password","",true,false,null,null,null);?>">找回密码</a> </div>
          
          <!-- 第三方账号登录 --> 
          
    <?php if(!(empty($usersConfig['oauth_open']) || (($usersConfig['oauth_open'] instanceof \think\Collection || $usersConfig['oauth_open'] instanceof \think\Paginator ) && $usersConfig['oauth_open']->isEmpty()))): ?>
    <div class="login_type text-xs-center m-t-20">
        <!-- <p>第三方账号登录</p> -->
        <ul class="blocks-3 m-0">
            <?php if(!(empty($usersConfig['oauth_qq']) || (($usersConfig['oauth_qq'] instanceof \think\Collection || $usersConfig['oauth_qq'] instanceof \think\Paginator ) && $usersConfig['oauth_qq']->isEmpty()))): ?>
            <li class="m-b-0"><a title="QQ登录" href="<?php echo url("user/LoginApi/login","oauth=qq",true,false,null,null,null);?>"><i class="fa fa-qq font-size-30"></i></a></li>
            <?php endif; if(!(empty($usersConfig['oauth_weixin']) || (($usersConfig['oauth_weixin'] instanceof \think\Collection || $usersConfig['oauth_weixin'] instanceof \think\Paginator ) && $usersConfig['oauth_weixin']->isEmpty()))): ?>
            <li class="m-b-0"><a title="微信登录" href="<?php echo url("user/LoginApi/login","oauth=weixin",true,false,null,null,null);?>"><i class="fa fa-weixin light-green-600 font-size-30"></i></a></li>
            <?php endif; if(!(empty($usersConfig['oauth_weibo']) || (($usersConfig['oauth_weibo'] instanceof \think\Collection || $usersConfig['oauth_weibo'] instanceof \think\Paginator ) && $usersConfig['oauth_weibo']->isEmpty()))): ?>
            <li class="m-b-0"><a title="微博登录" href="<?php echo url("user/LoginApi/login","oauth=weibo",true,false,null,null,null);?>"><i class="fa fa-weibo red-600 font-size-30"></i></a></li>
            <?php endif; ?>
        </ul>
    </div>
    <?php endif; ?> 
          <!-- 第三方账号登录 -->
        </form>
  </div>
    </div>
<script type="text/javascript">
    $(document).keydown(function(event){
        if(event.keyCode ==13){
            $('input[name=submit]').trigger("click");
        }
    });

    function fleshVerify(){
        var src = "<?php echo url("api/Ajax/vertify","type=users_login",true,false,null,null,null);?>";
        if (src.indexOf('?') > -1) {
            src += '&';
        } else {
            src += '?';
        }
        src += 'r='+ Math.floor(Math.random()*100);
        $('#imgVerifys').attr('src', src);
    }

    $(function(){
        $('input[name=submit]').on('click',function(){
            var username = $('input[name=username]');
            var password = $('input[name=password]');

            if(username.val() == ''){
                layer.msg('用户名不能为空！', {time: 1500, icon: 2});
                username.focus();
                return false;
            }

            if(password.val() == ''){
                layer.msg('密码不能为空！', {time: 1500, icon: 2});
                password.focus();
                return false;
            }

            layer_loading('正在处理');
            $.ajax({
                // async:false,
                url : "<?php echo url("user/Users/login","",true,false,null,null,null);?>",
                data: $('#theForm').serialize(),
                type:'post',
                dataType:'json',
                success:function(res){
                    if (1 == res.code) {
                        if (5 == res.data.status) {
                            layer.alert(res.msg, {icon: 2},function(){
                                window.location.href = res.url;
                            });
                        }else{
                            window.location.href = res.url;
                        }
                    } else {
                        layer.closeAll();
                        if ('vertify' == res.data.status) {
                            fleshVerify();
                        }
                        
                        if (2 == res.data.status) {
                            layer.alert(res.msg, {icon: 4});
                        } else {
                            layer.msg(res.msg, {icon: 2,time: 1500});
                        }
                    }
                },
                error:function(XMLHttpRequest, textStatus, errorThrown) {
                    layer.closeAll();
                    layer.alert('网络失败，请刷新页面后重试', {icon: 5});
                }
            });
        });
    });
</script>
</body>
</html>