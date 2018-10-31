<?php 
	$a=2;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>商城</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="renderer" content="webkit">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/store.css">
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
		<img class="vip_img" src="images/vip.png">
	</div>
	<div class="store_box">
		<div class="container">
			<form class="search_box">
		        <div class="sleft"><input type="text" name="search" placeholder="找律师、律所" autocomplete="off"></div>
		        <div class="sright"><img src="images/icon/search_w.png"></div>
	        </form>
	        <div class="lawyer_box">
				<a href="storeDetail.php" class="lawyer_item">
			      <div class="top_img">
			        <img src="images/store_img1.png">
			        <div class="img_layer">
			          <div class="l_right">
			            <div>
			              <i href="">查看详情</i>
			              <span>已受理：300</span>
			            </div>
			          </div>
				      <h4>华翌法律咨询有限公司</h4>
				      <p>华翌和你一起探讨和解决法律问题.</p>
			        </div>
			        <img src="images/icon/top_three.png" class="top_three">
			      </div>
			      <div class="bottom_info">
			        <div class="left_words">
			          <h5>主管律师：Alexander</h5>
			          <p>已受理：300件</p>
			          <p>好评度：<img src="images/icon/star.png" alt=""></p>
			          <p>执业年限：10年</p>
			          <p>专业擅长：曾成功处理多起涉外非诉讼...</p>
			        </div>
			        <div class="right_head">
			          <img src="images/store_head.png">
			        </div>
			      </div>
			    </a>
				<a href="storeDetail.php" class="lawyer_item">
			      <div class="top_img">
			        <img src="images/store_img1.png">
			        <div class="img_layer">
			          <div class="l_right">
			            <div>
			              <i href="">查看详情</i>
			              <span>已受理：300</span>
			            </div>
			          </div>
				      <h4>华翌法律咨询有限公司</h4>
				      <p>华翌和你一起探讨和解决法律问题.</p>
			        </div>
			        <img src="images/icon/top_three.png" class="top_three">
			      </div>
			      <div class="bottom_info">
			        <div class="left_words">
			          <h5>主管律师：Alexander</h5>
			          <p>已受理：300件</p>
			          <p>好评度：<img src="images/icon/star.png" alt=""></p>
			          <p>执业年限：10年</p>
			          <p>专业擅长：曾成功处理多起涉外非诉讼...</p>
			        </div>
			        <div class="right_head">
			          <img src="images/store_head.png">
			        </div>
			      </div>
			    </a>
	        </div>
		</div>
	</div>
    <?php include "footer.php"; ?>
</body>
</html>