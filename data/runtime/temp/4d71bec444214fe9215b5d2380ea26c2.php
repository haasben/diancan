<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:51:"./application/admin/template/system\clear_cache.htm";i:1573115084;s:59:"D:\WWW\diancan\application\admin\template\public\layout.htm";i:1571728726;s:59:"D:\WWW\diancan\application\admin\template\public\footer.htm";i:1571728726;}*/ ?>
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
<body class="bodystyle">
<div id="toolTipLayer" style="position: absolute; z-index: 9999; display: none; visibility: visible; left: 95px; top: 573px;"></div>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page">
    <div class="fixed-bar">
        <div class="item-title">
            <div class="subject">
                <h3>清除缓存</h3>
                <h5></h5>
            </div>
        </div>
    </div>
    <!-- 操作说明 -->
    <div id="explanation" class="explanation" style="color: rgb(44, 188, 163); background-color: rgb(237, 251, 248); width: 99%; height: 100%;">
        <div id="checkZoom" class="title"><i class="fa fa-lightbulb-o"></i>
            <h4 title="提示相关设置操作时应注意的要点">操作提示</h4>
            <span title="收起提示" id="explanationZoom" style="display: block;"></span>
        </div>
        <ul>
            <li>如果页面做了修改，建议清除对应的页面以及模板缓存</li>
            <li>清除单个伪静态页面缓存，请在URL后面加上 ?clear=1 </li>
        </ul>
    </div>
    <form class="form-horizontal" id="cleanCache" method="post">
        <div class="ncap-form-default">
            <?php if(is_check_access(CONTROLLER_NAME.'@clearHtmlCache') == '1'): ?>
            <dl class="row">
                <dt class="tit">伪静态页面</dt>
                <dd class="opt">
                    <ul class="nc-row ncap-waybill-list">
                        <li>
                            <label class="label"><input class="check" type="checkbox" name="clearHtml[]" value="index" checked="checked">首页(index)</label>
                        </li>
                        <li>
                            <label class="label"><input class="check" type="checkbox" name="clearHtml[]" value="channel" checked="checked">频道页(channel)</label>
                        </li>
                        <li>
                            <label class="label"><input class="check" type="checkbox" name="clearHtml[]" value="lists" checked="checked">列表页(lists)</label>
                        </li>
                        <li>
                            <label class="label"><input class="check" type="checkbox" name="clearHtml[]" value="view" checked="checked">内容页(view)</label>
                        </li>
                    </ul>
                </dd>
            </dl>
            <?php endif; if(is_check_access(CONTROLLER_NAME.'@clearSystemCache') == '1'): ?>
            <dl class="row">
                <dt class="tit">系统缓存</dt>
                <dd class="opt">
                    <ul class="nc-row ncap-waybill-list">
                        <li>
                            <label class="label"><input class="check" type="checkbox" name="clearCache[]" value="cache" checked="checked">数据缓存(cache)</label>
                        </li>
                        <li>
                            <label class="label"><input class="check" type="checkbox" name="clearCache[]" value="data" checked="checked">项目数据(data)</label>
                        </li>
                        <li>
                            <label class="label"><input class="check" type="checkbox" name="clearCache[]" value="log" checked="checked">访问日志(log)</label>
                        </li>
                        <li>
                            <label class="label"><input class="check" type="checkbox" name="clearCache[]" value="temp" checked="checked">临时数据(temp)</label>
                        </li>
                    </ul>
                </dd>
            </dl>
            <?php endif; if(is_check_access('System@clear_cache') == '1'): ?>
            <dl class="row">
                <dt class="tit"></dt>
                <dd class="opt">
                    <ul class="nc-row ncap-waybill-list">
                        <li>
                            <label class="label"><input type="checkbox" class="check" id="clearAll" name="clearAll" value="clearAll" onclick="$('input[name^=\'clear\']').prop('checked', this.checked);" checked="checked">全选</label>
                        </li>
                    </ul>
                </dd>
            </dl>
            <?php endif; ?>
            <div class="bot">
                <input type="hidden" name="seo_inlet" value="0">
                <a href="JavaScript:void(0);" onclick="chk_submit();" class="ncap-btn-big ncap-btn-green" id="submitBtn">确认提交</a>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript">

    $(function() {
        checkInlet(); // 自动检测隐藏index.php
        // 自动检测隐藏index.php
        function checkInlet() {
            layer.open({
                type: 2,
                title: false,
                area: ['0px', '0px'],
                shade: 0.0,
                closeBtn: 0,
                shadeClose: true,
                content: '//<?php echo \think\Request::instance()->host(); ?>/api/Rewrite/setInlet.html',
                success: function(layero, index){
                    layer.close(index);
                    var body = layer.getChildFrame('body', index);
                    var content = body.html();
                    if (content.indexOf("Congratulations on passing") == -1)
                    {
                        $.ajax({
                            type : "POST",
                            url  : "/index.php?m=api&c=Rewrite&a=setInlet",
                            data : {seo_inlet:0,_ajax:1},
                            dataType : "JSON",
                            success: function(res) {

                            }
                        }); 
                    }
                }
            });
        }
    });

    function chk_submit()
    {
        if ($('input[name^=clear]:checked').length <= 0) {
            layer.msg('至少选择一项！', {icon: 2,time: 1000});
            return false;
        }
        layer_loading('正在处理');
        $('#cleanCache').submit();
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