<?php

if(isset($_POST["type"])&&$_POST["name"]&&$_POST["price"]&&$_POST["gender"]&&$_POST["size"]
       &&$_POST["color"]&&$_POST["reserve"]&&$_POST["mode"])
{

	$type=$_POST["type"];
	$name=$_POST["name"];
	$price=$_POST["price"];
	$Gen=$_POST["gender"];
	$size=$_POST["size"];
	$color=$_POST["color"];
	$Res=$_POST["reserve"];
	$mode=$_POST["mode"];
	
    $sql1 = "UPDATE `products` SET `type`='$type',`name`='$name',`price`='$price',`gender`='$Gen',
	`size`='$size',`color`='$color',`reserve`='$Res',`mode`='$mode',`img`='$img' WHERE `code`='$code3'";
	
	mysqli_query($link,$sql1);
	echo "<script>alert('修改成功');javascript:location.href='product_manage.php'</script>";	
}
	   
?>