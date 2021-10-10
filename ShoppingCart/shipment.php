<html>
<head>
<title>未出貨</title>
</head>

<body>
<form method="POST">

<?php

include "connect.php";
$error = 0;
$G = $_GET['goods'];
$sql = "SELECT * FROM `order`";
$sql1 = "UPDATE `order` SET `status`='已出貨' WHERE `ID`='$G'";
mysqli_query($link,$sql1);
echo "<script>alert('成功更改出貨狀態');javascript:location.href='order_manage.php'</script>";

?>

</body>
</html>