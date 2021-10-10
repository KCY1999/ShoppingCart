<html>
<head>
<title>無標題文件</title>
</head>

<body>
<form method="POST">

<?php

include "connect.php";
$error = 0;
$code1 = $_GET['number'];
$sql = "SELECT type,code,name,price,gender,size,color,reserve,mode,img FROM products";
$sql1 = "UPDATE `products` SET `mode`='下架' WHERE `code`='$code1'";
mysqli_query($link,$sql1);
$sql2 = "SELECT * FROM shopping_cart";
$sql3 = "DELETE FROM `shopping_cart` WHERE `code`='$code1'";
mysqli_query($link,$sql3);
echo "<script>alert('成功下架');javascript:location.href='Shelves(O).php'</script>";

?>

</body>
</html>