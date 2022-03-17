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
	<form method="post" name="form_a" action="addchayeaction.php">
		<table>
			
			<tr>
				<td id='u_text'  >茶叶名字：
				<input type="text" name="name" ></td>
			</tr>
			<tr>
				<td id='u_text'  >茶叶单价：
				<input type="text" name="password" ></td>
			</tr>
			<tr>
				<td id='u_text'  >茶叶类型：
				<select name="select" style="width:166px;height: 23px;" >
						<?php
							echo "<option value='乌龙茶' selected>乌龙茶</option>";
					   		echo "<option value='红茶' >红茶</option>";
							echo "<option value='绿茶' >绿茶</option>";
							?>
					</select>
			</tr>
			<tr>
				<td id='u_text'  >图片名：
				<input type="text" name="birthday" ></td>
			</tr>
			
			<tr>
				<td id='u_fix'>
					<input type="hidden" name="action" value="add">
					<input type="submit" name="Submit" value="增添">
              		<input type="reset" name="reset" value="重置">
				</td>
			</tr>
		</table>
		</form>
	</div>
	</div>
</body>
</html>