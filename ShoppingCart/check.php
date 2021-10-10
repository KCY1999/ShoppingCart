<?php

if($error==0&&isset($_POST["Password"])&&$_POST["Sex"]&&$_POST["Birthday"]&&$_POST["Email"]
            &&$_POST["Name"]&&$_POST["Phone"]&&$_POST["Address"])
{

    $newPW = $_POST["Password"];
	$newN = $_POST["Name"];
	$newS= $_POST["Sex"];
    $newB = $_POST["Birthday"];
    $newE = $_POST["Email"];
    $newPH = $_POST["Phone"];
    $newA = $_POST["Address"];

    $sql1 = "UPDATE `memberdata` SET `Password`='$newPW',`Name`='$newN',`Sex`='$newS',`Birthday`='$newB',
	`Email`='$newE',`Phone`='$newPH',`Address`='$newA' WHERE `ID`='$ID1'";
			   
    mysqli_query($link,$sql1);
 } 
 
?>