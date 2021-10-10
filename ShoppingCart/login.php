<html>
<head>
<center>
<title>會員登入</title>
<h2><I><font face = "cursive"><font size = "10"><font color="red">
會員登入
</font></font></font></I></h2>
</head>

<body>
<form action="login.php" method="POST">

<?php

	include "connect.php";
	$error=0;
	session_start();

?>

<?php

	include "IDPW.php";

?>

<table border="1" align="center">
	<tr>
    	<td><input type="text" required name="ID" placeholder="請輸入您的帳號" value= "<?php if(isset($_POST['ID'])) {echo $_POST['ID'];}?>"></td>
    </tr>
		<td><input type="password" required name="Password" placeholder="請輸入您的密碼"></td>

<?php

	if(isset($_POST["ID"])&&$ID=="~!@#$%^&*?"&&($_POST["Password"])&&$PW=="~!@#$%^&*")
	{
		header('Location:management.php');
	}

?>

<?php
	
	include "iflogin.php";

?>

</table>
<input type="submit" value="登入" style="font-size:15px;width:100px;height:30px">
<input type="submit" value="註冊" onclick = "location.href='register.php'" style="font-size:15px;width:100px;height:30px">
<input type="button" value ="返回首頁" onclick = "location.href='Home_Page.php'" style="font-size:15px;width:100px;height:30px">
</body>
</html>