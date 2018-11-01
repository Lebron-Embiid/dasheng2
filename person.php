<?php 
	$a=3;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>个人中心</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="renderer" content="webkit">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/person.css">
	<script src="js/jquery-2.1.4.min.js"></script>
</head>
<body>
	<?php include "header.php"; ?>
	<div class="vip_box">
      <div class="container">
        <div class="cell_box head_box">
          <h3><a href="settings.php"><img src="images/icon/settings.png" alt=""></a></h3>
          <img class="ls_head" src="images/ls_head.png">
          <h4>Alexander</h4>
        </div>
        <div class="collect_cell">
          <a href="collect.php">我的收藏<img src="images/icon/right_three3.png" alt=""></a>
        </div>
        <div class="cell_box order_box">
			<h3>我的订单<a href="moreOrder.php">More <img src="images/icon/down.png"></a></h3>
			<ul class="project_ul2">
				<li><a href="eOrder.php"><img src="images/icon/serve_icon1.png">用工合同纠纷咨询<span>2018-08-29</span></a></li>
				<li><a href="eOrder.php"><img src="images/icon/serve_icon2.png">用工合同纠纷咨询<span>2018-08-29</span></a></li>
				<li><a href="eOrder.php"><img src="images/icon/serve_icon3.png">用工合同纠纷咨询<span>2018-08-29</span></a></li>
			</ul>
        </div>
      </div>
    </div>
    <div class="vip_zone">
    	<!-- <h3>VIP专区</h3> -->
    	<ul>
			<li>
				<img src="images/lawyer_bg1.jpg" alt="" class="vip_bg">
				<div class="vip_layer">
					<h5>您的专属律师</h5>
					<div class="layer_box">
						<div class="left">
							<img src="images/ls_head.png" class="vip_head" alt="">
						</div>
						<div class="right">
							<h4>律师：Alexander</h4>
							<p>白金VIP：2018-11-03</p>
						</div>
					</div>
				</div>
			</li>
			<li>
				<img src="images/lawyer_bg2.jpg" alt="" class="vip_bg">
				<div class="vip_layer">
					<h5>您的专属律师</h5>
					<div class="layer_box">
						<div class="left">
							<img src="images/ls_head.png" class="vip_head" alt="">
						</div>
						<div class="right">
							<h4>律师：Alexander</h4>
							<p>白金VIP：2018-11-03</p>
						</div>
					</div>
				</div>
			</li>
		</ul>
    </div>
    <div class="lawyer">
    	<a href="applyFirst.php">我是律师<img src="images/icon/right_three3.png" alt=""></a>
    </div>
    <?php include "footer.php"; ?>
</body>
</html>