<html>
<head>
<title>Ku-Shop</title>
<center>
<h2><I><font face = "cursive"><font size = "10"><font color="blue">
Ku-Shop
</font></font></font></I></h2>
</head>
<body>

<p align="right">
<?php
session_start();
if(isset($_SESSION["ID"]))
{
	echo "歡迎!".$_SESSION['ID'];
	echo "<a href='member.php'>會員專區 </a>";
	echo "<a href='shopping_cart.php'> 購物車</a>";
	echo "<a href='logout.php'> 會員登出</a>";
}
else
{
	echo "<a href='login.php'>會員登入 </a>";
	echo "<a href='register.php'> 會員註冊</a>";
}
?>
</p>
<p align="left">
<table border="0">
	<tr>
		<td><font size = "5">男鞋</font></td>
		<td><font size = "5">女鞋</font></td>
	</tr>
	<tr>
		<td><?php echo "<a href='relaxPage.php' style='color:black'>休閒</a>"; ?></td>
		<td><?php echo "<a href='relaxPageF.php' style='color:black'>休閒</a>"; ?></td>
	</tr>
	<tr>
		<td><?php echo "<a href='basketPage.php' style='color:black'>籃球</a>"; ?></td>
		<td><?php echo "<a href='basketPageF.php' style='color:black'>籃球</a>"; ?></td>
	</tr>
	<tr>
		<td><?php echo "<a href='runPage.php' style='color:black'>慢跑</a>"; ?></td>
		<td><?php echo "<a href='runPageF.php' style='color:black'>慢跑</a>"; ?></td>
	</tr>
</table>
</p>

</body>
</html>