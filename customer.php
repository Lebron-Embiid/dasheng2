<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>我是客服</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="renderer" content="webkit">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/customer.css">
	<script src="js/jquery-2.1.4.min.js"></script>
</head>
<body>
	<?php include "header.php"; ?>
	<div class="service_box">
		<div class="service_item">
			<h3>客户咨询订单</h3>
			<ul>
				<li>订单名称<span>2018-08-18</span></li>
				<li>订单名称<span>2018-07-17</span></li>
				<li>订单名称<span>2018-06-16</span></li>
			</ul>
		</div>
		<div class="service_item">
			<h3>客户订单服务</h3>
			<ul>
				<li>订单名称<span>2018-08-18</span></li>
				<li>订单名称<span>2018-07-17</span></li>
				<li>订单名称<span>2018-06-16</span></li>
			</ul>
		</div>
	</div>
	<div class="service_box active">
		<div class="service_item">
			<h3>客户咨询订单</h3>
			<ul>
				<li>订单名称1<span>2018-08-18</span></li>
				<li>订单名称2<span>2018-07-17</span></li>
				<li>订单名称3<span>2018-06-16</span></li>
			</ul>
		</div>
		<div class="service_item">
			<h3>客户订单服务</h3>
			<ul>
				<li>订单名称1<span>2018-08-18</span></li>
				<li>订单名称2<span>2018-07-17</span></li>
				<li>订单名称3<span>2018-06-16</span></li>
			</ul>
		</div>
	</div>
	<div class="service_bottom">
		<ul>
			<li><a href="javascript:void(0);"><img src="images/icon/lawyer_icon1.png" height="50" width="48">我是律师</a></li>
			<li class="active"><a href="javascript:void(0);"><img src="images/icon/lawyer_icon2.png" height="50" width="48">我是客服</a></li>
		</ul>
	</div>
</body>
<script>
	$(function(){
		$(".service_bottom").on("click","li",function(){
			let index = $(this).index();
			$(this).addClass("active").siblings().removeClass("active");
			$(".service_box").eq(index).addClass("active").siblings().removeClass("active");
		})
	})
</script>
</html>