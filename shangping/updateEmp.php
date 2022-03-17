<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>修改数据</title>
<script>
	//删除确认
	function del()
	{
 		if(window.confirm('你是否真的要修改这条数据?'))
		{
		  return true;
		}else{
			   return false;
		     }
		
	}
</script>
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
 		</a>&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp;</a>&nbsp;商品信息修改
 	</td>
 </tr>
	<ul >
	<li>
	  <a href="sp.php">浏览商品信息</a>			
	</li>
	<br>
	<br>
	<br>
	<li>
	  <a href="../php/index.php">退出管理系统</a>
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
 				<?php
    include_once("conn.php");//包含数据库连接文件
  	if($_GET['action'] == "update")
	{
		//判断地址栏参数action的值是否等于update
		$sqlstr = "select CommodityNo,CommodityName,Commoditymoney,Commoditytype,Commodityimg,Commodityintroduce,Commodityweight
	             from tbcommodity
			 where CommodityNo=".$_GET['id'];//定义查询语句
		$result = mysqli_query($conn,$sqlstr);//执行查询语句
		$rows = mysqli_fetch_row($result);//将查询结果返回为数组
?>
	  <form name="intFrom" method="post" action="updateAction.php">
		<table width="870" height="200"  border="0" cellpadding="0" cellspacing="0" class="xiugai">
          <tr align="center" valign="middle">
		  <td width="30%" class="c_td">&nbsp;</td>
            <td width="10%" align="right" class="c_td">&nbsp;</td>
            <td width="30%" class="c_td">&nbsp;</td>
	<td width="30%" class="c_td">&nbsp;</td>
          </tr>
          <tr>
		  <td class="c_td">&nbsp;</td>
            <td align="right" valign="middle" class="c_td">商品名称：</td>
            <td align="center" valign="middle" class="c_td">
                <input type="text" name="jobname" value="<?php echo $rows[1] ?>"></td>
		<td class="c_td">&nbsp;</td>
          </tr>
          
          <tr>
		  <td class="c_td">&nbsp;</td>
            <td align="right" valign="middle" class="c_td">价格：</td>
            <td align="center" valign="middle" class="c_td">
                <input type="text" name="missalary" value="<?php echo $rows[2] ?>"></td>
		<td class="c_td">&nbsp;</td>
          </tr>
          
          <tr>
		  <td class="c_td">&nbsp;</td>
            <td align="right" valign="middle" class="c_td">类型：</td>
            <td align="center" valign="middle" class="c_td">
                <input type="text" name="a" value="<?php echo $rows[3] ?>"></td>
            <td class="c_td">&nbsp;</td>
	</tr>
 	  
 	  
  	  
	  	  <tr>
		  <td class="c_td">&nbsp;</td>
            <td align="right" valign="middle" class="c_td">图片链接：</td>
            <td align="center" valign="middle" class="c_td">
                <input type="text" name="b" value="<?php echo $rows[4] ?>"></td>
            <td class="c_td">&nbsp;</td>
	</tr>
  
  <tr>
		  <td class="c_td">&nbsp;</td>
            <td align="right" valign="middle" class="c_td">介绍：</td>
            <td align="center" valign="middle" class="c_td">
                <input type="text" name="c" value="<?php echo $rows[5] ?>"></td>
            <td class="c_td">&nbsp;</td>
	</tr>
	
  <tr>
		  <td class="c_td">&nbsp;</td>
            <td align="right" valign="middle" class="c_td">重量：</td>
            <td align="center" valign="middle" class="c_td">
                <input type="text" name="d" value="<?php echo $rows[6] ?>"></td>
            <td class="c_td">&nbsp;</td>
	</tr>
	  
		  <tr align="center" valign="middle">
		  <td class="c_td">&nbsp;</td>
            <td colspan="2" class="c_td">
			<input type="hidden" name="action" value="update">
			<input type="hidden" name="id" value="<?php echo $rows[0] ?>">
			<input class="tianjia" type="submit" name="Submit" value="修改" onclick = "return del();">
              			<input type="reset" name="reset" value="重置"></td>
           <td class="c_td">&nbsp;</td>
	      </tr>
        </table>
      </form>
<?php
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
