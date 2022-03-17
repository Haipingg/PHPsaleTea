function queding()
  {
	  if (order.rel.value == "")
            {
             alert ("请输入联系方式!");
             return false;
             }
		
        if (order.dizhi.value == "")
             {
               alert("请输入地址!");
            return false;
             }
		if (order.zhifu.value == "")
             {
               alert("请选择支付方式!");
            return false;
             }
     if (confirm("你确认购买这些物品吗？"))
	 {
        alert("下单成功！");
		location='index.php';
     }else{
           alert("继续购物吧")
          }
	  
	 
}// JavaScript Document