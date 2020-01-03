<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"D:\WWW\diancan/application/push\view\bind\send_room_message.htm";i:1578033492;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>`</title>
</head>
<body>
	<input type="button" id="button" value="发送">
</body>
</html>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
	$(function(){

		$('#button').click(function(){

				$.ajax({
				url:'<?php echo url("push/bind/send_room_message"); ?>',
				type:'get',
				dataType:'json',
				success:function(data){
					console.log(data.msg);
					
				}
			})
		})

		
	})

</script>