<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>评价</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="renderer" content="webkit">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/img.css">
	<link rel="stylesheet" href="css/evaluation.css">
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/imgUp.js"></script>
</head>
<body>
	<?php include "header.php"; ?>
	<div class="eval_box">
		<div class="rate_box">
			<span class="r_title">店铺评分</span>
			<ul class="star">
				<li class="star-item"><span></span></li>
				<li class="star-item"><span></span></li>
				<li class="star-item"><span></span></li>
				<li class="star-item"><span></span></li>
				<li class="star-item"><span></span></li>
			</ul>
		</div>
		<div class="area_box">
			<textarea name="rate_content" v-model="rate_content" placeholder="请填写评价内容"></textarea>
		</div>
		<div class="img-box full">
			<section class=" img-section">
				<div class="z_photo upimg-div clear" >
	               	 <section class="z_file fl">
	               	 	<img src="images/upload_pic_bg1.jpg" class="add-img">
	               	 	<input type="file" name="file" id="file" multiple class="file" value="" accept="image/jpg,image/jpeg,image/png,image/bmp" multiple />
	               	 </section>
		         </div>
			 </section>
		</div>
        <aside class="mask works-mask">
			<div class="mask-content">
				<p class="del-p">您确定要删除作品图片吗？</p>
				<p class="check-p"><span class="del-com wsdel-ok">确定</span><span class="wsdel-no">取消</span></p>
			</div>
		</aside>
	</div>
	<div class="buy_box">
		<a href="javascript:void(0);">发布</a>
	</div>
	<a href="chat.php" class="customer_service"><img src="images/service_ad.png"></a>
</body>
<script>
	$(function(){
		$(".star").on("click","li",function(){
	      $(this).addClass("active").prevAll().addClass("active");
	      $(this).nextAll().removeClass("active");
	    }); 
	})
</script>
</html>