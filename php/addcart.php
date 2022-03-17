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
	
	if(!empty($_SESSION["cart"])){
?>
<div class="cart-body">
	<div class="cart-show">
		<div class="cart-top">
			<div class="cart-top-title">商品名称</div>
			<div class="cart-top-title2">价格</div>
			<div class="cart-top-title2">数量</div>
			<div class="cart-top-title2">总价</div>
			<div class="cart-clear"></div>
		</div>
<?php		
		$a=array();
		$a=$_SESSION["cart"];
		$sum=0;
		include('conn.php');
		foreach($a as $v){
			
			$str="select*from tbcommodity where CommodityName='".$v[0]."'";
			$result=mysqli_query($conn,$str);
			while($row=mysqli_fetch_row($result)){
		?>
		
		<div class="cart-top">
		<div class="cart-top-title"><img src="../img/<?php echo $row[4] ?>">
				<div class="cart-top-div" align="center"><?php echo $row[1];?></div>
		</div>
		<div class="cart-top-title2"><?php echo $row[2];?></div>
		<div class="cart-top-title3">
			<bottom class="jian"><a href="delete.php?name=<?php echo $row[1]?>">-</a></bottom>
			<div class="num"><?php echo $v[1];?></div>
			<bottom class="plus"><a href="plus.php?name=<?php echo $row[1]?>">+</a></bottom>
		</div>
		<div class="cart-top-title4"><?php echo $row[2]*$v[1];?></div>
			<div class="cart-clear"></div>
		</div>
		<?php
			$sum=$sum+($row[2]*$v[1]);	
			}
			
		}
	?>
		<div class="cart-clear"></div>
		</div>
		<div class="jiesuan">
			<a href="end.php"><div class='jiesuan-text'>去结算</div></a>
			<div class="jiesuan-money"><?php echo $sum;?></div>
			<div class="jiesuan-money-small">￥</div>
		</div>
	<?php
		}
		else{
		?>
		<div class="cart-null">
			<img src="../img/emptyCart.png">
			<a  href="index.php"><div class="cart-a"></div></a>
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