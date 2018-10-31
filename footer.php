<?php
	error_reporting(0);
	if(!$a){  $a=1; }
?>
<div class="mb100"></div>
<div class="footer">
	<ul>
		<li class="<?php if($a == 1){ echo "active"; } ?>"><a href="index.php"><img src="images/icon/footer_icon1.png">首页</a></li>
		<li class="<?php if($a == 2){ echo "active"; } ?>"><a href="store.php"><img src="images/icon/footer_icon2.png">找律师</a></li>
		<li class="<?php if($a == 3){ echo "active"; } ?>"><a href="person.php"><img src="images/icon/footer_icon3.png">我的</a></li>
	</ul>
</div>