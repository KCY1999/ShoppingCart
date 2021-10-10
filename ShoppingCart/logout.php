<html>
<head>
<title>登出</title>
</head>

<body>
<?php

session_start();
$_SESSION["ID"]=null;
$_SESSION["Password"]=null;
header("location:Home_Page.php");

?>
</body>
</html>