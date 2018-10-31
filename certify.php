<?php 
	$id = $_GET['id'];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>年审认证</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="renderer" content="webkit">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/certify.css">
	<script src="js/jquery-2.1.4.min.js"></script>
</head>
<body>
	<?php include "header.php"; ?>
	<div class="certy_box">
		<h3>年审认证信息</h3>
		<!-- 开始日期 -->
		<?php if($id == 1){ ?>
		<ul>
			<li>
				<div class="cleft">上传最新年检照片</div>
				<div class="cright">

				</div>
			</li>
			<li>
				<div class="cleft">证件开始日期 </div>
				<div class="cright">
					<span>2019-08-18</span>
				</div>
			</li>
		</ul>
		<?php }else{ ?>
		<!-- 结束日期 -->
		<ul>
			<li>
				<div class="cleft">上传最新年检照片</div>
				<div class="cright">

				</div>
			</li>
			<li>
				<div class="cleft">证件结束日期 </div>
				<div class="cright">
					<span>2019-08-18</span>
				</div>
			</li>
		</ul>
		<?php } ?>
		<div class="buy_box">
			<a href="">确认提交</a>
		</div>
	</div>
</body>
</html>