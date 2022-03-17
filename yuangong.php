<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>员工管理</title>
<style>
    table{
      border: 1px solid #050;
		margin:0px;
		margin-left:13px;
    }
    table th{
      	  background:#888888;
      	  color:#000000;
      	  border: 2px solid #dddddd;
    }
  </style>
<link href="C.css" rel="stylesheet" type="text/css" />
<style type="text/css">
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
</style>
</head>

<body>
	<?php
include_once("conn.php");
?>
<div class="beijin">
<img class="beijinone" src="images/cha.jpg" width="90" height="100" alt=""/ > 
<img class="beijintow" src="images/beijin.png" width="164" height="45" alt=""/>
<img src="images/xuni1.jpg" width="1585" height="100" alt=""/> 
</div>
<div>
<img src="images/bj.jpg" width="1900" height="20" alt=""/>
</div>
<div class="jili">
	<div class="jili1">
	<tr>
 	<td>
 		</a>&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp;员工管理系统
 	</td>
 </tr>
	<ul >
	<li>
	  <a href="./onetbstaff/addEmp.php">员工信息添加</a>			
	</li>
	<br>
	<br>
	<br>
	<li>
	  <a href="./gongyingshang/gys.php">供应商管理</a>
	</li>
	<br>
	<br>
	<br>
	<li>
	  <a href="./shangping/sp.php">商品管理</a>
	</li>
	<br>
	<br>
	<br>
	<li>
	  <a href="./dingdan/dingdan.php">订单管理</a>
	</li>
	<br>
	<br>
	<br>
	<li>
	  <a href="./php/index.php">退出管理系统</a>
	</li>
	</ul>
</div>
<div class="jili2">
		<div class="rili">
			<br>
			<br>
			<br>
			<br>
			<br>
				<?php
/*
 * Created by PhpStorm.
 * User: admin
 */
header("Content-Type:text/html;charset=utf-8");
date_default_timezone_set("PRC");
$a=@$_GET["a"];
$b=@$_GET["b"];
if($a){
  $a=$a;
}else{
  $a=date('y');
}
if($b){
  $b=$b;
}else{
  $b=date('m');
}
$noe=mktime(0,0,0,$b,1,$a); //获取当前的月的一号
$year=date("Y",$noe); //当前的年
$month=date("m",$noe); //当前的月
$week=date("w",$noe); // 每个月的一号是星期几
$days=date("t",$noe); //每个月的总天数
$day=date("d"); //获取今天是几号
$as=$year-1; //获取上一年的年
$bs=$month-1; //获取上个月
$bss=$month+1; // 获取下个月
$ass=$year+1; //获取下一年
?>
		<table cellpadding="0" cellspacing="0">
	 
   <tr>
	 <th></th>
     <th><a href="?a=<?php echo $as; ?>" rel="external nofollow" rel="external nofollow" ><<上一年</a></th>
     <th><a href="?b=<?php echo $bs; ?>" rel="external nofollow" rel="external nofollow" ><<上个月</a></th>
     <th><?php echo $year."-".$month."-".$day ?></th>
     <th><a href="?b=<?php echo $bss; ?>" rel="external nofollow" rel="external nofollow" >下个月>></a></th>
     <th><a href="?a=<?php echo $ass; ?>" rel="external nofollow" rel="external nofollow" >下一年>></a></th>
	 <th></th>
   </tr>
   <tr>
     <th>星期日</th>
     <th>星期一</th>
     <th>星期二</th>
     <th>星期三</th>
     <th>星期四</th>
     <th>星期五</th>
     <th>星期六</th>
   </tr>
	  <tr>
    <?php
    for($i=0;$i<$week;$i++){
      echo "<td>&nbsp;</td>"; //获取当月一号前面的空格
    }
    for($k=1;$k<=$days;$k++){
      if($k==$day){
        echo "<th>".$k."</th>"; //输出今天是几号
      }else{
        echo "<td></a>&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp;".$k."</td>"; //输出当月天数
      }
      if(($k+$week)%7==0){
        echo "<tr></tr>"; // 一周七天换行
      }
    }
    ?>
  </tr>
 </table>
			<div class="gonggao">
  		   		<h2 class="gg">通知公告</h2>
  		   		<?php
					$sqlstr = "select gonggao,riqi
	             				from gonggao
								order by id";
							$result = mysqli_query($conn,$sqlstr);
							while($row=mysqli_fetch_assoc($result))
			{
							echo "<br/>";
							echo "<br/>";
							echo "<br/>";
							echo "</a>&nbsp;</a>&nbsp;$row[gonggao]";
							echo "<br/>";
							echo "</a>&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp;&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp&nbsp;发布时间:$row[riqi]";
			}
				?>
   		   </div>
		</div>
		
	</div>
</div>
<div style="text-align:center" id="ys">
	<p>如果软件有任何问题，请咨询：</p>
	<p>LinYao 邮箱：1655827624@qq.com</p>
	<p>email:25678@3214</p>
</div>
</body>
</html>