<?php 
	error_reporting(0);
	$id = $_GET['id'];
	if(!$id){ $id=1; }
 ?>
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
	<link rel="stylesheet" href="css/rolldate.css">
	<link rel="stylesheet" href="css/img.css">
    <link rel="stylesheet" href="css/pick-pcc.css"/>
	<link rel="stylesheet" href="css/eOrder.css">
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/rolldate.js"></script>
	<script src="js/imgUp.js"></script>
	<script src="js/pick-pcc.js"></script>
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
			<div class="right"><input type="text" placeholder="须填写真实姓名" name="username" autocomplete="off"></div>
		</div>
		<div class="tab1_cell">
			<div class="left">住址</div>
			<div class="right"><input type="text" placeholder="须填写，用于判断司法管辖地" name="address" autocomplete="off"></div>
		</div>
		<div class="tab1_cell">
			<div class="left">手机</div>
			<div class="right"><input type="text" placeholder="须填写" name="phone" autocomplete="off"></div>
		</div>
		<div class="tab1_cell">
			<div class="left">Email</div>
			<div class="right"><input type="text" placeholder="" name="email" autocomplete="off"></div>
		</div>
	</div>
	<div class="tab1_info">
		<h3>纠纷方信息</h3>
		<div class="tab1_cell">
			<div class="left">姓名</div>
			<div class="right"><input type="text" placeholder="须填写真实姓名" name="othername" autocomplete="off"></div>
		</div>
		<div class="tab1_cell">
			<div class="left">纠纷发生事件</div>
			<div class="right"><input type="text" placeholder="" name="event" autocomplete="off"></div>
		</div>
		<div class="tab1_cell">
			<div class="left">收到法院文书时间</div>
			<div class="right">
				<input readonly type="text" id="date1" placeholder="2018-08-18">
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
	<div class="tab1_info address_info">
		<h3>地址信息</h3>
		<div class="tab1_cell">
			<div class="left">被告户籍地</div>
			<div class="right">
				<div class="pick-area pick-area1" name=""></div>
				<input type="text" placeholder="详细地址，如应方街道26号18栋2003" name="">
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="tab1_cell">
			<div class="left">被高满一年居住地</div>
			<div class="right">
				<div class="pick-area pick-area2" name=""></div>
				<input type="text" placeholder="详细地址，如应方街道26号18栋2003" name="">
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="tab1_cell">
			<div class="left">房产所在地</div>
			<div class="right">
				<div class="pick-area pick-area3" name=""></div>
				<input type="text" placeholder="详细地址，如应方街道26号18栋2003" name="">
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="tab1_cell">
			<div class="left">原告户籍地</div>
			<div class="right">
				<div class="pick-area pick-area4" name=""></div>
				<input type="text" placeholder="详细地址，如应方街道26号18栋2003" name="">
			</div>
			<div class="clearfix"></div>
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
			<textarea name="other" placeholder="请详细描述纠纷事件经过..."></textarea>
		</div>
		<div class="other_cell">
			<h3>事件描述</h3>
			<textarea name="desc" placeholder="如果还有上面选中中不包含的证据，请填写。"></textarea>
		</div>
	</div>
	</div>
	<div class="nav_tab">
	<div class="tab2_info">
		<!-- 律师 -->
		<?php if($id == 1){ ?>
		<ul>
			<li>
				<div class="process_box active">
					<img src="images/icon/e_icon_on1.png" class="icon">
					<div class="gray_div">
						<h2>案件信息</h2>
						<div class="process_btn">
							<span>客户确认<img src="images/icon/till.png"></span>
							<span>客户确认<img src="images/icon/till.png"></span>
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

						<div class="img-box full">
							<section class=" img-section">
								<div class="z_photo upimg-div clear" >
					               	 <section class="z_file fl">
					               	 	<img src="images/upload_bg.jpg" class="add-img">
					               	 	<input type="file" name="file" id="file1" multiple class="file" value="" accept="image/jpg,image/jpeg,image/png,image/bmp" multiple />
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

						<div class="process_btn">
							<span>客户确认<img src="images/icon/till.png"></span>
							<span>客户确认<img src="images/icon/till.png"></span>
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

						<div class="img-box full">
							<section class=" img-section">
								<div class="z_photo upimg-div clear" >
					               	 <section class="z_file fl">
					               	 	<img src="images/upload_bg.jpg" class="add-img">
					               	 	<input type="file" name="file" id="file1" multiple class="file" value="" accept="image/jpg,image/jpeg,image/png,image/bmp" multiple />
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

						<div class="process_btn">
							<span>客户确认<img src="images/icon/till.png"></span>
							<span>客户确认<img src="images/icon/till.png"></span>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<?php }else{ ?>
		<!-- 客户 -->
		<ul>
			<li>
				<div class="process_box active">
					<img src="images/icon/e_icon_on1.png" class="icon">
					<div class="gray_div">
						<h2>案件信息</h2>
						<div class="process_btn">
							<span>客户确认<img src="images/icon/till.png"></span>
							<span>客户确认<img src="images/icon/till.png"></span>
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
							<span>客户确认<img src="images/icon/till.png"></span>
							<span>客户确认<img src="images/icon/till.png"></span>
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
							<span>客户确认<img src="images/icon/till.png"></span>
							<span>客户确认<img src="images/icon/till.png"></span>
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
						<p>消费期限告知书、诉讼费缴纳期限<span class="time_span">2019-08-17</span></p>
						<div class="process_btn">
							<span>客户确认<img src="images/icon/till.png"></span>
							<span>客户确认<img src="images/icon/till.png"></span>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<?php } ?>
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
		document.getElementById('date1').date = new Date('2018/08/18');//默认日期
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

		$(".pick-area1").pickArea();
		$(".pick-area2").pickArea();
		$(".pick-area3").pickArea();
		$(".pick-area4").pickArea();

		$(".nav_ul").on("click","li",function(){
			let index = $(this).index();
			$(this).addClass("active").siblings().removeClass("active");
			$(".nav_tab").eq(index).addClass("active").siblings(".nav_tab").removeClass("active");
		})
		$(".process_btn span").click(function(){
			let index = $(this).index();
			let conf = [];
			conf[index] = confirm("是否确认信息？");
			if(conf[index] == true){
				var nowDate = new Date();
			    var year = nowDate.getFullYear();
			    var month = nowDate.getMonth() + 1 < 10 ? "0" + (nowDate.getMonth() + 1) : nowDate.getMonth() + 1;
			    var date = nowDate.getDate() < 10 ? "0" + nowDate.getDate() : nowDate.getDate();
			    var str = year + "-" + month + "-" + date;
				$(this).html(str+"<img src='images/icon/project_icon3.png'>");
			}else{

			}
		})
	})
</script>
</html>