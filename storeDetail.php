<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>店铺详情</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="renderer" content="webkit">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/storeDetail.css">
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
		<a href="search.php"><img class="vip_img" src="images/vip.png"></a>
	</div>
	<div class="detail_select">
		<div class="left">
			<select>
				<option>咨询</option>
				<option>和解</option>
				<option>起诉</option>
				<option>应诉</option>
			</select>
		</div>
		<div class="right">
			<select>
				<option>付费咨询</option>
				<option>付费咨询</option>
				<option>付费咨询</option>
				<option>付费咨询</option>
			</select>
		</div>
	</div>
	<div class="shop_box">
		<div class="shop_item">
			<div class="shop_top">
				<div class="shop_left">
					<img src="images/store_head.png">
					<h4>Alexander</h4>
				</div>
				<div class="shop_right">
					<p>已受理：300件</p>
					<p>好评度：<img src="images/icon/star1.png" alt=""></p>
					<p>执业年限：10年</p>
					<p>专业擅长：曾成功处理多起涉外非诉讼案件，熟知各类法律业务流程.</p>
				</div>
			</div>
			<div class="shop_bottom">
				<ul>
					<li><a href="productDetail.php"><img src="images/icon/show_icon1.png"><p>咨询</p></a></li>
					<li><a href="productDetail.php"><img src="images/icon/show_icon2.png"><p>和解</p></a></li>
					<li><a href="productDetail.php"><img src="images/icon/show_icon3.png"><p>起诉</p></a></li>
					<li><a href="productDetail.php"><img src="images/icon/show_icon4.png"><p>执行</p></a></li>
					<li><a href="productDetail.php"><img src="images/icon/show_icon5.png"><p>应诉</p></a></li>
					<li><a href="productDetail.php"><img src="images/icon/show_icon6.png"><p>会员卡</p></a></li>
				</ul>
			</div>
		</div>
		<div class="shop_item">
			<div class="shop_top">
				<div class="shop_left">
					<img src="images/store_head.png">
					<h4>Alexander</h4>
				</div>
				<div class="shop_right">
					<p>已受理：300件</p>
					<p>好评度：<img src="images/icon/star1.png" alt=""></p>
					<p>执业年限：10年</p>
					<p>专业擅长：曾成功处理多起涉外非诉讼案件，熟知各类法律业务流程.</p>
				</div>
			</div>
			<div class="shop_bottom">
				<ul>
					<li><a href="productDetail.php"><img src="images/icon/show_icon1.png"><p>咨询</p></a></li>
					<li><a href="productDetail.php"><img src="images/icon/show_icon2.png"><p>和解</p></a></li>
					<li><a href="productDetail.php"><img src="images/icon/show_icon3.png"><p>起诉</p></a></li>
					<li><a href="productDetail.php"><img src="images/icon/show_icon4.png"><p>执行</p></a></li>
					<li><a href="productDetail.php"><img src="images/icon/show_icon5.png"><p>应诉</p></a></li>
					<li><a href="productDetail.php"><img src="images/icon/show_icon6.png"><p>会员卡</p></a></li>
				</ul>
			</div>
		</div>
		<div class="legal">
			<h3>法律文书</h3>
			<div><a href=""><img src="images/icon/book.jpg"><span>购买法律文书<i>价格：100元 ></i></span></a></div>
		</div>
	</div>
</body>
</html>