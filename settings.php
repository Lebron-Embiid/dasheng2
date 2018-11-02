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
					<input type="text" autocomplete="off" name="phone">
				</li>
				<li>
					<span>姓名<i>*</i>：</span>
					<input type="text" autocomplete="off" name="username">
				</li>
				<li>
					<span>微信：</span>
					<input type="text" autocomplete="off" name="weixin">
				</li>
				<li>
					<span>Q Q：</span>
					<input type="text" autocomplete="off" name="qq">
				</li>
				<li>
					<span>邮箱：</span>
					<input type="text" autocomplete="off" name="email">
				</li>
				<li>
					<span>所在城市：</span>
					<input type="text" autocomplete="off" name="city">
				</li>
			</ul>
			<button>保存</button>
		</div>
	</div>
</body>
<script>
	$(function(){
		function run(input_file,get_data){
	        /*input_file：文件按钮对象*/
	        /*get_data: 转换成功后执行的方法*/
	        if ( typeof(FileReader) === 'undefined' ){
	            alert("抱歉，你的浏览器不支持 FileReader，不能将图片转换为Base64，请使用现代浏览器操作！");
	        } else {
	            try{
	                /*图片转Base64 核心代码*/
	                var file = input_file.files[0];
	                //这里我们判断下类型如果不是图片就返回 去掉就可以上传任意文件
	                if(!/image\/\w+/.test(file.type)){
	                    alert("请确保文件为图像类型");
	                    return false;
	                }
	                var reader = new FileReader();
	                reader.onload = function(){
	                    get_data(this.result);
	                }
	                reader.readAsDataURL(file);
	            }catch (e){
	                // alert('图片转Base64出错啦！'+ e.toString())
	            }
	        }
	    }
		$(".text-center").on("change","input",function(){
				run(this, function (data) {
                   $('.ls_head').attr('src',data);
               });
		})
	})
</script>
</html>