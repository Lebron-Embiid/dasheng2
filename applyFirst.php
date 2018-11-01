<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>申请律师</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="renderer" content="webkit">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/apply.css">
	<script src="js/jquery-2.1.4.min.js"></script>
</head>
<body>
	<?php include "header.php"; ?>
	<div class="apply_box">
		<h3>申请律师<span>|</span>第一步</h3>
		<div class="first_box">
			<div class="first_item">
				<div class="left">手机号码</div>
				<div class="right"><div>
					<input type="text" name="phone" class="phone_ipt" placeholder="填写手机号码">
					<span><button class="getCode">获取验证码</button></span>
				</div></div>
			</div>
			<div class="first_item">
				<div class="left">发送验证</div>
				<div class="right"><div><input type="text" name="code" placeholder="填写验证信息"></div></div>
			</div>
			<div class="first_item">
				<div class="left">您的姓名</div>
				<div class="right"><div><input type="text" name="real_name" placeholder="须填写真实姓名"></div></div>
			</div>
			<div class="first_item">
				<div class="left">执业证编号</div>
				<div class="right"><div><input type="text" name="number" placeholder="须填写执业证编号"></div></div>
			</div>
			<div class="first_item">
				<div class="left">店铺名称</div>
				<div class="right"><div><input type="text" name="shop_name" autocomplete="off" placeholder="填写店铺名称"></div></div>
			</div>
			<div class="first_item">
				<div class="left">店铺密码</div>
				<div class="right"><div><input type="password" name="shop_pwd" autocomplete="off" placeholder="填写店铺密码"></div></div>
			</div>
			<div class="first_item">
				<div class="left">确认密码</div>
				<div class="right"><div><input type="password" name="shop_pwd" autocomplete="off" ></div></div>
			</div>
		</div>
		<div class="buy_box">
			<a href="applySecond.php">下一步</a>
		</div>
	</div>
</body>
<script>
	$(function(){
		function invokeSettime(obj){
			var countdown=60;
			settime(obj);
			function settime(obj) {
				if (countdown <= 1) {
				   	$(obj).attr("disabled",false);
				  	$(obj).text("获取验证码");
				   	$(obj).removeClass("active");
				   	countdown = 60;
				   	return;
				} else {
				   	countdown--;
				   	$(obj).attr("disabled",true);
				   	$(obj).text(countdown+"s");
				   	$(obj).addClass("active");
				}
				setTimeout(function(){
		        	settime(obj);
		        },1000)
			}
		}
		$(".getCode").click(function(){
			invokeSettime(".getCode");
		})
	})
</script>
</html>