<?php

	if(isset($_POST["ID"])&&isset($_POST["Password"])&&isset($_POST["Name"])&&isset($_POST["Sex"])
 	 &&isset($_POST["Birthday"])&&isset($_POST["Email"])&&isset($_POST["Phone"])&&isset($_POST["Address"])
	 &&isset($_POST["Confirm"]))
	{
		$ID=$_POST["ID"];
		$PW=$_POST["Password"];
		$name=$_POST["Name"];
		$sex=$_POST["Sex"];
		$bir=$_POST["Birthday"];
		$email=$_POST["Email"];
		$phone=$_POST["Phone"];
		$ADR=$_POST["Address"];
		$confirm=$_POST["Confirm"];
	}
	
?>