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
			if($v[1]>1){
				$a[$key][1]=$a[$key][1]-1;
			}
			else if($v[1]==1){
				unset($a[$key]);
			}
		}
	}
	$_SESSION['cart']=$a;
	header('location:addcart.php');
	?>
</body>
</html>