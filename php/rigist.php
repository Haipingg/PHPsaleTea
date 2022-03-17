<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>优之茶</title>
<link rel="stylesheet" href="../css/login.css" type="text/css" />
<script language=javascript>
	function rigistcheck(){
		if(rigist.rigistname.value==""){
			alert ("用户名输入不能为空");
			return false;
		}
		if((rigist.rigistname.value).length>6){
			alert ("用户名输入不能大于6位");
			return false;
		}
		if(rigist.rigistpwd.value==""){
			alert ("密码输入不能为空");
			return false;
		}
		if((rigist.rigistpwd.value).length>15){
			alert ("密码输入不能大于15位");
			return false;
		}
		else if(!IsValid()){
			alert ("密码只能是数字或字母");
			return false;
		}
		
	}
	</script>
</head>

<body>
	<div class='boxes'>
		<div class="login-all">
			<div class="login-box">	
				
				<div class='title'>
					用户注册
				</div>
				<form name='rigist' method='post' action="rigistaction.php" onSubmit="return rigistcheck()">
				<div id="lg1" data-title="请输入1-6位汉字、字母或数字"><input name='rigistname' class="lg" placeholder='用户名' type='text'></div>
				<div id="lg" data-title="请输入6-15位数字、字母或密码组合"><input name='rigistpwd' class="lg" data-title="请输入数字" placeholder='密码' type="password" onkeyup="value=value.replace(/[^0-9a-zA-z]/g,'')" /></div>
				<input name='rigistpwd-go' class="lg" placeholder='确认密码' type='password'>
				<input name='level' type="hidden" value="普通用户">
				<input  class='bottom' type='submit' value="注册">
				<div class='litile'><a href="login.php">返回登陆</a></div>
				</form>
				</div>
		</div>
	</div>
</body>
</html>