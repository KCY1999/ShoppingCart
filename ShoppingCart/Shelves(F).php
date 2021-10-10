<html>
<head>
<title>已經下架</title>
<center>
<h2><I><font face = "cursive"><font size = "10"><font color="blue">
已下架商品
</font></font></font></I></h2>
</head>

<body>
<p align="right">
<input type="button" value ="返回商品管理" onclick = "location.href='product_manage.php'" style="font-size:15px;width:100px;height:30px">
</p>
<?php

	include "connect.php";
	$error=0;

?>

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
        <td><center>選項</center></td>
	</tr>
<?php

	include "up.php";
	
?>
</table>
</body>
</html>