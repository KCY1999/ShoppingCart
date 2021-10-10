<?php

$server="localhost";
$username="root";
$password="";
$database="ku-shop";	
$link = mysqli_connect($server,$username,$password,$database);

if(!$link)
{
	echo "連接失敗";
}
else
{
	mysqli_query($link,"set names utf8");
}

?>
