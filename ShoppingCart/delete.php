<head>
<title>無標題文件</title>
</head>
<body>
<form method = "POST">
<?php

include "connect.php";
$error = 0;
$ID2 = $_GET['account'];
$sql = "SELECT ID,Password,Name,Sex,Birthday,Email,Phone,Address FROM memberdata";
$data = mysqli_query($link,$sql);
$sql2 = "DELETE FROM `memberdata` WHERE `ID`='$ID2'";
mysqli_query($link,$sql2);
$sql3 = "SELECT * FROM shoppin_cart";
$data = mysqli_query($link,$sql3);
$sql4 = "DELETE FROM `shopping_cart` WHERE `ID`='$ID2'";
mysqli_query($link,$sql4);
echo "<script>alert('刪除成功');javascript:location.href='member_manage.php'</script>";

?>
</body>
</html>