<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:46:"./application/admin/template/auth_role\add.htm";i:1578290998;s:59:"D:\WWW\diancan\application\admin\template\public\layout.htm";i:1571728724;s:61:"D:\WWW\diancan\application\admin\template\admin\admin_bar.htm";i:1573115082;s:59:"D:\WWW\diancan\application\admin\template\public\footer.htm";i:1571728724;}*/ ?>
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
<body class="rolecss bodystyle">
<div id="toolTipLayer" style="position: absolute; z-index: 9999; display: none; visibility: visible; left: 95px; top: 573px;"></div>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page" style=" min-width: auto;">
    <?php if(\think\Request::instance()->param('iframe') < '1'): ?>
        <div class="fixed-bar">
        <div class="item-title">
            <a class="back" href="<?php echo url(CONTROLLER_NAME.'/index'); ?>" title="返回列表"><i class="fa fa-chevron-left"></i></a>
            <div class="subject">
                <h3>管理员</h3>
                <h5></h5>
            </div>
            <ul class="tab-base nc-row">
                <?php if(is_check_access('Admin@index') == '1'): ?>
                <li><a href="<?php echo url("Admin/index"); ?>" class="tab <?php if(in_array(\think\Request::instance()->controller(), array('Admin'))): ?>current<?php endif; ?>"><span>管理员列表</span></a></li>
                <?php endif; if($main_lang == $admin_lang): if(is_check_access('AuthRole@index') == '1'): ?>
                <li><a href="<?php echo url("AuthRole/index"); ?>" class="tab <?php if(in_array(\think\Request::instance()->controller(), array('AuthRole'))): ?>current<?php endif; ?>"><span>权限组列表</span></a></li>
                <?php endif; endif; ?>
            </ul>
        </div>
    </div>
    <?php endif; ?>
    <form class="form-horizontal" id="postForm" method="post" action="<?php echo url('AuthRole/add'); ?>">
        <div class="ncap-form-default">
            <dl class="row"><dt class="tit"><label><b>权限组基本信息</b></label></dt></dl>
            <dl class="row">
                <dt class="tit">
                    <label for="name"><em>*</em>组名称</label>
                </dt>
                <dd class="opt">
                    <input type="text" name="name" id="name" value="" class="input-txt">
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row"><dt class="tit"><label><b>快捷勾选权限</b></label></dt></dl>
            <dl class="row">
                <dt class="tit">
                    <label for="name">参考权限组</label>
                </dt>
                <dd class="opt">
                    <p><label><input type="radio" name="tmp_role_id" value="-1" />超级管理员</label></p>
                    <?php if(is_array($admin_role_list) || $admin_role_list instanceof \think\Collection || $admin_role_list instanceof \think\Paginator): if( count($admin_role_list)==0 ) : echo "" ;else: foreach($admin_role_list as $k=>$role): ?>
                    <p>
                        <label><input type="radio" name="tmp_role_id" value="<?php echo $role['id']; ?>" /><?php echo $role['name']; ?></label>
                    </p>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </dd>
            </dl>
            <dl class="row"><dt class="tit"><label><b>权限组权限设置</b></label></dt></dl>
            <dl class="row none">
                <dt class="tit">
                    <label for="name">语言权限</label>
                </dt>
                <dd class="opt">
                    <label><input type="checkbox" name="language[]" value="cn" checked="checked" />简体中文</label>
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
<!--             <dl class="row">
                <dt class="tit">
                    <label for="name">在线升级</label>
                </dt>
                <dd class="opt">
                    <label><input type="checkbox" name="online_update" value="1" />允许操作</label>
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl> -->
            <dl class="row" id="dl_only_oneself">
                <dt class="tit">
                    <label for="name">文档权限</label>
                </dt>
                <dd class="opt">
                    <label><input type="checkbox" name="only_oneself" value="1" />只允许查看自己发布的文档</label>
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="name">操作权限</label>
                </dt>
                <dd class="opt">
                    <p><label><input type="checkbox" id="select_cud" checked="checked" />完全控制</label></p>
                    <p><label><input type="checkbox" name="cud[]" value="add" checked="checked" />新增信息</label></p>
                    <p><label><input type="checkbox" name="cud[]" value="edit" checked="checked" />编辑信息</label></p>
                    <p><label><input type="checkbox" name="cud[]" value="del" checked="checked" />删除信息</label></p>
                    <p><label><input type="checkbox" name="cud[]" value="changetableval" checked="checked" />审核信息</label></p>
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="name"><em>*</em>功能权限</label>
                </dt>
                <dd class="opt">
                    <p>
                        <label><input type="checkbox" id="select_all_permission" />全部选择</label>
                    </p>
                    <?php if(is_array($modules) || $modules instanceof \think\Collection || $modules instanceof \think\Paginator): if( count($modules)==0 ) : echo "" ;else: foreach($modules as $key=>$vo): if(is_array($vo['child']) || $vo['child'] instanceof \think\Collection || $vo['child'] instanceof \think\Paginator): if( count($vo['child'])==0 ) : echo "" ;else: foreach($vo['child'] as $key=>$vo2): if(1 == $vo2['is_modules'] AND ! empty($auth_rule_list[$vo2['id']])): if(1002 == $vo2['id']): ?>
                            <div class="admin_poplistdiv">
                                <h2><?php echo $vo2['name']; ?></h2>
                                <?php $first_arctype_id = 0; if(! empty($arctypes)): ?>
                                <p>
                                    <?php $first_arctype_id = ''; if(is_array($arctypes) || $arctypes instanceof \think\Collection || $arctypes instanceof \think\Paginator): if( count($arctypes)==0 ) : echo "" ;else: foreach($arctypes as $k=>$arctype): if(isset($arctype_array[$arctype['id']])): if($k>0): ?>
                                            <em class="arctype_bg expandable"></em>
                                            <?php else: ?>
                                            <em class="arctype_bg collapsable"></em>
                                            <?php $first_arctype_id = $arctype['id']; endif; endif; ?>
                                        <label><input type="checkbox" class="arctype_cbox arctype_id_<?php echo $arctype['id']; ?>" name="permission[arctype][]" value="<?php echo $arctype['id']; ?>" /><?php echo $arctype['typename']; ?></label>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </p>
                                
                                <?php if(is_array($arctypes) || $arctypes instanceof \think\Collection || $arctypes instanceof \think\Paginator): if( count($arctypes)==0 ) : echo "" ;else: foreach($arctypes as $key=>$arctype): if(isset($arctype_array[$arctype['id']])): ?>
                                    <div class="arctype_child" id="arctype_child_<?php echo $arctype['id']; ?>"<?php if($first_arctype_id==$arctype['id']): ?> style="display: block;"<?php endif; ?>>
                                    <?php foreach($arctype_array[$arctype['id']] as $item): ?>
                                        <div class="arctype_child1">
                                            <label><input type="checkbox" class="arctype_cbox arctype_id_<?php echo $item['id']; ?>" name="permission[arctype][]" value="<?php echo $item['id']; ?>" data-pid="<?php echo $item['parent_id']; ?>" /><?php echo $item['typename']; ?></label>
                                        </div>
                                        <?php if(isset($arctype_array[$item['id']])): ?>
                                        <div class="arctype_child2" id="arctype_child_<?php echo $item['id']; ?>">
                                            <span class="button level1 switch center_docu"></span>
                                            <?php foreach($arctype_array[$item['id']] as $vo): ?>
                                            <label><input type="checkbox" class="arctype_cbox" name="permission[arctype][]" value="<?php echo $vo['id']; ?>" data-pid="<?php echo $vo['parent_id']; ?>" data-tpid="<?php echo $item['parent_id']; ?>" /><?php echo $vo['typename']; ?></label>
                                            <?php endforeach; ?>
                                        </div>
                                        <?php endif; endforeach; ?>
                                    </div>
                                <?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>
                            </div>
                          <?php else: ?>
                            <div class="admin_poplistdiv">
                                <h2><?php echo $vo2['name']; ?></h2>
                                <p>
                                    <?php if(is_array($auth_rule_list[$vo2['id']]) || $auth_rule_list[$vo2['id']] instanceof \think\Collection || $auth_rule_list[$vo2['id']] instanceof \think\Paginator): if( count($auth_rule_list[$vo2['id']])==0 ) : echo "" ;else: foreach($auth_rule_list[$vo2['id']] as $key=>$rule): ?>
                                    <label><input type="checkbox" name="permission[rules][]" value="<?php echo $rule['id']; ?>" /><?php echo $rule['name']; ?></label>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </p>
                            </div>
                          <?php endif; endif; endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; if(! empty($plugins)): ?>
                    <div class="admin_poplistdiv">
                        <h2>插件应用</h2>
                        <ul>
                            <?php if(is_array($plugins) || $plugins instanceof \think\Collection || $plugins instanceof \think\Paginator): if( count($plugins)==0 ) : echo "" ;else: foreach($plugins as $key=>$plugin): ?>
                            <li>
                                <label><input type="checkbox" name="permission[plugins][<?php echo $plugin['code']; ?>][code]" value="<?php echo $plugin['code']; ?>" /><?php echo $plugin['name']; ?></label>
                                <?php $config = json_decode($plugin['config'], true); if(! empty($config['permission'])): ?>
                                <p style="padding-left:10px;">
                                    <span class="button level1 switch center_docu"></span>
                                    <?php foreach($config['permission'] as $index => $text): ?>
                                    <label><input type="checkbox" name="permission[plugins][<?php echo $plugin['code']; ?>][child][]" value="<?php echo $index; ?>" /><?php echo $text; ?></label>
                                    <?php endforeach; ?>
                                </p>
                                <?php endif; ?>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                </dd>
            </dl>

            <div class="bot2">
                <a href="JavaScript:void(0);" onclick="postSubmit();" class="ncap-btn-big ncap-btn-green" id="submitBtn">确认提交</a>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript">
    var admin_role_list = <?php echo json_encode($admin_role_list); ?>;
    $(function(){
        $('#postForm input[name="tmp_role_id"]').bind('click', function(){
            changeRole($(this).val());
        });
        $('.arctype_bg').bind('click', function(){
            var acid = $(this).next().find('input').val(), input = 'arctype_child_' + acid;
            $('.arctype_child').hide();
            if( $(this).attr('class').indexOf('expandable') == -1 ){
                $(this).removeClass('collapsable').addClass('expandable');
            }else{
                $('.arctype_bg').removeClass('collapsable').addClass('expandable');
                $(this).removeClass('expandable').addClass('collapsable');
                $('#'+input).show();
            }
        });
        $('.arctype_cbox').bind('click', function(){
            var acid = $(this).val(), input = 'arctype_child_' + acid;
            var pid = $(this).data('pid');
            var tpid = $(this).data('tpid');
            if($(this).attr('checked')){
                if (0 < $('input[data-pid="'+pid+'"]:checked').length) {
                    $('.arctype_id_'+pid).attr('checked', 'checked');
                }
                if (0 < $('#arctype_child_'+tpid).find('input[type="checkbox"]:checked').length) {
                    $('.arctype_id_'+tpid).attr('checked', 'checked');
                }
                $('#'+input).find('input[type="checkbox"]').attr('checked', 'checked');
            }else{
                if (1 > $('input[data-pid="'+pid+'"]:checked').length) {
                    $('.arctype_id_'+pid).removeAttr('checked');
                }
                if (1 > $('#arctype_child_'+tpid).find('input[type="checkbox"]:checked').length) {
                    $('.arctype_id_'+tpid).removeAttr('checked');
                }
                $('#'+input).find('input[type="checkbox"]').removeAttr('checked');
            }
        });
        $('#select_cud').bind('click', function(){
            if($(this).attr('checked')){
                $('#postForm input[name^="cud"]').attr('checked', 'checked');
            }else{
                $('#postForm input[name^="cud"]').removeAttr('checked');
            }
        });

        $('#select_all_permission').bind('click', function(){
            if($(this).attr('checked')){
                $('#postForm input[name^="permission"]').attr('checked', 'checked');
            }else{
                $('#postForm input[name^="permission"]').removeAttr('checked');
            }
        });
        $('#postForm input[name^="permission"],#postForm input[name^="cud"]').bind('click', function(){
            hasSelectAll();
        });
    });

    function hasSelectAll(){
        var c = true;
        $('#postForm input[name^="permission"]').each(function(idx, ele){
            if(! $(ele).attr('checked')){
                c = false;
                return;
            }
        });
        if(c){
            $('#select_all_permission').attr('checked', 'checked');
        }else{
            $('#select_all_permission').removeAttr('checked');
        }


        var c = true;
        $('#postForm input[name^="cud"]').each(function(idx, ele){
            if(! $(ele).attr('checked')){
                c = false;
                return;
            }
        });
        if(c){
            $('#select_cud').attr('checked', 'checked');
        }else{
            $('#select_cud').removeAttr('checked');
        }
    }

    function changeRole(value){
        if (-1 == value) {
            $('#postForm input[type="checkbox"]').attr("checked","checked");
            $('#postForm input[name="only_oneself"]').removeAttr('checked');
            return;
        }
        $('#postForm input[type="checkbox"]').removeAttr('checked');
        for(var i in admin_role_list){
            var item = admin_role_list[i];
            if(item.id == value){
                if(item.language){
                    item.language.map(function(row){
                        $('#postForm input[name^="language"][value="'+row+'"]').attr('checked', 'checked');
                    });
                }

                if(item.online_update){
                    $('#postForm input[name="online_update"]').attr('checked', 'checked');
                };
                // if(item.editor_visual){
                //     $('#postForm input[name="editor_visual"]').attr('checked', 'checked');
                // };
                if(item.only_oneself){
                    $('#postForm input[name="only_oneself"]').attr('checked', 'checked');
                };
                if(item.cud){
                    item.cud.map(function(row){
                        $('#postForm input[name^="cud"][value="'+row+'"]').attr('checked', 'checked');
                    });
                }

                if(item.permission){
                    for(var p in item.permission){
                        if(p == 'plugins'){
                            if(item.permission[p]){
                                for(var pluginId in item.permission[p]){
                                    $('#postForm input[name="permission['+p+']['+pluginId+'][code]"][value="'+pluginId+'"]').attr('checked', 'checked');
                                    if(item.permission[p][pluginId].child){
                                        item.permission[p][pluginId].child.map(function(row){
                                            $('#postForm input[name="permission['+p+']['+pluginId+'][child][]"][value="'+row+'"]').attr('checked', 'checked');
                                        });
                                    }
                                }
                            }
                        }else{
                            item.permission[p].map(function(row){
                                $('#postForm input[name="permission['+p+'][]"][value="'+row+'"]').attr('checked', 'checked');
                            });
                        }
                        
                    }
                }

                hasSelectAll();
                break;
            }
        }
    }

    function postSubmit(){
        if($('input[name=name]').val() == '' ){
            showErrorMsg('组名称不能为空！');
            $('input[name=name]').focus();
            return false;
        }

        var a = [];
        $('input[name^=permission]').each(function(i,o){
            if($(o).is(':checked')){
                a.push($(o).val());
            }
        })
        if(a.length == 0){
            showErrorMsg('请具体分配权限！');
            return false;
        }

        var parentObj = parent.layer.getFrameIndex(window.name); //先得到当前iframe层的索引

        layer_loading('正在处理');
        <?php if(\think\Request::instance()->param('iframe') < '1'): ?>
            $('#postForm').submit();
        <?php else: ?>
            $.ajax({
                url: "<?php echo url('AuthRole/add', ['_ajax'=>1]); ?>",
                type: 'POST',
                dataType: 'JSON',
                data: $('#postForm').serialize(),
                success: function(res){
                    layer.closeAll();
                    if (res.code == 1) {
                        var str = '<p><label><input type="radio" name="role_id" value="'+res.data.role_id+'" onclick="changeRole('+res.data.role_id+');" checked="checked" />'+res.data.role_name+'</label></p>';
                        parent.custom_role(str, res.data.role_id, res.data.admin_role_list);
                        parent.layer.close(parentObj);
                        parent.layer.msg(res.msg, {shade: 0.3, time: 1000});
                    } else {
                        parent.showErrorMsg(res.msg);
                    }
                    return false;
                },
                error: function(e){
                    layer.closeAll();
                    layer.msg('操作失败', {icon:5, time:1500});
                    return false;
                }
            });
        <?php endif; ?>
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