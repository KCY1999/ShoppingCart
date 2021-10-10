<html>
<head>
<title>庫存</title>
<center>
<h2><I><font face = "cursive"><font size = "10"><font color="brown">
商品庫存
</font></font></font></I></h2>
</head>

<body>
<?php

	include "connect.php";
	$error=0;

?>
<p align="right">
<input type="button" value ="返回商品管理" onclick = "location.href='product_manage.php'" style="font-size:15px;width:100px;height:30px">
</p>

<center>
<table border = 1>
	<tr>
		<td>類型</td>
        <td>編號</td>
        <td>名稱</td>
        <td>價格</td>
        <td>性別</td>
		<td>尺寸</td>
        <td>顏色</td>
        <td>庫存</td>
        <td>圖片</td>
        <td>狀態</td>
        <td>選項</td>
	</tr>
<?php

	include "reservedetail.php";

?>
</table>
</body>
</html>