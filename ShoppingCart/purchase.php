<html>
<head>
<title>訂單</title>
<center>
<h2><I><font face = "cursive"><font size = "10"><font color="brown">
訂單明細
</font></font></font></I></h2>
</head>

<body>


<form method="POST">

<?php

include "connect.php";
session_start();

?>

<p align="right">
<?php

if(isset($_SESSION["ID"]))
{
	echo "歡迎!".$_SESSION['ID'];
	echo "<a href='member.php'>會員專區 </a>";
	echo "<a href='logout.php'> 會員登出</a>";
}

?>
</p>

<table border=1 align=center>
	<tr>
   	    <td>商品圖片</td>
        <td>商品名稱</td>
        <td>購買數量</td>
        <td>商品價格</td>
        <td>出貨狀態</td>
        
<?php

	include "buy.php";

?>
    </tr>
</table>
<a href='shopping_cart.php'> 返回購物車</a>
</form>
</body>
</html>