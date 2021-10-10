<head>
<title>會員註冊</title>
<center>
<h2><I><font face = "cursive"><font size = "10"><font color="red">
修改會員資料
</font></font></font></I></h2>
</head>

<body>
<form action = "modify.php" method="POST">
<?php

include "connect.php";
$error=0;

?>

<?php

session_start();
$ID=$_SESSION["ID"];	
$sql = "SELECT ID,Password,Name,Sex,Birthday,Email,Phone,Address FROM memberdata";
$data = mysqli_query($link,$sql);
while($rd = mysqli_fetch_assoc($data))
{
	if($ID==$rd['ID'])
	{
		$PW2=$rd["Password"];
		$name2=$rd["Name"];
		$sex2=$rd["Sex"];
		$bir2=$rd["Birthday"];
		$email2=$rd["Email"];
		$phone2=$rd["Phone"];
		$ADR2=$rd["Address"];
	}	
}
	
if(isset($_POST["Password"])&&isset($_POST["Name"])&&isset($_POST["Sex"])
 &&isset($_POST["Birthday"])&&isset($_POST["Email"])&&isset($_POST["Phone"])
 &&isset($_POST["Address"])&&isset($_POST["Confirm"])&&isset($_POST["Check"]))
{
	$PW=$_POST["Password"];
	$name=$_POST["Name"];
	$sex=$_POST["Sex"];
	$bir=$_POST["Birthday"];
    $email=$_POST["Email"];
	$phone=$_POST["Phone"];
	$ADR=$_POST["Address"];
	$confirm=$_POST["Confirm"];
	$ck=$_POST["Check"];
}
	
?>

<table border="1" align="center">
	
	<tr>
    	<td>帳號</td>
    	    	<td><?php echo $_SESSION["ID"]; ?></td>
	</tr>	
       
    <tr>
    	<td>原先密碼</td>
        <td><input type="password" required name="Check"></td>
		<td>
<?php	

	if(isset($_POST["Check"])&&$ck!=$PW2){echo "密碼錯誤";$error=1;}
	
?>
		</td>
    </tr>
       
	<tr>
		<td>新密碼</td>
		<td><input type="password" required name="Password" value= "<?php if(isset($_POST['Password'])) {echo $_POST['Password'];}?>"></td>
		<td>
<?php	

	if(isset($_POST["Password"])&&(strlen($_POST["Password"])<8||strlen($_POST["Password"])>16||(!preg_match(
	"/^(([a-z]+[A-Z]+[0-9]+)||([0-9]+[a-z]+[A-Z]+))[a-zA-Z0-9]*$/i",$_POST["Password"])))){echo "密碼必須由八至十六位英文與數字組合";$error=1;}
	if(isset($_POST["Password"])&&$PW!=$confirm){echo "密碼不一致";$error=1;}
		
?>
		</td>
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
        <td><?php echo "<input type='text' name='Name' value= '$name2'>"?></td>
    </tr>
	
	<tr>
    	<td>性別</td>
        <td><input type="radio" required name="Sex" value="男">男
	        <input type="radio" required name="Sex" value="女">女
        </td>
    </tr>
	
	<tr>
    	<td>生日</td>
        <td><?php echo "<input type='date' name='Birthday' value= '$bir2'>"?></td>
    </tr>
	
	<tr>
   		<td>信箱</td>
        <td><?php echo "<input type='email' name='Email' value= '$email2'>"?></td>
    </tr>
	
	<tr>
    	<td>手機</td>
        <td><?php echo "<input type='number' maxlength='10' name='Phone' value= '$phone2'>"?></td>
		<td>
<?php

	if(isset($_POST["Phone"])&&(!preg_match('/^09([0-9]{8})$/',$_POST["Phone"]))){echo "號碼須輸入包含09開頭共十碼";$error=1;}	
	
?>
		</td>
    </tr>
	
	<tr>
    	<td>地址</td>
        <td><?php echo "<input type='text' name='Address' value= '$ADR2'>"?></td>
    </tr>
	
</table><center>
<input type="submit" value="輸入" style="font-size:15px;width:100px;height:30px">
<input type="reset" value="清除" style="font-size:15px;width:100px;height:30px">
<input type="button" value ="返回首頁" onclick = "location.href='Home_Page.php'" style="font-size:15px;width:100px;height:30px">
</form>

<?php

if($error==0&&isset($_POST["Password"])&&$_POST["Confirm"]&&$_POST["Birthday"]&&$_POST["Email"]
            &&$_POST["Name"]&&$_POST["Phone"]&&$_POST["Address"])
{
	$ID = $_SESSION["ID"];
    $newPW = $_POST["Password"];
	$newN = $_POST["Name"];
    $newB = $_POST["Birthday"];
    $newE = $_POST["Email"];
    $newPH = $_POST["Phone"];
    $newA = $_POST["Address"];

    $sql1 = "UPDATE `memberdata` SET `Password`='$newPW',`Name`='$newN',`Birthday`='$newB',
	`Email`='$newE',`Phone`='$newPH',`Address`='$newA' WHERE `ID`='$ID'";
    mysqli_query($link,$sql1);
 } 
 
?>

<?php

if($error==0&&isset($_POST["Password"])&&isset($_POST["Name"])&&isset($_POST["Sex"])
 &&isset($_POST["Birthday"])&&isset($_POST["Email"])&&isset($_POST["Phone"])&&isset($_POST["Address"])
 &&isset($_POST["Confirm"]))
{
    mysqli_query($link,$sql1);
	echo "<script>alert('修改成功');javascript:location.href='logout.php'</script>";
}
elseif($error==1&&isset($_POST["Password"])&&isset($_POST["Name"])&&isset($_POST["Sex"])&&isset($_POST["Birthday"])
                &&isset($_POST["Email"])&&isset($_POST["Phone"])&&isset($_POST["Address"])&&isset($_POST["Confirm"]))
{
	echo"<br>"."輸入錯誤";
}

?>
</body>
</html>