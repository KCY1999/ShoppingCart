<?php

$sql = "SELECT `ID` FROM `memberdata`";
$data = mysqli_query($link,$sql);
if(mysqli_num_rows($data)>0)
{
	while($rd = mysqli_fetch_assoc($data))
	{
		if(isset($_POST["ID"])&&$ID==$rd["ID"])
		{
			echo"<br>"."此帳號已被使用";
			$error = 1;
		}
	}
}

?>