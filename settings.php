<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>设置</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="renderer" content="webkit">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/settings.css">
	<script src="js/jquery-2.1.4.min.js"></script>
</head>
<body>
	<?php include "header.php"; ?>
	<div class="settings_box">
		<div class="settings_top">
			<h4>个人信息管理</h4>
			<div class="text-center">
				<img src="images/ls_head.png" class="ls_head">
	      	</div>
			<h3>主律师：Alexander</h3>
		</div>
		<div class="settings_info">
			<ul>
				<li>
					<span>手机号码：</span>
					<input type="text" name="phone">
				</li>
				<li>
					<span>姓名<i>*</i>：</span>
					<input type="text" name="username">
				</li>
				<li>
					<span>微信：</span>
					<input type="text" name="weixin">
				</li>
				<li>
					<span>Q Q：</span>
					<input type="text" name="qq">
				</li>
				<li>
					<span>邮箱：</span>
					<input type="text" name="email">
				</li>
				<li>
					<span>所在城市：</span>
					<input type="text" name="city">
				</li>
			</ul>
			<button>保存</button>
		</div>
	</div>
</body>
</html>