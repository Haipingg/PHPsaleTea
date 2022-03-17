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
	$id="select userNameid from tbuser where userName ='".$_SESSION['loginname']."'";
	$idresult=mysqli_query($conn,$id);
	$idrow=mysqli_fetch_row($idresult);
	
	if(!empty($_SESSION['cart'])){
		$a=$_SESSION['cart'];
		foreach($a as $b){
			$No="select CommodityNo,Commoditymoney from tbcommodity where Commodityname ='".$b[0]."'";
			$result=mysqli_query($conn,$No);
			$row=mysqli_fetch_row($result);
			$num=$row[1]*$b[1];
			echo $num,$row[0],$idrow[0],$b[1],$_POST['dizhi'];
			$str="insert into tbsale (CommodityNo,userNameid,TBSaleAmount,TBSaleMoney,salelocation,salerel) values('".$row[0]."','".$idrow[0]."','".$b[1]."','".$num."','".$_POST['dizhi']."','".$_POST['rel'].")";
			$endresult=mysqli_query($conn,$str);
		}
	}
	$_SESSION['cart']=null;
	echo "<script>alert('下单成功');location='sale.php'</script>";
	
	?>
</body>
</html>