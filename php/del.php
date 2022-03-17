<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>删除用户</title>
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
header ( "Content-type: text/html; charset=utf-8" ); //设置文件编码格式
include("conn.php");							//连接数据库
if ($_GET['action'] == "delete"){	
	//判断是否执行删除
	
	$sqlDel = "delete from meun where chaye_id = ".$_GET['d_id'];//定义删除语句
	$result = mysqli_query($conn,$sqlDel);
		//执行删除操作
	if ($result){
		echo "<form  method='post' name='add_form' action='master.php'>
			  <input type='submit' name='Submit' value='删除成功'></form>";
	}else{
		echo "删除失败";
	}
}
?>
	</div>
</div>
</body>
</html>