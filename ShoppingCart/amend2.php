<?php

if($error==0&&isset($_POST["Password"])&&isset($_POST["Name"])&&isset($_POST["Sex"])
 &&isset($_POST["Birthday"])&&isset($_POST["Email"])&&isset($_POST["Phone"])&&isset($_POST["Address"]))
{
    mysqli_query($link,$sql1);
	echo "<script>alert('修改成功');javascript:location.href='member_manage.php'</script>";

}
elseif($error==1&&isset($_POST["Password"])&&isset($_POST["Name"])&&isset($_POST["Sex"])&&isset($_POST["Birthday"])
                &&isset($_POST["Email"])&&isset($_POST["Phone"])&&isset($_POST["Address"]))
{
	echo"<br>"."輸入錯誤";
}

?>