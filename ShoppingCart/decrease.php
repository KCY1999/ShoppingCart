<html>
<head>
<title>無標題文件</title>
</head>

<body>
<form method="POST">
<?php

include "connect.php";
$error = 0;
$code8=$_GET['cart2'];
$sql = "SELECT * FROM shopping_cart";
$data = mysqli_query($link,$sql);
while($rd = mysqli_fetch_assoc($data))
{
	if($code8==$rd['code'])
	{
		$ID=$rd["ID"];
		$type=$rd["type"];
		$name=$rd["name"];
		$price=$rd["price"];
		$Gen=$rd["gender"];
		$size=$rd["size"];
		$color=$rd["color"];
		$Res=$rd["reserve"]-1;
		$mode=$rd["mode"];
		$img=$rd["img"];
		echo "<script>alert('成功減少一件');javascript:location.href='shopping_cart.php'</script>";	
		$sql1 = "UPDATE `shopping_cart` SET `ID`='$ID',`type`='$type',`name`='$name',`price`='$price',`gender`='$Gen',
	`size`='$size',`color`='$color',`reserve`='$Res',`mode`='$mode',`img`='$img' WHERE `code`='$code8'";
	
	mysqli_query($link,$sql1);
	}	
}

?>

</body>
</html>