<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>我的订单</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="renderer" content="webkit">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/order.css">
	<script src="js/jquery-2.1.4.min.js"></script>
</head>
<body>
	<?php include "header.php"; ?>
	<div class="order_box">
		<ul class="order_nav">
		  <li class="active">服务中</li>
		  <li>已完成</li>
		</ul>

		<div class="order_content active">
			<ul class="order_ul">
				<li><img src="images/icon/e_icon2.png"><p>0115789<span>服务中</span><span>2018-08-18</span></p></li>
				<li><img src="images/icon/e_icon2.png"><p>0115789<span>服务中</span><span>2018-08-18</span></p></li>
			</ul>
		</div>
		<div class="order_content">
			<ul class="order_ul">
				<li><img src="images/icon/e_icon3.png"><p>0115789<span>已完成</span><span>2018-08-18</span></p></li>
				<li><img src="images/icon/e_icon3.png"><p>0115789<span>已完成</span><span>2018-08-18</span></p></li>
				<li><img src="images/icon/e_icon3.png"><p>0115789<span>已完成</span><span>2018-08-18</span></p></li>
			</ul>
		</div>
	</div>
</body>
<script>
	$(function(){
		$(".order_nav").on("click","li",function(){
			let index = $(this).index();
			$(this).addClass("active").siblings().removeClass("active");
			$(".order_content").eq(index).addClass("active").siblings().removeClass("active");
		})
	})
</script>
</html>