<html>
<head>
<title>購物網</title>
<h1><I><font face = "cursive"><font size = "7"><font color="blue">
Ku-Shop------------------
<font size = "7"><font color="green">
會員專區
</font></font>
------------------------
</font></font></font></I></h1>

</head>

<body>
<form action="member.php" method="POST">

<?php

	include "connect.php";
	$error=0;

?>

<?php

	include "memberdetail.php";
	
?>

<?php

	include "memberupdate.php";
	
?>
 
<p align="right">
<input type="button" value ="修改資料" onclick = "location.href='modify.php'" style="font-size:15px;width:90px;height:30px">
<input type="button" value ="購物車" onclick = "location.href='shopping_cart.php'" style="font-size:15px;width:90px;height:30px">
<input type="button" value ="訂單狀況" onclick = "location.href='member_order.php'" style="font-size:15px;width:90px;height:30px">
</p>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><center>
<input type="button" value ="返回首頁" onclick = "location.href='Home_Page.php'" style="font-size:15px;width:90px;height:30px">

</body>
</html>