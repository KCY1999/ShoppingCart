<html>
<head>
<title>會員管理</title>
<center>
<h2><I><font face = "cursive"><font size = "10"><font color="brown">
會員管理
</font></font></font></I></h2>
</head>

<body>
<form method="POST">
<?php

	include "connect.php";
	$error=0;

?>
    
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
    
<table border="1" align="center">
	
	<tr>
		<td>帳號</td>
    	<td><input type="text" required name="ID" value = "<?php if(isset($_POST['ID'])) {echo $_POST['ID'];}?>"></td>
		<td>	
		<?php
	
		if(isset($_POST["ID"])&&(!preg_match("/^(([@]+[?]+)||([?]+[@]+))*$/i",$_POST["ID"])))
		{
			echo"管理者帳號請包含'@'以及'?'字符";
			$error=1;
		}	
	
		?>	
		</td>
	</tr>
	
	<tr>
    	<td>密碼</td>
    	<td><input type="password" required name="Password" value= "<?php if(isset($_POST['Password'])) {echo $_POST['Password'];}?>"></td>
    </tr>
	
	<tr>
    	<td>確認密碼</td>
        <td><input type="password" required name="Confirm"></td>
		<td>
		<?php	

			if(isset($_POST["Confirm"])&&$confirm!=$PW){echo "密碼不一致";$error=1;}
	
		?>
		</td>
    </tr>
	
	<tr>
		<td>姓名</td>
		<td><input type="text" required name="Name" value= "<?php if(isset($_POST['Name'])) {echo $_POST['Name'];}?>"></td>
	</tr>
	
	<tr>
		<td>性別</td>
		<td><input type="radio" required name="Sex" value="男">男
	        <input type="radio" required name="Sex" value="女">女
        </td>
    </tr>
	
	<tr>
    	<td>生日</td>
        <td><input type="date" required name="Birthday" value= "<?php if(isset($_POST['Birthday'])) {echo $_POST['Birthday'];}?>"></td>
    </tr>
	
	<tr>
    	<td>信箱</td>
        <td><input type="email" required name="Email" value= "<?php if(isset($_POST['Email'])) {echo $_POST['Email'];}?>"></td>		
    </tr>
	
	<tr>
    	<td>手機</td>
        <td><input type="number"  required name="Phone" value= "<?php if(isset($_POST['Phone'])) {echo $_POST['Phone'];}?>"></td>
		<td>
<?php

	if(isset($_POST["Phone"])&&(!preg_match('/^09([0-9]{8})$/',$_POST["Phone"]))){echo "號碼須輸入包含09開頭共十碼";$error=1;}	
	
?>
		</td>
    </tr>
	
	<tr>
    	<td>地址</td>
        <td><input type="text" required name="Address" value= "<?php if(isset($_POST['Address'])) {echo $_POST['Address'];}?>"></td>
    </tr>
	
</table>
<center>
		
<?php

if($error==0&&isset($_POST["ID"])&&isset($_POST["Password"])&&isset($_POST["Name"])&&isset($_POST["Sex"])
 &&isset($_POST["Birthday"])&&isset($_POST["Email"])&&isset($_POST["Phone"])&&isset($_POST["Address"])
 &&isset($_POST["Confirm"]))
{
    mysqli_query($link,"INSERT INTO memberdata(ID,Password,Name,Sex,Birthday,Email,Phone,Address)
	             VALUES('$ID','$PW','$name','$sex','$bir','$email','$phone','$ADR')");
	echo "<script>alert('註冊成功');javascript:location.href='management.php'</script>";
}
elseif($error==1&&isset($_POST["ID"])&&isset($_POST["Password"])&&isset($_POST["Name"])&&isset($_POST["Sex"])
          &&isset($_POST["Birthday"])&&isset($_POST["Email"])&&isset($_POST["Phone"])&&isset($_POST["Address"])
          &&isset($_POST["Confirm"]))
{
	echo"<br>"."輸入錯誤";
}

?>
<input type="submit" value="輸入" style="font-size:15px;width:100px;height:30px">
<input type="reset" value="清除" style="font-size:15px;width:100px;height:30px">
</form>
<br><br><br>

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

<table border = 1>
	<tr>
		<td>帳號</td>
        <td>密碼</td>
        <td>姓名</td>
        <td>性別</td>
		<td>生日</td>
        <td>信箱</td>
        <td>手機</td>
        <td>地址</td>
        <td><center>選項</center></td>
	</tr>
		<?php

		$sql = "SELECT ID,Password,Name,Sex,Birthday,Email,Phone,Address FROM memberdata";
		$data = mysqli_query($link,$sql);
		if(mysqli_num_rows($data)>0)
   		 {
	  		  while($rd = mysqli_fetch_assoc($data))
	   		 {
					echo("<tr>".
					            "<td>".$rd["ID"]."</td>".
					            "<td>".$rd["Password"]."</td>".
						        "<td>".$rd["Name"]."</td>".
								"<td>".$rd["Sex"]."</td>".
							    "<td>".$rd["Birthday"]."</td>".
								"<td>".$rd["Email"]."</td>".
							    "<td>".$rd["Phone"]."</td>".
								"<td>".$rd["Address"]."</td>".
								"<td><a href='update.php?account=".$rd['ID']."'>修改"."|".
								"<a href='delete.php?account=".$rd['ID']."'style='color:red'>刪除</td>".
						 "</tr>");
	   		 }
			}
			else
			{
			echo "無資料";	
			}
			mysqli_close($link);
	
		?>
</table>
<input type="button" value ="管理者頁面" onclick = "location.href='management.php'" style="font-size:15px;width:100px;height:30px">
</body>
</html>