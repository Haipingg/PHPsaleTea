<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>优之茶</title>
<link rel="stylesheet" href="../CSS/index.css" type="text/css" />
</head>

<body>
<div id='boxes'>
	<div id='top'>
		<div id='titlel'>
			<a href="index.php">优之茶首页</a>
		</div>
		<div id='titlel-small'>欢迎你</div>
		<div id='titler'>
			<div><a href="addcart.php">购物车</a></a></div>
		</div>
			    	<div id='titler-login'><a href='login.php'>我的订单</a></div>
		<div id='titler-login-center'>|</div>
			<div id='titler-login'><a href='login.php'>登录 </a></div>
	</div>
	<div id='sel-title'>
			<div id='title-text1'>支持货到付款</div>
			<div id='title-text2'>速递包邮</div>
			<div id='title-text3'>全场90天保价</div>
		</div>
		
	
	<?php
		session_start();
		include('conn.php');
		$str="select * from tbcommodity where CommodityName='".$_GET['chayename']."'";
		$result=mysqli_query($conn,$str);
		$row=mysqli_fetch_row($result);
	?>
	<div class='detail-body'>
		<div class='detail-img'><img src="../img/<?php echo $row[4] ?>"></div>
		<div class="detail-right">
			<div class="detail-name"><?php echo $row[1].' '.$row[3].' '.$row[6].'</br>';?></div>
			<div class="detail-div">
				<div class="detail-money1">价格：</div>
				<div class="detail-money2">￥</div>
				<div class="detail-money3"><?php echo $row[2]?></div>
			</div>
			<div class="detail-div">
				<div class="detail-jianjie-left">简介：</div>
				<div class="detail-jianjie"><?php echo $row[5];?></div>
			</div>
			<div class="detail-smalldiv">
				<div class="detail-jianjie-left">产地：</div>
				<div class="detail-more">中国大陆</div>
			</div>
			<div class="detail-smalldiv">
				<div class="detail-jianjie-left">包装种类：</div>
				<div class="detail-more">礼盒型</div>
			</div>
			<div class="detail-smalldiv">
				<div class="detail-jianjie-left">食品添加剂：</div>
				<div class="detail-more">无</div>
			</div>
			<div class="detail-smalldiv">
				<div class="detail-jianjie-left">级别：</div>
				<div class="detail-more">特级</div>
			</div>
			<div class="detail-smalldiv">
				<div class="detail-jianjie-left">净含量：</div>
				<div class="detail-more"><?php echo $row[6]?></div>
			</div>
			<div class="detail-smalldiv">
				<div class="detail-jianjie-left">保质期：</div>
				<div class="detail-more">560天</div>
			</div>
			<div class="detail-div">
				<a href="index.php"><div class="detail-buy"><查看更多</div></a>
				<a href="addaction.php?cname=<?php echo $row[1]?>"><div class="detail-addcart">加入购物车></div></a>
				<div class="detail-smell"><img src="../img/TB1UMXleq5s3KVjSZFNXXcD3FXa-200-200.png"></div>
				<div class="detail-smell">39人说好</div>
			</div>
			
		</div>
		<div class="cart-clear"></div>
	</div>
	<div class="last-title">
		<div class="last-text">订购热线: 0750-152481</div>
		<div class="last-bg"></div>
		<div class="last-text2">加盟热线: 0750-152157</div>
		<div class="last-sell">到优之茶</div>
		<div class="last-sell2"></div>
					<div class="last-xuanchuan">本网站不作商业用途 | 版权所有：优之茶茶叶网</div>

	</div>
	</div>
</body>
</html>