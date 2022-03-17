<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>优之茶</title>
<link rel="stylesheet" href="../CSS/index.css" type="text/css" />
<script type="text/javascript">
    function nextSlide() {
    if (typeof $ == "undefined") var $ = function(sel) { return document.querySelector(sel); }  
    $(".slides").appendChild($(".slides img:first-child"));
}
setInterval(nextSlide, 3000)
    </script>
    <style type="text/css">
    img{
        width: 1300px;
        height: 400px;
		margin: 0px;
		padding: 0px;
    }
.slides {
  
  margin: 0px;
  padding: 0px 300px;
  height: 400px;
  overflow: hidden;
}
 
.slides img { 
  position: absolute; 
  transition: opacity 1s;
  opacity: 0;
}
 
.slides img:first-child { 
  z-index: 0;
  opacity: 1;
}
 
.slides img:last-child {
  z-index: -1;
  opacity: 1;
}
	</style>
</head>

<body>

<div id='boxes'>
	
	<div id='top'>
		<div id='titlel'>
			
			
			<a href="index.php">优之茶首页</a>
		</div>
		<div id='titlel-small'>欢迎你</div>
		<div id='titler'>
			<div><a href="addcart.php">购物车</a></a></div>
		</div>
		<div id='titler-login'><a href="login.php">登录</a></div>
	</div>
	<div id='sel-title'>
			<div id='title-text1'>支持货到付款</div>
			<div id='title-text2'>速递包邮</div>
			<div id='title-text3'>全场90天保价</div>
		</div>
	<div class="slides">
			<img src="../img/u=2629978321,3997043546&fm=26&gp=0.jpg">
			<img src="../img/u=3582584238,702650107&fm=26&gp=0.jpg">
			<img src="../img/u=1423390760,2323997656&fm=15&gp=0.jpg">
			<img src="../img/u=4144656473,1386640385&fm=15&gp=0.jpg">
		</div>
		
	<div id='sel'>
		<div id='list-title-big'>
		<A href="index.php">
		 <div id='list-title'>全部商品</div>
		 </A>
		 </div>
		<dd id='left'>
			<dl id='book1'>
			<a href="wulongcha.php">
				<dd id='bigtitle'>乌龙茶</dd>
				<dt id='totaltitle'>
					<ul id='tmeun'>
						<li>安溪铁观音</li>
						<li>武夷岩茶</li>
						<li>广东单枞</li>
					</ul>
				</dt>
				</a>
			</dl>
			<dl id='book1'>
			<a href="hongcha.php">
				<dd id='bigtitle'>红茶</dd>
				<dt id='totaltitle'>
					<ul id='tmeun'>
						<li>金骏眉</li>
						<li>正山小种</li>
						<li>广西红茶</li>
					</ul>
				</dt>
				</a>
			</dl>
			<dl id='book1'>
			<a href="lvcha.php">
				<dd id='bigtitle'>绿茶</dd>
				<dt id='totaltitle'>
					<ul id='tmeun'>
						<li>龙井</li>
						<li>四川绿茶</li>
						<li>碧螺春</li>
					</ul>
				</dt>
				</a>
			</dl>
		</dd>
		<dl id='right'>
<?php
session_start();
include_once('conn.php');
$psize=3;
$str="select*from tbcommodity where Commoditytype='绿茶'";
$result=mysqli_query($conn,$str);
$num=mysqli_num_rows($result);
$pcount=ceil($num/$psize);
if(isset($_GET['page'])){
	$page=$_GET['page'];
}			
else{
	$page=1;
}
$star=($page-1)*$psize;
$pstr="select*from tbcommodity where Commoditytype='绿茶' limit ".$star.",".$psize;
$result=mysqli_query($conn,$pstr);			
while($row=mysqli_fetch_row($result)){
?>
<dd class='put'>
<?php	
	if(!isset($row[4])||trim($row[4])==''){
		?>
			<dl class='put-image'><img src="../img/noImg.jpg"></dl>
				
<?php		
	}
	else {
		?>
		<dl class='put-image'><img src="../img/<?php echo $row[4] ?>"></dl>
<?php		
	}
	?>
	<dl class='put-text'>
		<a href="introduce.php?chayename=<?php echo $row[1];?>">
		<?php echo $row[1].' '.$row[3].' '.$row[6].'</br>';
		?></a>
		<dt class='put-money'>￥<?php echo $row[2]?></dt>
	</dl>
	
<?php	
		?>
		<div class='cart-on'>
			<a href='addaction.php?cname=<?php echo $row[1];?>'><div class='show'>加入购物车</div></a>
		</div>
		</dd>
		
		
<?php		
}
?>
<div class="page-nbsp"></div>
<?php			
if($page==1){
?>
		<div class='page-top'>首页</div>
		<div class='page-top'>上一页</div>	
<?php
}
else{
	?>
	 	<iv class='page'><a href="">首页</a></iv>
	 	<div class="page"><a href="">上一页</a></div>
<?php
}
	?>
	
	
<?php		
if($page==$pcount){
?>
	<div class="page-top">下一页</div>
	<div class="page-top">尾页</div>
<?php
}
else{
	?>
	<div class="page"><a href="">下一页</a></div>
	<div class="page"><a href="">尾页</a></div>
<?php
}
	?>
	<div class="page-top">共<?php echo $pcount;?>页</div>
		</dl>
	</div>
	<div class="last-title">
		<div class="last-text">订购热线: 0750-152481</div>
		<div class="last-bg"></div>
		<div class="last-text2">加盟热线: 0750-152157</div>
		<div class="last-sell">到优之茶</div>
		<div class="last-sell2"></div>
							<div class="last-xuanchuan">本网站不作商业用途 | 版权所有：优之茶茶叶网</div>

	</div>
	
</div>
</body>
</html>