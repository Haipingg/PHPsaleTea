<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>优之茶</title>
<script src="../js/layui.js";></script>
<link rel="stylesheet" href="../css/login.css" type="text/css" />
<script language=JavaScript>
    function logincheck()
    {
        if (login.loginname.value == "")
            {
             alert ("请输入用户名!");
             return false;
             }
        if (login.loginpwd.value == "")
             {
               alert("请输入密码!");
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
					用户登陆
				</div>
				<form name="login" method="post" action="loginaction.php"  onsubmit="return logincheck()">
				<input name='loginname' class="lg" placeholder='优之茶用户名' type='text'>
				<input name='loginpwd' class="lg" placeholder='密码' type="password">
				<input class='bottom' type='submit' value="登录">
					<div class='litile'>没有账号？点击<a href="rigist.php">这里</a>注册</div>
				</form>
				</div>
		</div>
	</div>
	
</body>
</html>