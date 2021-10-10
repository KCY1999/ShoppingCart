<html>
<head>
<title>已出貨</title>
<center>
<h2><I><font face = "cursive"><font size = "7"><font color="green">
已出貨
</font></font></font></I></h2>
</head>

<body>
<p align="right">
</p>
<input type="button" value ="未出貨訂單" onclick = "location.href='order_manage.php'" style="font-size:15px;width:100px;height:30px">
<?php

	include "connect.php";
	$error=0;

?>

<table border = 1>
	<tr>
    	<td>用戶</td>
		<td>類型</td>
        <td>編號</td>
        <td>名稱</td>
        <td>單格</td>
        <td>性別</td>
		<td>尺寸</td>
        <td>顏色</td>
        <td>庫存</td>
        <td>總價</td>
        <td>圖片</td>
        <td>狀態</td>
	</tr>
<?php

	include "goods.php";

?>
</table><br>
<input type="button" value ="返回管理首頁" onclick = "location.href='management.php'" style="font-size:15px;width:100px;height:30px">
</body>
</html>