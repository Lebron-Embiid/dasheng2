<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>我的收藏</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="renderer" content="webkit">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/collect.css">
	<script src="js/jquery-2.1.4.min.js"></script>
</head>
<body>
	<?php include "header.php"; ?>
	<div class="collect_box">
		<div class="shop_item">
			<div class="shop_top">
				<div class="delete_box">
					<img src="images/icon/delete_icon.png" alt="">
					删除
				</div>
				<div class="shop_left">
					<img src="images/store_head.png">
					<h4>Alexander</h4>
				</div>
				<div class="shop_right">
					<p>某某某律师事务所</p>
					<p>好评度：<img src="images/icon/star1.png" alt=""></p>
					<p>已受理：300件</p>
					<p>执业年限：10年</p>
					<!-- <p>专业擅长：曾成功处理多起涉外非诉讼...</p> -->
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
				<div class="delete_box">
					<img src="images/icon/delete_icon.png" alt="">
					删除
				</div>
				<div class="shop_left">
					<img src="images/store_head.png">
					<h4>Alexander</h4>
				</div>
				<div class="shop_right">
					<p>某某某律师事务所</p>
					<p>好评度：<img src="images/icon/star1.png" alt=""></p>
					<p>已受理：300件</p>
					<p>执业年限：10年</p>
					<!-- <p>专业擅长：曾成功处理多起涉外非诉讼...</p> -->
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
				<div class="delete_box">
					<img src="images/icon/delete_icon.png" alt="">
					删除
				</div>
				<div class="shop_left">
					<img src="images/store_head.png">
					<h4>Alexander</h4>
				</div>
				<div class="shop_right">
					<p>某某某律师事务所</p>
					<p>好评度：<img src="images/icon/star1.png" alt=""></p>
					<p>已受理：300件</p>
					<p>执业年限：10年</p>
					<!-- <p>专业擅长：曾成功处理多起涉外非诉讼...</p> -->
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
	</div>
</body>
<script>
	$(function(){
		$(".delete_box").click(function(){
			let con = confirm("确定删除？");
			if(con == true){
				alert("删除成功！");
			}else{
				
			}
		})
	})
</script>
</html>