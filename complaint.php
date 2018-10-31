<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>投诉</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="renderer" content="webkit">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/complaint.css">
	<script src="js/jquery-2.1.4.min.js"></script>
</head>
<body>
	<?php include "header.php"; ?>
	<div class="complaint_box">
		<div class="area_title">
			<textarea name="title" v-model="title" placeholder="请填写投诉标题内容"></textarea>
		</div>
		<div class="area_content">
			<textarea name="content" v-model="content" placeholder="请填写投诉内容详情"></textarea>				
		</div>
	</div>
	<div class="buy_box">
		<a href="javascript:void(0);">提交</a>
	</div>
	<a href="javascript:history.go(-1);" class="customer_service"><img src="images/back_order.png"></a>
</body>
</html>