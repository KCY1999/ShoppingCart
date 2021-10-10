<?php
include "connect.php";

$ID=$_POST["ID"];
$sql="SELECT * FROM memberdata WHERE ID='$ID'";
$data = mysqli_query($link,$sql);
$rd = mysqli_num_rows($data);
$Nregister = NULL;
if($rd>0)
{
 $Nregister=true;	
}
else
{
 $Nregister=false;	
}
echo json_encode($Nregister);
?>