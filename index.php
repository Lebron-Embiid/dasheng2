<?php 
	$a=1;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>尊贵会员</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="renderer" content="webkit">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/index.css">
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
				<div class="swiper-slide"><img src="images/banner.jpg"></div>
				<div class="swiper-slide"><img src="images/banner.jpg"></div>
				<div class="swiper-slide"><img src="images/banner.jpg"></div>
			</div>
			<div class="swiper-pagination"></div>
		</div>
		<a href="search.php"><img class="vip_img" src="images/vip.png"></a>
	</div>
	<div class="service_box">
		<div class="container">
			<div class="service_project">
				<h3>服务中的项目<a href="moreOrder.php">More<img src="images/icon/down.png"></a></h3>
				<ul class="project_ul1">
					<li><a href="chat.php"><img src="images/ls_head.png">专属律师：王小小a<span>2018-08-29</span></a></li>
					<li><a href="chat.php"><img src="images/ls_head.png">专属律师：王小小a<span>2018-08-29</span></a></li>
					<li><a href="chat.php"><img src="images/ls_head.png">专属律师：王小小a<span>2018-08-29</span></a></li>
				</ul>
				<ul class="project_ul2">
					<li><a href="eOrder.php"><img src="images/icon/serve_icon1.png">用工合同纠纷咨询<span>2018-08-29</span></a></li>
					<li><a href="eOrder.php"><img src="images/icon/serve_icon2.png">用工合同纠纷咨询<span>2018-08-29</span></a></li>
					<li><a href="eOrder.php"><img src="images/icon/serve_icon3.png">用工合同纠纷咨询<span>2018-08-29</span></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="offer_service">
		<div class="container">
			<h3>我们的提供服务</h3>
			<ul>
				<li><a href="search.php"><h4><img src="images/icon/service_icon1.png">咨询</h4><p>遇到法律问题不知怎么办？从咨询开始！</p></a></li>
				<li><a href="search.php"><h4><img src="images/icon/service_icon2.png">和解</h4><p>遇到纠纷，我们帮您快速调节</p></a></li>
				<li><a href="search.php"><h4><img src="images/icon/service_icon3.png">起诉</h4><p>打官司，找我们帮您排忧解难</p></a></li>
				<li><a href="search.php"><h4><img src="images/icon/service_icon4.png">执行</h4><p>遇到老赖，我们帮您维权</p></a></li>
				<li><a href="search.php"><h4><img src="images/icon/service_icon5.png">应诉</h4><p>对方起诉您，我们是你坚强的守护神</p></a></li>
				<li><a href="search.php"><h4><img src="images/icon/service_icon6.png">文书</h4><p>规范严谨的法律文书，我们帮您搞定！</p></a></li>
				<li><a href="search.php"><h4><img src="images/icon/service_icon7.png">会员卡</h4><p>您的专属法律顾问！</p></a></li>
			</ul>
			<form class="search_box">
	          <div class="sleft"><input type="text" name="search" placeholder="找律师、律所" autocomplete="off"></div>
	          <div class="sright"><img src="images/icon/search_w.png"></div>
	        </form>
		</div>
	</div>
	<div class="footer_words">
		<h5>还不清楚需要哪个服务？请使用<a href="chat.php">在线客服</a>。</h5>
		<h3>大胜法宝</h3>
		<p>让每个法律纠纷，都获得律师帮助</p>
    </div>
    <?php include "footer.php"; ?>
</body>
<script>
	$(function(){
		$(".search_box .sleft input").focus(function(){
			window.location.href = "/dasheng2/store.php";
		})
	})
</script>
</html>