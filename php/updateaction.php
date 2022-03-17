<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>修改用户</title>
<link rel="stylesheet" type="text/css" href="../css/master.css">
</head>


<body>
<body>
<div id='box'>
	<div id='top'>
		<div id='right'></div>
	</div>
	<div id='meun'>
<?php
include("conn.php");
		
if (!($_POST['name'] and $_POST['Email'] ) )
{
  echo "输入不允许为空。点击<a href='javascript:onclick=history.go(-1)'>这里</a> 返回";
}else{	
		if($_POST['img']){
	    $sqlUpdate = "update  meun set chaye_name = '".$_POST['name']."', chaye_type = '".$_POST['select']."', chaye_img = '".$_POST['img']."' ,chaye_price='".$_POST['Email']."'
		where chaye_id = ".$_POST['id'];//定义更新语句}
		}
		else{
			$sqlUpdate = "update  meun set chaye_name = '".$_POST['name']."', chaye_type = '".$_POST['select']."', chaye_img = 'nolmg.jpg' ,chaye_price='".$_POST['Email']."'
		where chaye_id = ".$_POST['id'];
		} 
	    $result = mysqli_query($conn,$sqlUpdate);
	    if ($result)
		{
		     echo "<form  method='post' name='add_form' action='master.php'>
			  <input type='submit' name='Submit' value='修改成功'></form>";
	    }else{
		       echo "<script>alert('修改失败');history.go(-1);</script>";
	         }
}
?>		
	</div>
</div>	
</body>
</html>