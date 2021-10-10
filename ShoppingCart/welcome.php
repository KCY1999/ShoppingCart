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