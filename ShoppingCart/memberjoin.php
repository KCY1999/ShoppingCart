<?php

if(isset($_POST['purchase'])&&empty($_SESSION['ID']))
{	
	if($_SESSION["ID"]==null)
	{
		$error=1;
		echo "<script>alert('尚未登入，請先登入或加入會員');javascript:location.href='login.php'</script>";
	}
}
if(isset($_POST['purchase'])&&isset($_SESSION['ID']))
{
	mysqli_query($link,"INSERT INTO `shopping_cart`(`ID`,`type`,`code`,`name`,`price`,`gender`,`size`,`color`,`reserve`,`mode`,`img`)
	             VALUES('$ID','$type','$code','$name','$price','$Gen','$size','$color','$Pch','$mode','$img')");
	echo "<script>alert('加入成功');</script>";
	$error=0;	
}

?>