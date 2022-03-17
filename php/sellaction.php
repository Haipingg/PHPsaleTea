<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
	session_start();
	include("conn.php");
	$id="select userNameid from tbuser where userName =".$_SESSION['loginname'];
	$idresult=mysqli_query($conn,$id);
	if(!empty($_SESSION['cart'])){
		$a=$_SESSION['cart'];
		foreach($a as $b){
			$No="select CommodityNo,Commoditymoney from tbcommodity where Commodityname =".$_SESSION['$b[0]'];
			$result=mysqli_query($conn,$No);
			$row=mysqli_fetch_row($result);
			$str="insert into tbsale (CommodityNo,userNameid,TBsaleAmount,TBsaleMoney,saleTime) values('".$row[0]."','".$idresult."','".$b[1]."','".$row[1]*$b[1]."','".now()."')";
			$endresult=mysqli_query($conn,$str);
		}
	}
	$_SESSION['cart']=null;
	echo "<script>alert('下单成功');location='sell.php'</script>";
	
	?>
</body>
</html>