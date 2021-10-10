<?php

	if(isset($_POST["type"])&&isset($_POST["code"])&&isset($_POST["name"])&&isset($_POST["price"])&&isset($_POST["gender"])
   	 &&isset($_POST["size"])&&isset($_POST["color"])&&isset($_POST["reserve"])&&isset($_POST["mode"]))
	{
		$type=$_POST["type"];
		$code=$_POST["code"];
		$name=$_POST["name"];
		$price=$_POST["price"];
		$Gen=$_POST["gender"];
		$size=$_POST["size"];
		$color=$_POST["color"];
		$Res=$_POST["reserve"];
		$mode=$_POST["mode"];
	}

?>