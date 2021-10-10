<?php

	if(isset($_POST["Password"])&&$_POST["Birthday"]&&$_POST["Email"]
           &&$_POST["Phone"]&&$_POST["Address"] == 'update')
	{	
 		$newPW = $_POST["Password"];
  	  	$newB = $_POST["Birthday"];
  	  	$newE = $_POST["Email"];
  	  	$newPH = $_POST["Phone"];
   	  	$newA = $_POST["Address"];

   	  	$sql1 = "UPDATE memberdata SET Password = '$newPW', Birthday = '$newB', Email = '$newE'
	 	   	           Phone = 'newPH',Address = 'newA' WHERE ID = $ID";
			   
  	 	mysqli_query($link,$sql1);
 	}
	
?>