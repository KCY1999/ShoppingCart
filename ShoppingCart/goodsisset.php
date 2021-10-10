<?php

	if(isset($_POST["type"])&&isset($_POST["name"])&&isset($_POST["price"])&&isset($_POST["gender"])
	 &&isset($_POST["color"])&&isset($_POST["mode"]))
	{
		$type=$_POST["type"];
		$name=$_POST["name"];
		$price=$_POST["price"];
		$Gen=$_POST["gender"];
		$color=$_POST["color"];
		$mode=$_POST["mode"];
	}

?>