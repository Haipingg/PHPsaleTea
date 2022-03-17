<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>修改用户</title>
<link rel="stylesheet" type="text/css" href="../css/master.css">
</head>

<body>
<div id='box'>
	<div id='top'>
		<div id='right'></div>
	</div>
	<div id='meun'>
		<form method="post" name="form_u" action="updateaction.php">
		<table>
			<?php
			include_once("conn.php");
			if($_GET['action']=="update"){
				
				$str="select * from meun where chaye_id=".$_GET['id'];
				$result=mysqli_query($conn,$str);
				$row=mysqli_fetch_row($result);
			}
			?>
			<tr>
				<td id='u_text'  >茶叶名字：
				<input type="text" name="name" value="<?php echo $row[1] ?>"></td>
			</tr>
			<tr>
				<td id='u_text'  >茶叶单价：
				<input type="text" name="Email" value="<?php echo $row[2] ?>"></td>
			</tr>
			<tr>
				<td id='u_text'  >茶叶种类：
				<select name="select" style="width:166px;height: 23px;" >
						<?php
							echo "<option value='乌龙茶' selected>乌龙茶</option>";
					   		echo "<option value='绿茶' >绿茶</option>";
					   		echo "<option value='红茶' >红茶</option>";
							?>
					</select>
			</tr>
			<tr>
				<td id='u_text'  >茶叶图片：
				<input type="text" name="img" value="<?php echo $row[4] ?>"></td>
			</tr>
			<tr>
				<td id='u_fix'>
					<input type="hidden" name="action" value="update">
					<input type="hidden" name="id" value="<?php echo $row[0] ?>">
					<input type="submit" name="Submit" value="修改">
              		<input type="reset" name="reset" value="重置">
				</td>
			</tr>
		</table>
		</form>
	</div>
</div>
</body>
</html>