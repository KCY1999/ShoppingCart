<?php

if($error==0&&isset($_POST["type"])&&isset($_POST["name"])&&isset($_POST["price"])&&isset($_POST["gender"])
            &&isset($_POST["color"])&&isset($_POST["mode"])&&($_FILES['img']['name']))
{
	include "load2.php";
    mysqli_query($link,"INSERT INTO `products`(`type`, `name`, `price`, `gender`, `color`, `mode`, `img`)
	                                   VALUES ('$type','$name','$price','$Gen','$color','$mode','$img')");
									   
	echo "<script>alert('成功上架');javascript:location.href='reserve.php'</script>";
}

?>