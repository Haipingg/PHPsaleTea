<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
	include("conn.php");
	$str="select*from tbuser where userName='".$_POST['rigistname']."'";
	$result=mysqli_query($conn,$str);
	$row=mysqli_fetch_row($result);
	if($row==null){
		$insstr="insert into tbuser(userName,userPassword,userLimit) 
		values('".$_POST['rigistname']."','".$_POST['rigistpwd']."','普通用户')";
		$insresult=mysqli_query($conn,$insstr);
		if($insresult){
			$outstr="select*from tbuser where userName='".$_POST['rigistname']."'";
			$outresult=mysqli_query($conn,$outstr);
			$outrow=mysqli_fetch_row($outresult);
			echo "<script>alert('注册成功!');location='login.php'</script>";
		}
	}
	else {
		echo "<script>alert('用户名已被使用！');history.go(-1);</script>";
	}
	?>
</body>
</html>