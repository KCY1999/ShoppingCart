<html>
<head>
<title>刪除</title>
</head>

<body>
<form method="POST">

<?php

include "connect.php";
$error = 0;
$code6 = $_GET['cart'];
$sql = "SELECT * FROM shopping_cart";
$data = mysqli_query($link,$sql);
$sql1 = "DELETE FROM `shopping_cart` WHERE `code`='$code6'";
mysqli_query($link,$sql1);
echo "<script>alert('商品已移除');javascript:location.href='shopping_cart.php'</script>";

?>

</form>
</body>
</html>