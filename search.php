<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>搜索</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="renderer" content="webkit">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/search.css">
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
				<div class="swiper-slide"><img src="images/swipe_img1.jpg"></div>
				<div class="swiper-slide"><img src="images/swipe_img1.jpg"></div>
				<div class="swiper-slide"><img src="images/swipe_img1.jpg"></div>
				<div class="swiper-slide"><img src="images/swipe_img1.jpg"></div>
				<div class="swiper-slide"><img src="images/swipe_img1.jpg"></div>
			</div>
			<div class="swiper-pagination"></div>
		</div>
	</div>
	<div class="select_nav">
		<ul class="navs">
			<li class="nav_li">
				<select>
					<option>深圳</option>
					<option>广州</option>
					<option>上海</option>
					<option>北京</option>
					<option>武汉</option>
				</select>
				<!-- <a href="javascript:void(0);">
					<span>深圳</span>
					<img src="images/icon/down1.png">
				</a>
				<ul>
					<li>广州</li>
					<li>上海</li>
					<li>北京</li>
					<li>武汉</li>
				</ul> -->
			</li>
			<li class="nav_li">
				<select>
					<option>服务</option>
					<option>和解</option>
					<option>起诉</option>
					<option>执行</option>
					<option>应诉</option>
				</select>
				<!-- <a href="javascript:void(0);">
					<span>服务</span>
					<img src="images/icon/down1.png">
				</a>
				<ul>
					<li>和解</li>
					<li>起诉</li>
					<li>执行</li>
					<li>应诉</li>
				</ul> -->
			</li>
			<li class="nav_li">
				<select>
					<option>价格</option>
					<option>500以下</option>
					<option>500~1000</option>
					<option>1000~5000</option>
					<option>5000以上</option>
				</select>
				<!-- <a href="javascript:void(0);">
					<span>价格</span>
					<img src="images/icon/down1.png">
				</a>
				<ul>
					<li>500以下</li>
					<li>500~1000</li>
					<li>1000~5000</li>
					<li>5000以上</li>
				</ul> -->
			</li>
		</ul>
	</div>
	<div class="filter_box">
		<div class="filter_item">
			<a href="productDetail.php" class="shop_item">
				<div class="shop_top">
					<div class="shop_left">
						<img src="images/store_head.png">
						<h4>律师：Alexander</h4>
						<h5>价 格：3500元</h5>
					</div>
					<div class="shop_right">
						<p>已受理：300件</p>
						<p>好评度：<img src="images/icon/star1.png"></p>
						<p>执业年限：10年</p>
						<p>专业擅长：曾成功处理多起涉外非诉讼案件，熟知各类法律业务流程.</p>
					</div>
				</div>
			</a>
			<a href="productDetail.php" class="shop_item">
				<div class="shop_top">
					<div class="shop_left">
						<img src="images/store_head.png">
						<h4>律师：Alexander</h4>
						<h5>价 格：3500元</h5>
					</div>
					<div class="shop_right">
						<p>已受理：300件</p>
						<p>好评度：<img src="images/icon/star1.png"></p>
						<p>执业年限：10年</p>
						<p>专业擅长：曾成功处理多起涉外非诉讼案件，熟知各类法律业务流程.</p>
					</div>
				</div>
			</a>
			<a href="productDetail.php" class="shop_item">
				<div class="shop_top">
					<div class="shop_left">
						<img src="images/store_head.png">
						<h4>律师：Alexander</h4>
						<h5>价 格：3500元</h5>
					</div>
					<div class="shop_right">
						<p>已受理：300件</p>
						<p>好评度：<img src="images/icon/star1.png"></p>
						<p>执业年限：10年</p>
						<p>专业擅长：曾成功处理多起涉外非诉讼案件，熟知各类法律业务流程.</p>
					</div>
				</div>
			</a>
		</div>
	</div>
</body>
</html>