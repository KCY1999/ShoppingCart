<?php

if($error==0&&isset($_POST["ID"])&&isset($_POST["Password"])&&isset($_POST["Name"])&&isset($_POST["Sex"])
 &&isset($_POST["Birthday"])&&isset($_POST["Email"])&&isset($_POST["Phone"])&&isset($_POST["Address"])
 &&isset($_POST["Confirm"]))
{
    mysqli_query($link,"INSERT INTO `memberdata`(`ID`,`Password`,`Name`,`Sex`,`Birthday`,`Email`,`Phone`,`Address`)
	             VALUES('$ID','$PW','$name','$sex','$bir','$email','$phone','$ADR')");
	echo "<script>alert('註冊成功');javascript:location.href='login.php'</script>";
}
elseif($error==1&&isset($_POST["ID"])&&isset($_POST["Password"])&&isset($_POST["Name"])&&isset($_POST["Sex"])
          &&isset($_POST["Birthday"])&&isset($_POST["Email"])&&isset($_POST["Phone"])&&isset($_POST["Address"])
          &&isset($_POST["Confirm"]))
{
	echo"<br>"."輸入錯誤";
}

?>