<?php
	
$sql = "SELECT ID,Password FROM memberdata";
$data = mysqli_query($link,$sql);
if(mysqli_num_rows($data)>0)
{
	while($rd = mysqli_fetch_assoc($data))
	{
		if(isset($_POST["ID"])&&$ID==$rd["ID"])
		{
			if(isset($_POST["Password"])&&$PW==$rd["Password"])
			{
				$_SESSION["ID"]=$ID;
				$_SESSION["Password"]=$PW;						
				echo "<script>alert('登入成功');javascrip:location.href='Home_Page.php';</script>";
				echo "登入成功";
			}
			elseif(isset($_POST["Password"])&&$PW!=$rd["Password"])
			{
				echo"密碼錯誤";
				$error=1;
				break;
			}
		}
	}
}

?>