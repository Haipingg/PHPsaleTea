<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>优之茶</title>
<link rel="stylesheet" href="../CSS/index.css" type="text/css" />
	<script language="JavaScript" src="../js/end.js"></script>
<script language=JavaScript>
    function ordercheck()
    {
        if (order.rel.value == "")
            {
             alert ("请输入联系方式!");
             return false;
             }
		if((order.rel.value).length!=11){
			alert("请输入正确的联系方式");
			return false;
		}
        if (order.dizhi.value == "")
             {
               alert("请输入地址!");
            return false;
             }
		if (dorder.zhifu.value == "")
             {
               alert("请选择支付方式!");
            return false;
             }
         }

</script>
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
	<div class='pay'>
		<div class='pay-bigtitle'>
			<div class='pay-title'>确认订单</div>
			<div class='pay-title-img'><img src="../img/u=1775855344,1424321531&fm=26&gp=0.jpg"></div>
			
		</div>	
		<form name='order'  action='saleaction.php' onsubmit="return ordercheck()" method="post">
		<div class='name'> 姓名 :<?php session_start(); echo $_SESSION['loginname'] ?></div>
		<div class='name'>联系方式 :<input class='inp' type="tel" name="rel" ></div>
		<div class='name'>地址 :<input class='inp2' type="text" name="dizhi" ></div>
		<div class='name'>
		  <div class="zhifu-name">支付方式</div>
		  <div class='zhifu'>
			  <div class=zhifu-text><input type=radio name="zhifu" value="1"></div>
				<div class=zhifu-text2><img src="../img/25.png"></div>
			  <div class=zhifu-text>货到付款</div>
			</div>
			<div class='zhifu'>
			  <div class=zhifu-text><input type=radio name="zhifu" value="2"></div>
				<div class=zhifu-text2><img src="../img/u=2959936547,1719933249&fm=26&gp=0.jpg.png"></div>
				<div class=zhifu-text>在线付款</div>
			</div>
			
		</div>
		<div class="tijiao">
			<div class='tijiao-text' onClick="return queding()"><input class='tijiao-text' type='submit' value="提交订单"></div>
			<div class='tijiao-text2'><A href="index.php"><?php echo "<<继续购物"?></A></div>
		</div>
		</form>
		</div>

	</div>

</body>
</html>