<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
	 session_start();
	
	if(($_SESSION['loginname']==null)||($_SESSION['loginname']!=$_POST['loginname'])){
		$_SESSION['cart']=null;
		$_SESSION['loginname']=$_POST['loginname'];
	}
	
	else{
	$_SESSION['loginname']=$_POST['loginname'];}
	include("conn.php");
	$str="select*from tbuser where userName='".$_POST['loginname'].
		"' and userPassword=".$_POST['loginpwd'];
	$result=mysqli_query($conn,$str);
	$row=mysqli_fetch_row($result);
	if($row==null){
		echo "<script>alert('密码错误');history.go(-1);</script>";
	}
	else{
		if($row[3]=='普通用户'){
			echo "<script>alert('登陆成功');location='index.php'</script>";
		}
		else if($row[3]=='员工'){
			echo "<script>alert('登陆成功');location='../yuangong.php'</script>";
		}
		else{
			echo "<script>alert('登陆成功');location='../yg.php'</script>";
		}
	}
	
	?>
</body>
</html>