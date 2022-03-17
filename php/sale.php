<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>优之茶</title>
<link rel="stylesheet" href="../CSS/index.css" type="text/css" />
<script language="javascript">
function newwin(url) {
  var oth="toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,left=500,top=200";
  oth = oth+",width=600,height=500";
  var newwin = window.open(url,"newwin",oth);
  newwin.focus();
  return false;
}
</script>
	</head>

<body>
<?php 
	session_start();
	if(empty($_SESSION['loginname'])){
			echo "<script>alert('请先登陆');location='login.php'</script>";
	}
	?>
<div id='boxes'>
	<div id='top'>
		<div id='titlel'>
			<a href="index.php"><<继续购物</a>
		</div>
		
		<div id='titler'>
			<div><a href="addcart.php">购物车</a></a></div>
		</div>
		
	    	<div id='titler-login'><a href='sale.php'>我的订单</a></div>
		<div id='titler-login-center'>|</div>
			<div id='titler-login'><a href='login.php'>登录 </a></div>
		
	</div>
	<div id='sel-title'>
			<div id='title-text1'>支持货到付款</div>
			<div id='title-text2'>速递包邮</div>
			<div id='title-text3'>全场90天保价</div>
		</div>
<?php
	 include('conn.php');
	 $str="SELECT * FROM tbsale WHERE userNameid = (select userNameid from tbuser where userName='".$_SESSION['loginname']."' )";
	 $result=mysqli_query($conn,$str);
	 $null=mysqli_fetch_array($result);
	 if($null==null){
		?>
		<div class="sale-img">
			<img src="../img/dingdan.png">
		</div>
	    <div class="sale-null-text"> 暂无订单</div>
	<a  href="index.php"><div class="sale-null-a">去下单</div></a>
		<?php
		}
		
	else {
?>
<div class="cart-body">
	<div class="cart-sale-show">
<div class="cart-sale-top1">
	    <div class="cart-top-title">商品名称</div>
			<div class="cart-top-title2">单价</div>
			<div class="cart-top-title2">数量</div>
			<div class="cart-top-title2">订单总额</div>
			<div class="cart-clear"></div>
		</div>
<?php	
		$strl="SELECT * FROM tbsale WHERE userNameid = (select userNameid from tbuser where userName='".$_SESSION['loginname']."' )";
	    $resultl=mysqli_query($conn,$strl);
			while($row=mysqli_fetch_row($resultl)){
				$img="select Commodityimg,CommodityName from tbcommodity where CommodityNo='".$row[1]."'";
				$imgresult=mysqli_query($conn,$img);
				$imgrow=mysqli_fetch_row($imgresult);
		?>
		
		<div class="cart-sale-top2">
		<div class="cart-sale">
			<div class="cart-sale1"><?php echo $row[7];?></div>
			<div class="cart-sale2">订单号：<?php echo $row[0];?></div>
			</div>
		<div class="cart-top-title"><img src="../img/<?php echo $imgrow[0] ?>">
		<div class="cart-top-div" align="center"><?php echo $imgrow[1];?></div>
		</div>
		<div class="cart-top-title2"><?php echo $row[3];?></div>
		<div class="cart-top-title3">
		
			<div class="num1"><?php echo $row[4];?></div>
	
		</div>
		<div class="cart-top-title4"><?php echo $row[3]*$row[4];?></div>
			<div class="cart-clear"></div>
		</div>
		<?php	
			}
			
		
	?>
		<div class="cart-clear"></div>
		</div>
	<?php
		}
		?>
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