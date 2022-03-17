<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
	session_start();
	$a=$_SESSION['cart'];
	$name=$_GET['name'];
	
	foreach($a as $key=>$v){
		if($v[0]==$name){
			$a[$key][1]+=1;
		}
	}
	$_SESSION['cart']=$a;
	header('location:addcart.php');
	?>
</body>
</html>