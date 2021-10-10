<html>
<head>
<title>無標題文件</title>
</head>

<body>
<?php

include "connect.php";
$error = 0;
$code4 = $_GET['number2'];
$sql = "SELECT type,code,price,name,gender,size,color,reserve,mode,img FROM products";
$data = mysqli_query($link,$sql);
$sql2 = "DELETE FROM `products` WHERE `code`='$code4'";
mysqli_query($link,$sql2);
echo "<script>alert('刪除成功');javascript:location.href='reserve.php'</script>";

?>
</body>
</html>