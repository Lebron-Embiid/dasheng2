<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>e颂服务订单</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="renderer" content="webkit">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/eOrder.css">
	<script src="js/jquery-2.1.4.min.js"></script>
</head>
<body>
	<?php include "header.php"; ?>
	<div class="order_box">
		<h3>律师信息</h3>
		<div class="order_info">
			<div class="left">
				<img src="images/store_head.png" alt="">
				<h4>张三</h4>
			</div>
			<div class="right">
				<p>电话：136-8989-5656</p>
				<p>邮箱：585800@qq.com</p>
				<p>微信：2565555</p>
			</div>
		</div>
	</div>
	<ul class="nav_ul">
	  <li class="active"><span>纠纷描述</span></li>
	  <li><span>服务进程</span></li>
	  <li><span>服务项目</span></li>
	</ul>

	<div class="nav_tab active">
	<div class="tab1_info">
		<h3>您的信息</h3>
		<div class="tab1_cell">
			<div class="left">姓名</div>
			<div class="right"><input type="text" placeholder="须填写真实姓名" v-model="username" name="username" autocomplete="off"></div>
		</div>
		<div class="tab1_cell">
			<div class="left">住址</div>
			<div class="right"><input type="text" placeholder="须填写，用于判断司法管辖地" v-model='address' name="address" autocomplete="off"></div>
		</div>
		<div class="tab1_cell">
			<div class="left">手机</div>
			<div class="right"><input type="text" placeholder="须填写" name="phone" v-model="myphone" autocomplete="off"></div>
		</div>
		<div class="tab1_cell">
			<div class="left">Email</div>
			<div class="right"><input type="text" placeholder="" name="email" v-model="myemail" autocomplete="off"></div>
		</div>
	</div>
	<div class="tab1_info">
		<h3>纠纷方信息</h3>
		<div class="tab1_cell">
			<div class="left">姓名</div>
			<div class="right"><input type="text" placeholder="须填写真实姓名" v-model="othername" name="othername" autocomplete="off"></div>
		</div>
		<div class="tab1_cell">
			<div class="left">纠纷发生事件</div>
			<div class="right"><input type="text" placeholder="" name="event" v-model="eventVal" autocomplete="off"></div>
		</div>
		<div class="tab1_cell">
			<div class="left">收到法院文书时间</div>
			<div class="right">
				<input type="text" name="appDate" id="appDate" disabled value="2019-08-18" autocomplete="off">
			</div>
		</div>
		<div class="tab1_cell">
			<div class="left">纠纷类型</div>
			<div class="right">
				<div class="dispute_select">
					<select>
						<option>婚姻家庭</option>
						<option>未婚家庭</option>
						<option>单亲家庭</option>
					</select>
				</div>
			</div>
		</div>
	</div>
	<div class="tab1_info">
		<h3>地址信息</h3>
		<div class="tab1_cell">
			<div class="left">被告户籍地</div>
			<div class="right">
				<input type="text" placeholder="详细地址，如应方街道26号18栋2003" :name="item.name">
			</div>
		</div>
		<div class="tab1_cell">
			<div class="left">被高满一年居住地</div>
			<div class="right">
				<input type="text" placeholder="详细地址，如应方街道26号18栋2003" :name="item.name">
			</div>
		</div>
		<div class="tab1_cell">
			<div class="left">房产所在地</div>
			<div class="right">
				<input type="text" placeholder="详细地址，如应方街道26号18栋2003" :name="item.name">
			</div>
		</div>
		<div class="tab1_cell">
			<div class="left">原告户籍地</div>
			<div class="right">
				<input type="text" placeholder="详细地址，如应方街道26号18栋2003" :name="item.name">
			</div>
		</div>
	</div>
	<div class="tab1_info">
		<h3>证据信息</h3>
		<div class="tab1_cell">
			<div class="check_box">
				<p>能提供的信息</p>
				<label>
					<input type="checkbox" name="checkInfo[]" autocomplete="off">身份证
				</label>
				<label>
					<input type="checkbox" name="checkInfo[]" autocomplete="off">户口本
				</label>
				<label>
					<input type="checkbox" name="checkInfo[]" autocomplete="off">出生证
				</label>
				<label>
					<input type="checkbox" name="checkInfo[]" autocomplete="off">结婚证
				</label>
				<label>
					<input type="checkbox" name="checkInfo[]" autocomplete="off">离婚证
				</label>
				<label>
					<input type="checkbox" name="checkInfo[]" autocomplete="off">离婚协议
				</label>
				<label>
					<input type="checkbox" name="checkInfo[]" autocomplete="off">房产证
				</label>
				<label>
					<input type="checkbox" name="checkInfo[]" autocomplete="off">银行账户
				</label>
				<label>
					<input type="checkbox" name="checkInfo[]" autocomplete="off">转账凭证
				</label>
				<label>
					<input type="checkbox" name="checkInfo[]" autocomplete="off">死亡证明
				</label>
				<label>
					<input type="checkbox" name="checkInfo[]" autocomplete="off">亲属关系证明
				</label>
				<label>
					<input type="checkbox" name="checkInfo[]" autocomplete="off">遗嘱
				</label>
				<label>
					<input type="checkbox" name="checkInfo[]" autocomplete="off">录音录像
				</label>
				<label>
					<input type="checkbox" name="checkInfo[]" autocomplete="off">证人证言
				</label>
				<label>
					<input type="checkbox" name="checkInfo[]" autocomplete="off">有价物品
				</label>
				<label>
					<input type="checkbox" name="checkInfo[]" autocomplete="off">照片
				</label>
				<label>
					<input type="checkbox" name="checkInfo[]" autocomplete="off">车辆行驶证
				</label>
				<label>
					<input type="checkbox" name="checkInfo[]" autocomplete="off">证券账户
				</label>
				<label>
					<input type="checkbox" name="checkInfo[]" autocomplete="off">公司股权
				</label>
				<label>
					<input type="checkbox" name="checkInfo[]" autocomplete="off">债务/债务凭证
				</label>
				<label>
					<input type="checkbox" name="checkInfo[]" autocomplete="off">书面通知/函件
				</label>
				<label>
					<input type="checkbox" name="checkInfo[]" autocomplete="off">社交软件沟通记录（短信、微信、QQ、E-mail）
				</label>
			</div>
		</div>
		<div class="other_cell">
			<h3>其他补充证据</h3>
			<textarea name="other" v-model="other_evidence" placeholder="请详细描述纠纷事件经过..."></textarea>
		</div>
		<div class="other_cell">
			<h3>事件描述</h3>
			<textarea name="desc" v-model="other_desc" placeholder="如果还有上面选中中不包含的证据，请填写。"></textarea>
		</div>
	</div>
	</div>
	<div class="nav_tab">
	<div class="tab2_info">
		<!-- 律师 -->
		<ul v-show="eOrder_title == '律师信息'">
			<li>
				<div class="process_box active">
					<img src="images/icon/e_icon_on1.png" class="icon">
					<div class="gray_div">
						<h2>案件信息</h2>
						<div class="process_btn">
							<span>客户确认<img src="images/icon/till.png"><img src="images/icon/project_icon3.png"></span>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="process_box">
					<img src="images/icon/e_icon2.png" class="icon">
					<div class="gray_div">
						<h2>证据信息查询</h2>
						<h3>查征信登记表</h3>
						<p>举证信息查询单</p>
						<div class="process_btn">
							<span>客户确认<img src="images/icon/till.png"><img src="images/icon/project_icon3.png"></span>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="process_box">
					<img src="images/icon/e_icon3.png" class="icon">
					<div class="gray_div">
						<h2>案件信息</h2>
						<h3>合同</h3>
						<h3>委托书</h3>
						<p>起诉状、财产保全申请书、财产保全担保书、证据自录</p>
						<div class="process_btn">
							<span>客户确认<img src="images/icon/till.png"><img src="images/icon/project_icon3.png"></span>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<!-- 客户 -->
		<ul v-show="eOrder_title == '客户信息'">
			<li>
				<div class="process_box active">
					<img src="images/icon/e_icon_on1.png" class="icon">
					<div class="gray_div">
						<h2>案件信息</h2>
						<div class="process_btn">
							<span>客户确认<img src="images/icon/till.png"><img src="images/icon/project_icon3.png"></span>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="process_box">
					<img src="images/icon/e_icon2.png" class="icon">
					<div class="gray_div">
						<h2>证据信息查询</h2>
						<h3>查征信登记表</h3>
						<p>举证信息查询单</p>
						<div class="process_btn">
							<span>客户确认<img src="images/icon/till.png"><img src="images/icon/project_icon3.png"></span>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="process_box">
					<img src="images/icon/e_icon4.png" class="icon">
					<div class="gray_div">
						<h2>案件信息</h2>
						<h3>合同</h3>
						<h3>委托书</h3>
						<p>起诉状、财产保全申请书、财产保全担保书、证据自录</p>
						<div class="process_btn">
							<span>客户确认<img src="images/icon/till.png"><img src="images/icon/project_icon3.png"></span>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="process_box">
					<img src="images/icon/e_icon3.png" class="icon">
					<div class="gray_div">
						<h2>委托立案登记</h2>
						<h3>受理通知</h3>
						<h3>受理通知</h3>
						<p>提交材料清单、证据目录</p>
						<p>消费期限告知书、诉讼费缴纳期限<span>2019-08-17</span></p>
						<div class="process_btn">
							<span>客户确认<img src="images/icon/till.png"><img src="images/icon/project_icon3.png"></span>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
	</div>
	<div class="nav_tab">
	<div class="tab3_info">
		<h3>服务项目</h3>
		<ul class="pro_ul">
			<li><img src="images/icon/e_icon1.png"><p>案件信息<span>张律师</span></p></li>
			<li><img src="images/icon/e_icon2.png"><p>证据调查<span>张律师</span></p></li>
			<li><img src="images/icon/e_icon3.png"><p>案件材料准备<span>张律师</span></p></li>
		</ul>
		<h4>您的律师服务费 <span>¥10.00</span></h4>
	</div>
	<div class="tab3_info nobor">
		<ul class="edit_ul">
			<li><a href="complaint.php"><img src="images/icon/project_icon1.png"><p>投诉<img src="images/icon/right_three2.png" alt=""></p></a></li>
			<li><a href="evaluation.php"><img src="images/icon/project_icon2.png"><p>评价<img src="images/icon/right_three2.png" alt=""></p></a></li>
			<li><a href=""><img src="images/icon/project_icon3.png"><p>加单<img src="images/icon/right_three2.png" alt=""></p></a></li>
		</ul>
	</div>
	</div>
	<div class="mb100"></div>
    <div class="footer_query">
      <div class="footer_left">¥10.00</div>
      <div class="footer_right"><a href="">提交订单</a></div>
    </div>
		<a href="chat.php" class="customer_service"><img src="images/service_ad.png"></a>
	</div>
</body>
<script>
	$(function(){
		$(".nav_ul").on("click","li",function(){
			let index = $(this).index();
			$(this).addClass("active").siblings().removeClass("active");
			$(".nav_tab").eq(index).addClass("active").siblings(".nav_tab").removeClass("active");
		})
	})
</script>
</html>