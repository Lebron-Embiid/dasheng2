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
				<div class="img_box">
					<img src="images/ls_head.png" class="ls_head">
					<input type="file" class="file" name="">
				</div>
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
<script>
	$(function(){
		// var img = "images/advisory2.png";//imgurl 就是你的图片路径  

		// function getBase64Image(img) {  
		//      var canvas = document.createElement("canvas");  
		//      canvas.width = img.width;  
		//      canvas.height = img.height;  
		//      var ctx = canvas.getContext("2d");  
		//      ctx.drawImage(img, 0, 0, img.width, img.height);  
		//      var ext = img.src.substring(img.src.lastIndexOf(".")+1).toLowerCase();  
		//      var dataURL = canvas.toDataURL("image/"+ext);  
		//      return dataURL;  
		// }  

		// var image = new Image();  
		// image.src = img;  
		// image.onload = function(){  
		//   var base64 = getBase64Image(image);  
		//   console.log(base64)
		// }

		$(".text-center").on("change","input",function(){
			var filePath=$(this).val();
			if(filePath.indexOf("jpg")!=-1 || filePath.indexOf("png")!=-1){
				$(".fileerrorTip").html("").hide();
		        var arr=filePath.split('\\');
		        var fileName=arr[arr.length-1];
		        console.log($(".ls_head").attr("src"))
		        $(".ls_head").attr("src","images/"+fileName)
		        console.log($(".ls_head").attr("src"))
		        console.log(base64)
			}else{
		        alert("您未上传文件，或者您上传文件类型有误！");
		        return false;
			}
		})
	})
</script>
</html>