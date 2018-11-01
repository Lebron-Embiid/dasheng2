<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>店铺申请</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="renderer" content="webkit">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/img.css">
    <link rel="stylesheet" href="css/pick-pcc.css"/>
	<link rel="stylesheet" href="css/shop.css">
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/imgUp.js"></script>
	<script src="js/pick-pcc.js"></script>
</head>
<body>
	<?php include "header.php"; ?>
	<div class="shop_box">
		<h3>填写申请信息</h3>
		<div class="write_box">
			<div class="write_item">
				<div class="item_left">店铺类型</div>
				<div class="item_right">
					<div class="radio_box">
						<label>
							<input type="radio" name="com_type" checked="" autocomplete="off">个人店铺
						</label>
						<label>
							<input type="radio" name="com_type" autocomplete="off">公司店铺
						</label>
					</div>
				</div>
			</div>
			<div class="write_item">
				<div class="item_left">店铺名称</div>
				<div class="item_right">
					<input type="text" name="shop_name" placeholder="请填写店铺名称" autocomplete="off">
				</div>
			</div>
			<div class="write_item">
				<div class="item_left">服务地点</div>
				<div class="item_right">
					<div class="pick-area pick-area1" name=""></div>
				</div>
			</div>
			<div class="write_item">
				<div class="item_left">店铺简介</div>
				<div class="item_right">
					<input type="text" name="shop_profile" placeholder="请输入店铺简介" autocomplete="off">
				</div>
			</div>
			<div class="write_item">
				<div class="item_left">店铺简介</div>
				<div class="item_right">
					<div class="check_box">
						<label>
							<input type="checkbox" name="checkInfo[]" autocomplete="off">婚姻家庭
						</label>
						<label>
							<input type="checkbox" name="checkInfo[]" autocomplete="off">劳动争议
						</label>
						<label>
							<input type="checkbox" name="checkInfo[]" autocomplete="off">遗产继承
						</label>
						<label>
							<input type="checkbox" name="checkInfo[]" autocomplete="off">房产纠纷
						</label>
						<label>
							<input type="checkbox" name="checkInfo[]" autocomplete="off">债权债务
						</label>
						<label>
							<input type="checkbox" name="checkInfo[]" autocomplete="off">合同纠纷
						</label>
						<label>
							<input type="checkbox" name="checkInfo[]" autocomplete="off">交通事故
						</label>
						<label>
							<input type="checkbox" name="checkInfo[]" autocomplete="off">侵权索赔
						</label>
					</div>
				</div>
			</div>
			<div class="write_item">
				<div class="item_left">统一社会信用代码</div>
				<div class="item_right">
					<input type="text" name="credit" placeholder="请填写社会信用代码" autocomplete="off">
				</div>
			</div>
			<div class="write_item">
				<div class="item_left">营业执照相片</div>
				<div class="item_right">
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
			</div>
			<div class="write_item">
				<div class="item_left">开户银行</div>
				<div class="item_right">
					<input type="text" name="bank" placeholder="请填写开户银行" autocomplete="off">
				</div>
			</div>
			<div class="write_item">
				<div class="item_left">银行卡号</div>
				<div class="item_right">
					<input type="text" name="card" placeholder="请填写银行卡号" autocomplete="off">
				</div>
			</div>
			<div class="write_item">
				<div class="item_left">开户名称</div>
				<div class="item_right">
					<input type="text" name="card_name" placeholder="请填写开户名称" autocomplete="off">
				</div>
			</div>
		</div>
	</div>
	<div class="buy_box">
		<a href="lawyer.php">确认提交</a>
	</div>
</body>
<script>
	$(function(){
		$(".pick-area1").pickArea();
	})
</script>
</html>