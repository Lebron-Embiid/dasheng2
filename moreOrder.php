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
	<link rel="stylesheet" href="css/moreOrder.css">
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/swiper.min.js"></script>
</head>
<body>
	<?php include "header.php"; ?>
	<div class="swiper-container" id="pay_nav">
		<div class="swiper-wrapper">
			<div class="swiper-slide active">咨询订单</div>
			<div class="swiper-slide">和解订单</div>
			<div class="swiper-slide">起诉订单</div>
			<div class="swiper-slide">执行订单</div>
		</div>
	</div>
	<div class="pay_box">
		<div class="pay_item">
			<div class="left">
				<h4>订单号：13689895656</h4>
				<p>服务费：¥35000.00</p>
				<!-- <span :class="item.service">{{item.status}}</span> -->
				<span>律师：张三 13689895656</span>
			</div>
			<div class="right">
				<a href="eOrder.php">去支付</a>
				<p>2018-08-18</p>
			</div>
		</div>
		<div class="pay_item">
			<div class="left">
				<h4>订单号：13689895656</h4>
				<p>服务费：¥35000.00</p>
				<!-- <span :class="item.service">{{item.status}}</span> -->
				<span>律师：张三 13689895656</span>
			</div>
			<div class="right">
				<a href="javascript:void(0);" class="finish">已完成支付</a>
				<p>2018-08-18</p>
			</div>
		</div>
	</div>
</body>
<script>
	$(function(){
		$(".swiper-container .swiper-wrapper").width(($(".swiper-container .swiper-slide").width())*($(".swiper-container .swiper-slide").length+4));
		var swiper = new Swiper('.swiper-container',{
			initialSlide:0,			//默认第1个显示
			freeMode: true,			//开启自由滑动
		    slidesPerView: 4,		//容器同时显示的slides数量， 'auto'自动根据宽度设定数量
			resistanceRatio : 0,		//为0则取消回弹距离
		});

		$("#pay_nav").on("click",".swiper-slide",function(){
			$(this).addClass("active").siblings().removeClass("active");
		})
	})
</script>
</html>