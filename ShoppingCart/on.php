<html>
<head>
<title>無標題文件</title>
</head>

<body>
<form method="POST">

<?php

include "connect.php";
$error = 0;
$code2 = $_GET['number1'];
$sql = "SELECT type,code,,name,price,gender,size,color,reserve,mode,img FROM products";
$data = mysqli_query($link,$sql);
$sql1 = "UPDATE `products` SET `mode`='上架' WHERE `code`='$code2'";
mysqli_query($link,$sql1);
echo "<script>alert('成功上架');javascript:location.href='Shelves(F).php'</script>";

?>

</body>
</html>