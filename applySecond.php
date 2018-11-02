<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>申请律师</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="renderer" content="webkit">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/rolldate.css">
	<link rel="stylesheet" href="css/apply.css">
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/rolldate.js"></script>
</head>
<body>
	<?php include "header.php"; ?>
	<div class="apply_box">
		<h3>申请律师<span>|</span>第二步</h3>
		<div class="first_box">
			<div class="first_item">
				<div class="left">身份证号码</div>
				<div class="right"><div><input type="text" name="id_card" autocomplete="off" placeholder="填写身份证号码"></div></div>
			</div>
			<div class="first_item">
				<div class="left">律师证编号</div>
				<div class="right"><div><input type="text" name="lawyer_number" autocomplete="off" placeholder="须填写律师证编号"></div></div>
			</div>
			<div class="first_item">
				<div class="left">注册时间</div>
				<div class="right">
					<div>
						<span><input readonly type="text" id="date" placeholder="2018-08-18"></span>
					</div>
				</div>
			</div>
			<div class="first_item">
				<div class="left">律师证年鉴有效期</div>
				<div class="right">
					<div class="mul_time_box">
						<span><input readonly type="text" id="date1" placeholder="2018-08-18"></span>
						至
						<span><input readonly type="text" id="date2" placeholder="2018-08-18"></span>
					</div>
				</div>
			</div>
			<div class="first_item">
				<div class="left">任职律所名称</div>
				<div class="right"><div><input type="text" name="law_name" autocomplete="off" placeholder="须填写律所名称"></div></div>
			</div>
			<div class="first_item">
				<div class="left">执业地点</div>
				<div class="right">
					<div>
						<!-- <input type="text" name="law_address" autocomplete="off" placeholder="须填写执业地点"> -->
						<select>
							<option>请选择城市</option>
							<option>深圳</option>
							<option>北京</option>
							<option>武汉</option>
							<option>上海</option>
							<option>广州</option>
						</select>
					</div>
				</div>
			</div>
			<div class="first_item">
				<div class="left">律师证年鉴有效期</div>
				<div class="right">
					<div class="mul_time_box">
						<span><input readonly type="text" id="date3" placeholder="2018-08-18"></span>
						至
						<span><input readonly type="text" id="date4" placeholder="2018-08-18"></span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="buy_box">
		<a href="applyFinish.php">下一步</a>
	</div>
</body>
<script>
	$(function(){
		document.getElementById('date').date = new Date('2018/08/18');//默认日期
		document.getElementById('date1').date = new Date('2018/08/18');//默认日期
		document.getElementById('date2').date = new Date('2018/08/18');//默认日期
		document.getElementById('date3').date = new Date('2018/08/18');//默认日期
		document.getElementById('date4').date = new Date('2018/08/18');//默认日期
		new rolldate.Date({
		 	el:'#date',
			format:'YYYY-MM-DD',
			beginYear:1900,
			endYear:2100,
			theme: "#e74f5b",
			confirmBefore: function(el, date){
		        document.getElementById('date').value = date;
		    }
		})
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
		new rolldate.Date({
		 	el:'#date3',
			format:'YYYY-MM-DD',
			beginYear:1900,
			endYear:2100,
			theme: "#e74f5b",
			confirmBefore: function(el, date){
		        document.getElementById('date3').value = date;
		    }
		})
		new rolldate.Date({
		 	el:'#date4',
			format:'YYYY-MM-DD',
			beginYear:1900,
			endYear:2100,
			theme: "#e74f5b",
			confirmBefore: function(el, date){
		        document.getElementById('date4').value = date;
		    }
		})
	})
</script>
</html>