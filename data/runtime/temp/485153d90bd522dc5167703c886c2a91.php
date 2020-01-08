<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:46:"./application/admin/template/index/welcome.htm";i:1578022930;s:72:"/www/wwwroot/crms.cdqifa.cn/application/admin/template/public/footer.htm";i:1571728726;}*/ ?>
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
<link href="/public/static/admin/css/main.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link href="/public/static/admin/font/css/font-awesome.min.css" rel="stylesheet" />
<link href="/public/static/admin/css/index.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<!--[if IE 7]>
  <link rel="stylesheet" href="/public/static/admin/font/css/font-awesome-ie7.min.css">
<![endif]-->
<script type="text/javascript">
    var eyou_basefile = "<?php echo \think\Request::instance()->baseFile(); ?>";
    var module_name = "<?php echo MODULE_NAME; ?>";
    var __root_dir__ = "";
    var __lang__ = "<?php echo $admin_lang; ?>";
    var __main_lang__ = "<?php echo $main_lang; ?>";
</script>  
<script type="text/javascript" src="/public/static/admin/js/jquery.js"></script>
<script type="text/javascript" src="/public/plugins/layer-v3.1.0/layer.js"></script>
<script src="/public/static/admin/js/upgrade.js?v=<?php echo $version; ?>"></script>
<script src="/public/static/admin/js/global.js?v=<?php echo $version; ?>"></script>

</head>
<body style="background-color:#F4F4F4;padding:6px; overflow: auto;">
<div id="toolTipLayer" style="position: absolute; z-index: 9999; display: none; visibility: visible; left: 95px; top: 573px;"></div>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<style type="text/css">
 
        table
 
        {
 
            border-collapse: collapse;
 
            margin: 0 auto;
 
            text-align: center;

            width: 100%
 
        }
 
        table td, table th
 
        {
 
            border: 1px solid #cad9ea;
 
            color: #666;
 
            height: 30px;
 
        }
 
        table thead th
 
        {
 
            background-color: #CCE8EB;
 
            width: 100px;
 
        }
 
        table tr:nth-child(odd)
 
        {
 
            background: #fff;
 
        }
 
        table tr:nth-child(even)
 
        {
 
            background: #F5FAFA;
 
        }
 
    </style>

<div class="warpper">
    <div class="content start_content">
        <div class="contentWarp">
           
            <div class="index_box" >
                <div class="info_count">
                     <h3><i class="fa fa-bar-chart"></i>营业额</h3>
                     <div class="container-fluid" id="main" style="width:100%;height:400px">
                        


                     </div>
                </div>
            </div>
            <div class="section system_section" style="float: none;width: inherit;">
             
                <div class="system_section_con">
                    <div class="sc_title" style="padding: 26px 0 14px;border-bottom: 1px solid #e4eaec;">
                        
                        <h3><i class="fa fa-tasks"></i>最新订单</h3>
                    </div>
                    <div class="sc_warp" id="system_warp" style="display: block;padding-bottom: 20px;">
                        <table  class="order_list" >
                            <tbody>
                                <tr>
                                    <td>订单号</td>
                                    <td>桌号</td>
                                    <td>订单金额</td>
                                    <td>订单状态</td>
                                    <td>订单时间</td>
                                    <td>支付时间</td>
                                    <td>操作</td>
                                </tr>
                                <?php if(is_array($new_order) || $new_order instanceof \think\Collection || $new_order instanceof \think\Paginator): $i = 0; $__LIST__ = $new_order;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                                <tr>
                                    <td><?php echo $v['order_code']; ?></td>
                                    <td><?php echo $v['name']; ?></td>
                                    <td><?php echo $v['order_total_amount']; ?></td>
                                    <td><?php switch($v['order_status']): case "0": ?>未付款<?php break; case "-1": ?>订单取消<?php break; case "4": ?>订单过期<?php break; default: ?><span style="color: red">已付款</span>
                                        <?php endswitch; ?>
                                    </td>
                                    <td><?php echo date('Y-m-d H:i:s',$v['add_time']); ?></td>
                                    <td><?php if($v['pay_time']>0): ?><?php echo date('Y-m-d H:i:s',$v['pay_time']); else: ?>未支付<?php endif; ?></td>
                                    <td><a href="<?php echo url('Shop/order_details',array('order_id'=>$v['order_id'])); ?>">详情</a></td>

                                </tr>
                                <?php endforeach; endif; else: echo "" ;endif; ?>


                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="footer" style="position: static; bottom: 0px; font-size:14px;">
    <p>
        <b><?php echo htmlspecialchars_decode($global['web_copyright']); ?></b>
    </p>
</div>
<script type="text/javascript" src="/public/plugins/echarts/echarts.min.js"></script>
<script type="text/javascript">
  var myChart = echarts.init(document.getElementById('main'));        
        option = {
        xAxis: {
                type: 'category',
                data: [
                <?php if(is_array($weeks_order['day']) || $weeks_order['day'] instanceof \think\Collection || $weeks_order['day'] instanceof \think\Paginator): $i = 0; $__LIST__ = $weeks_order['day'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                '<?php echo $v['time']; ?>',
                <?php endforeach; endif; else: echo "" ;endif; ?>
                ]
            },
            yAxis: {
                type: 'value'
            },
            series: [{
                data: [
                 <?php if(is_array($weeks_order['day']) || $weeks_order['day'] instanceof \think\Collection || $weeks_order['day'] instanceof \think\Paginator): $i = 0; $__LIST__ = $weeks_order['day'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                    <?php echo $v['sum']; ?>,
                <?php endforeach; endif; else: echo "" ;endif; ?>

                ],
                type: 'line'
            },
            {   
                name:'总量',
                type:'line',
                stack: '总量',
                label: {
                    normal: {
                        show: true,
                        position: 'top'
                    }
                },
                areaStyle: {normal: {}},
                data:[
                    <?php if(is_array($weeks_order['day']) || $weeks_order['day'] instanceof \think\Collection || $weeks_order['day'] instanceof \think\Paginator): $i = 0; $__LIST__ = $weeks_order['day'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                        <?php echo $v['sum']; ?>,
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                ]
            }


            ]
        };
        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
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