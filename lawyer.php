<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>我是律师</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="renderer" content="webkit">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/store.css">
	<link rel="stylesheet" href="css/lawyer.css">
	<script src="js/jquery-2.1.4.min.js"></script>
</head>
<body>
	<?php include "header.php"; ?>
	<div class="lawyer">
		<div class="lawyer_head">
			<img src="images/store_head.png" class="head_img">
			<h3>符律师</h3>
			<h3>编号 — 5503</h3>
			<div class="lawyer_year">
				<div><a href="certify.php?id=1"><h4>律师年审期限至<span>2019-08-19</span><img src="images/icon/right1.png"></h4></a></div>
				<div><a href="certify.php?id=2"><h4>律师年审期限至<span>2019-08-19</span><img src="images/icon/right1.png"></h4></a></div>
			</div>
			<a href="client.php">我的客户<img src="images/icon/right2.png" alt=""></a>
			<a href="advisory.php">我的咨询<img src="images/icon/right2.png" alt=""></a>
		</div>
		<div class="lawyer_order">
			<a href="order.php">我的订单<img src="images/icon/right2.png" alt=""></a>
			<ul class="order_ul">
				<li><img src="images/icon/e_icon1.png"><p>订单名称1<span>服务中</span><span>2018-08-18</span></p></li>
				<li><img src="images/icon/e_icon2.png"><p>订单名称2<span>服务中</span><span>2017-07-17</span></p></li>
				<li><img src="images/icon/e_icon3.png"><p>订单名称3<span>已完成</span><span>2016-06-16</span></p></li>
			</ul>
		</div>
		<div class="lawyer_income">
			<h3>收入记录</h3>
			<ul>
				<li><h4>订单：544768934859<span>2018-08-18</span><b>¥88.98</b></h4></li>
				<li><h4>订单：544768934859<span>2018-08-18</span><b>¥88.98</b></h4></li>
				<li><h4>订单：544768934859<span>2018-08-18</span><b>¥88.98</b></h4></li>
			</ul>
			<p>服务费 <span>¥10.00</span></p>
		</div>
		<div class="lawyer_shop">
			<h3><span>我的店铺</span></h3>
			<a href="shop.php" class="apply_shop">申请店铺<img src="images/icon/right2.png" alt=""></a>
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
			</div>
		</div>
	</div>
</body>
</html>