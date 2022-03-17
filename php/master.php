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
	<table border="0" width="100%">
		<tr>
			<td id='t_b' height="15" width="15%" align="center">ID</td>
			<td id='t_b'  width="15%" align="center">茶叶名字</td>
			<td id='t_b'  width="25%" align="center">单价</td>
			<td id='t_b'  width="15%" align="center">茶叶种类</td>
			<td id='t_b'  width="15%" align="center">图片</td>
			<td id='t_b'  width="15%" align="center">操作</td>
		</tr>
		
		
		<?php
					include("conn.php");
					
					$sqlall="select *from meun";
					$resultall=mysqli_query($conn,$sqlall);
					while($rows=mysqli_fetch_row($resultall)){
						echo "<tr>";
						for($i=0;$i<count($rows)-1;$i++){
							 echo "<td align='center' height='50'>".$rows[$i]."</td>";
						}
						echo "<td id='img' align='center' height='50'><img src='../img/".$rows[4]."'></td>";
							echo "<td ><a href='update.php?action=update&id=".$rows[0]."'>修改</a>
		      				/<a href=del.php?action=delete&d_id=".$rows[0]." onclick = 'return del();'>删除</a></td>";
						echo "</tr>";
						
						
					}
				
			
		
	
	?>
	
	</table>
		
	</div>
	<div id='foot'>
			<div id='return'><a href='login.php'><?php echo "<<返回登录"?></a></div>
			<div id='return-r'><a href='addchaye.php'><?php echo "添加茶品>>"?></a></div>
		</div>	
</div>

</body>
</html>