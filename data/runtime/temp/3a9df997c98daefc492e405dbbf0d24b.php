<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:49:"./application/admin/template/shop\print_order.htm";i:1578471501;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $global['web_name']; ?></title>
    <meta charset="UTF-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="/public/static/admin/css/pure-min.css">
    <link rel="stylesheet" href="/public/static/admin/css/grids.css">

    <style>
    	.pure-g{
    		width: 100%;
    		margin:auto;
    		display: flex;
    		justify-content: center;
    	}
        .nav {
            padding: 10px 0 10px 20px;
            background-color: #57A1DF;
            color: white;
        }

        .pure-u-12-24{
        	width: 100%;
        	display: flex;
    		justify-content: center;
        }
        #content {
            width: 80%;
            padding-top: 30px;
            font-size: 10px;
            /*color: rgba(39, 39, 39, 0.7);
            text-shadow: #a4a4a4 0 0 4px;*/
        }

        #config {
            padding-top: 30px;
        }

        .name {
            text-align: center;
            font-size: 18px;
            font-weight: bold;
        }

        .metadata {
            margin: 10px 0px 0px 5px;
            width: 100%;
        }
        .metadata tr{
        	line-height: 24px;
        }

        .list {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }

        .item-name {
            text-align: left;
        }

        .list thead {
            border-top: 1px solid #1d1d1d;
            border-bottom: 1px solid #1d1d1d;
        }

        .list td {
            padding: 5px 0 3px 5px;
        }

        .foot {
            margin-top: 5px;
            margin-bottom: 20px;
            padding-top: 5px;
            border-top: solid 2px #333333;
        }

        .footer {
            padding-top: 5px;
            text-align: center;
            color: grey;
            font-size: 12px;
            border-top: 1px solid #afafaf;
        }
        .print{
        	width: 100px;
        	height: 30px;
        	text-align: center;
        	line-height: 30px;
        	font-size: 16px;
        	color: #fff;
        	letter-spacing:0;
        	background-color: #1AA094;
        	cursor: pointer;
        }
    </style>

</head>
<body>
<div class="pure-g">

    <div class="pure-u-12-24">
        <div id="content">
            <div class="name"><span name="shopName"><?php echo $global['web_name']; ?></span></div>

            <table class="metadata">
                <tr>
                    <td>桌号：<span name="table"><?php echo $order_data['name']; ?></span></td>
                    <td>人数：<span name="people"></span></td>
                </tr>
                <tr>
                    <td>收银：<span name="waiter"></span></td>
                    <td>日期：<span name="date"><?php echo date('Y-m-d H:i'); ?></span></td>
                </tr>
            </table>

            <table class="list">
                <thead>
                <tr>
                    <td>菜品</td>
                    <td>单价</td>
                    <td>数量</td>
                    <td>金额</td>
                </tr>
                </thead>
                <tbody>
                	<?php $num = 1;if(is_array($order_data['details']) || $order_data['details'] instanceof \think\Collection || $order_data['details'] instanceof \think\Paginator): $i = 0; $__LIST__ = $order_data['details'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($v['is_add_dish'] == 0): ?>
                	<tr>
                		<td><?php echo $v['product_name']; ?></td>
                		<td><?php echo $v['special_price']; ?></td>
                		<td><?php echo $v['num']; ?></td>
                		<td><?php echo $v['special_price']*$v['num']; ?></td>
                	</tr>
                	<?php else: if($num == 1): $num++;?>
	                	<tr>
	                		<td>加菜</td>
	                		<td></td>
	                		<td></td>
	                		<td></td>
	                	</tr>
	                	<?php endif; ?>
                	<tr>
                		<td><?php echo $v['product_name']; ?></td>
                		<td><?php echo $v['special_price']; ?></td>
                		<td><?php echo $v['num']; ?></td>
                		<td><?php echo $v['special_price']*$v['num']; ?></td>
                	</tr>
                	<?php endif; endforeach; endif; else: echo "" ;endif; ?>
                	
                </tbody>
            </table>

            <div class="foot">
                <div>合计：<span name="total"><?php echo $order_data['order_total_amount']; ?></span></div>
                <?php if($order_data['order_total_amount'] - $order_data['order_amount'] != 0): ?>
                <div>优惠：<span name="sale"><?php echo round($order_data['order_total_amount'] - $order_data['order_amount'],2); ?></span></div>
                <?php endif; ?>
                <div>结账：<span name="finalFee"><?php echo $order_data['order_amount']; ?></span></div>
                <div style="text-align: center;margin-top: 20px"></div>
            </div>
        </div>


    </div>
    <div class="print">确定打印</div>
</div>
<script type="text/javascript" src="/public/static/common/js/jquery.min.js"></script>
<script type="text/javascript" src="/public/static/common/js/jQuery.print.js"></script>
<script type="text/javascript">
	$(function(){

		$('.print').click(function(){

			$('#content').print();
		})

	})

</script>
</body>




</html>