<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>

</head>

<body>
<?php
	error_reporting( E_ALL&~E_NOTICE );
session_start();
//x
$cname = $_GET["cname"];
if(empty($_SESSION['loginname'])){
			echo "<script>alert('请先登陆');location='login.php'</script>";
		}
else{
	if(empty($_SESSION["cart"]))
{
    //如果点击的购物车是空的（第一次添加）

    //如果购物车里是空的，造二维数组，
    $arr = array(
        array($cname,1)
        //一维数组，取ids，第一次点击增加一个
    );
    $_SESSION["cart"]=$arr;
    //扔到session里面
}
else
    //这里不是第一次点击
{
    //先判断购物车里是否已经有了该商品，用$ids
    $arr = $_SESSION["cart"];
    //把购物车的状态取出来

    $chuxian = false;
//定义一个变量；用来表示是否出现，默认是未出现
    foreach ($arr as $v) {
        //便利他
        //如果这里面有这件商品
		
        if ($v[0] == $cname) //如果取过来的$v[0]（商品的代号）等于$ids那么就证明购物车中已经有了这一件商品
        {
            $chuxian = true;
            //如果出现，直接把chuxian改成true

        }
    }
    if($chuxian)
    {
        //购物车中有此商品
		$arr=$_SESSION["cart"];
        for($i=0;$i<count($arr);$i++)
        {
			
            if($arr[$i][0] == $cname)
            {
                //把点到的商品编号加1
                $arr[$i][1] += 1;
            }
        }
        $_SESSION["cart"] = $arr;

    }
        else
            {
                //这里就只剩下：购物车里有东西，但是并没有这件商品
                $asg = array($cname,1);
                //设一个小数组
                $arr[] = $asg;
                $_SESSION["cart"]=$arr;
            }

}

echo "<script>alert('加入购物车成功');location='addcart.php'</script>";
}


?>
</body>
</html>