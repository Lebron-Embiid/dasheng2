<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>产品详情</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="renderer" content="webkit">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/productDetail.css">
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/swiper.min.js"></script>
	<script src="js/banner.js"></script>
</head>
<body>
	<?php include "header.php"; ?>
	<div class="index_banner">
		<div class="swiper-container" id="index_banner">
			<div class="swiper-wrapper">
				<div class="swiper-slide"><img src="images/shop_banner1.jpg"></div>
				<div class="swiper-slide"><img src="images/shop_banner1.jpg"></div>
				<div class="swiper-slide"><img src="images/shop_banner1.jpg"></div>
				<div class="swiper-slide"><img src="images/shop_banner1.jpg"></div>
				<div class="swiper-slide"><img src="images/shop_banner1.jpg"></div>
			</div>
			<div class="swiper-pagination"></div>
		</div>
		<img class="vip_img" src="images/vip.png">
	</div>
	<div class="collect_box">
		<div class="left">
			<h4>￥10.00</h4>
			<p>咨询服务</p>
		</div>
		<div class="right">
			<a href="javascript:void(0);">
				<img src="images/icon/star2.png">
				<p>收藏</p>
			</a>
		</div>
	</div>
	<div class="select_service">
		<div class="left more">可选服务</div>
		<div class="right">
			<button class="active">付费咨询</button>
			<button>付费咨询</button>
			<button>付费咨询</button>
		</div>
	</div>
	<div class="select_service contour">
		<div class="left">VIP服务</div>
		<div class="right">
			开通VIP服务，立享折扣大礼包<img src="images/icon/right1.png" alt="">
		</div>
	</div>
	<div class="select_service">
		<div class="left">服务地址</div>
		<div class="right">
			深圳市南山区学府路118号7层  某律师事务所
		</div>
	</div>
	<div class="select_service">
		<div class="appraise">
			<div>评价<span>好评 100%</span><a href="assess.php">共20万+条评价<img src="images/icon/right1.png" alt=""></a></div>
		</div>
		<div class="raise_box">
			<div class="raise_item">
				<div class="raise_head">
					张三
					<img src="images/icon/star3.png">
					<span>2018-08-29</span>
				</div>
				<div class="raise_content">通过偶然的机会接触到企法优途，专业的态度、高效的服务、强大的团队让我最终在众多律所中选择了它作为公司的法律顾问，给我专业的法律建议，大大降低了公司经营过程中出现的法律风险。</div>
			</div>
			<div class="see_more"><a href="assess.php">查看全部评价</a></div>
		</div>
	</div>
	<div class="buy_box">
		<a href="eOrder.php">我要购买</a>
	</div>
	<a href="chat.php" class="customer_service"><img src="images/service_ad.png"></a>
	<div class="layer_wrapper"></div>
	<div class="vip_box">
		<h3>VIP 服务介绍</h3>
		<ul>
			<li>
				<img src="images/vip_card1.jpg" alt="">
				<button class="active">已购买</button>
			</li>
			<li>
				<img src="images/vip_card2.jpg" alt="">
				<button>点击购买</button>
			</li>
		</ul>
		<a href="javascript:void(0);" class="finish">完成</a>
	</div>
</body>
<script>
	$(function(){
		$(".contour .right").click(function(){
			$(".vip_box,.layer_wrapper").addClass("active");
		})
		$(".layer_wrapper,.finish").click(function(){
			$(".vip_box,.layer_wrapper").removeClass("active");
		})


		$(".select_service").on("click","button",function(){
			$(this).toggleClass("active");
		})
	})
</script>
</html>