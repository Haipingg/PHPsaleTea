<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>优之茶</title>
<link rel="stylesheet" href="../css/master.css" type="text/css" />
</head>

<body>
<div id='box'>
<div id='top'>
		<div id='right'></div>
	</div>
	<div id='meun'>
	</table>

<?php
include("conn.php");

	
if (!($_POST['name'] and  $_POST['password']) )
{
  echo "输入不允许为空。点击<a href='javascript:onclick=history.go(-1)'>这里</a> 返回";
}else{  
		
		if(!($_POST['birthday'])){
     		$sqlInsert = "insert into meun(chaye_name,chaye_price,chaye_type,chaye_img) values('".$_POST['name']."','".$_POST['password']."','".$_POST['select']."','nolog.jpg')";}
		else {
			$sqlInsert = "insert into meun(chaye_name,chaye_price,chaye_type,chaye_img) values('".$_POST['name']."','".$_POST['password']."','".$_POST['select']."','".$_POST['birthday']."')";
		}
	    $result = mysqli_query($conn,$sqlInsert);

	    if ($result)
		{
		     echo "<form  method='post' name='add_form' action='master.php'>
			  <input type='submit' name='Submit' value='点击查看'></form>";
	    }else{
		       echo "<script>alert('添加失败');history.go(-1);</script>";
	         }
}
	
?>

	

	</table>
	</div>
	</div>
</body>
</html>