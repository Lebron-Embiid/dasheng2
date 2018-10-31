<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>咨询服务</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="renderer" content="webkit">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/chat.css">
	<script src="js/jquery-2.1.4.min.js"></script>
</head>
<body>
	<?php include "header.php"; ?>
	<div class="chat_box">
		<h3>律师信息</h3>
		<div class="chat">
			<div class="chat_item cr">
				<div class="left_head">
					<img src="images/chat_head1.png">
				</div>
				<div class="right_info">
					<h4>王二狗<span>16:11</span></h4>
					<p>我被公司起诉了，该怎么办?</p>
				</div>
			</div>
			<div class="chat_item cl">
				<div class="left_head">
					<img src="images/chat_head2.png">
				</div>
				<div class="right_info">
					<h4>符律师<span>16:11</span></h4>
					<p>认真阅读原告的诉状。第一遍阅读的时候，先大致浏览，了解原告起诉的具体诉由，如果看到你认为不合理的地方，先不要着急，因为原告陈述的可能并都是真实的情况。完成第一遍的阅读后，你需要接着再逐句阅读第二遍。记住，在你汇报诉讼情况的时候，业务部门问你的第一个问题肯定是“这起案件起诉的是什么事情？”</p>
				</div>
			</div>
			<div class="chat_item cl">
				<div class="left_head">
					<img src="images/chat_head2.png">
				</div>
				<div class="right_info">
					<h4>符律师<span>16:11</span></h4>
					<p>这份案情说明能有效地帮助你集中注意力解决案件的核心问题，这份说明当中应当包含以下基本信息：案件当事人、法院所在地、主审法官、原告的诉由、原告主张的赔偿（金钱赔偿的数额、是否申请禁止令等）。你还可以开始罗列你所在公司的辩护理由和主要依据。</p>
				</div>
			</div>
		</div>
	</div>
	<div class="chat_submit">
		<form>
			<input type="text" name="chat_val" placeholder="请输入咨询内容" class="chat_ipt" autocomplete="off">
			<div class="btn_box"><img src="images/icon/ok.png"></div>
		</form>
	</div>
	<a href="javascript:history.go(-1);" class="customer_service"><img src="images/back_order.png"></a>
</body>
</html>