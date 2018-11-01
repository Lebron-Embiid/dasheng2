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
	<link rel="stylesheet" href="css/rolldate.css">
	<link rel="stylesheet" href="css/img.css">
	<link rel="stylesheet" href="css/certify.css">
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/rolldate.js"></script>
	<script src="js/imgUp.js"></script>
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
			</li>
			<li>
				<div class="cleft">证件开始日期 </div>
				<div class="cright">
					<span><input readonly type="text" id="date1" placeholder="2018-11-01"></span>
				</div>
			</li>
		</ul>
		<?php }else{ ?>
		<!-- 结束日期 -->
		<ul>
			<li>
				<div class="cleft">上传最新年检照片</div>
				<div class="cright">
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
			</li>
			<li>
				<div class="cleft">证件结束日期 </div>
				<div class="cright">
					<span><input readonly type="text" id="date2" placeholder="2018-11-01"></span>
				</div>
			</li>
		</ul>
		<?php } ?>
		<div class="buy_box">
			<a href="">确认提交</a>
		</div>
	</div>
</body>
<script>
	$(function(){
		// document.getElementById('date1').date = new Date('2018/08/18');
		// document.getElementById('date2').date = new Date('2018/08/18');
		new rolldate.Date({
		 	el:'#date1',
			format:'YYYY-MM-DD',
			beginYear:1900,
			endYear:2100,
			theme: "#e74f5b",
			confirmBefore: function(el, date){
		        document.getElementById('date1').value = date;
		    }
		})
		new rolldate.Date({
		 	el:'#date2',
			format:'YYYY-MM-DD',
			beginYear:1900,
			endYear:2100,
			theme: "#e74f5b",
			confirmBefore: function(el, date){
		        document.getElementById('date2').value = date;
		    }
		})
	})
</script>
</html>