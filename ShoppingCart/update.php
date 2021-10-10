<html>
<head>
<title>修改資料</title>
</head>

<body>
<form method="POST">
<?php

include "connect.php";
$error = 0;
$ID1 = $_GET['account'];
$sql = "SELECT ID,Password,Name,Sex,Birthday,Email,Phone,Address FROM memberdata";
$data = mysqli_query($link,$sql);
while($rd = mysqli_fetch_assoc($data))
{
	if($ID1==$rd['ID'])
	{
		$PW=$rd["Password"];
		$name=$rd["Name"];
		$sex=$rd["Sex"];
		$bir=$rd["Birthday"];
		$email=$rd["Email"];
		$phone=$rd["Phone"];
		$ADR=$rd["Address"];
	}	
}

?>
<table border="1" align="center">
	
	<tr>
    	<td>帳號</td>
    	<td><?php echo $ID1;?></td>
	</tr>	
       
	<tr>
		<td>密碼</td>
		<td><?php echo "<input type='text' name='Password' value='$PW'>"?></td>
	</tr>
	
	<tr>
    	<td>姓名</td>
        <td><?php echo "<input type='text' name='Name' value= '$name'>"?></td>
    </tr>
	
	<tr>
    	<td>性別</td>
        <td><input type="radio" required name="Sex" value="男">男
	        <input type="radio" required name="Sex" value="女">女
        </td>
    </tr>
	
	<tr>
    	<td>生日</td>
        <td><?php echo "<input type='date' name='Birthday' value= '$bir'>"?></td>
    </tr>
	
	<tr>
   		<td>信箱</td>
        <td><?php echo "<input type='email' name='Email' value= '$email'>"?></td>
    </tr>
	
	<tr>
    	<td>手機</td>
        <td><?php echo "<input type='number' maxlength='10' name='Phone' value= '$phone'>"?></td>
    </tr>
	
	<tr>
    	<td>地址</td>
        <td><?php echo "<input type='text' name='Address' value= '$ADR'>"?></td>
    </tr>	
</table><center>
<input type="submit" value="輸入" style="font-size:15px;width:100px;height:30px">
<input type="reset" value="清除" style="font-size:15px;width:100px;height:30px">
<input type="button" value ="返回首頁" onclick = "location.href='Home_Page.php'" style="font-size:15px;width:100px;height:30px">
</form>

<?php

	include "check.php";

?>

<?php

	include"amend2.php";

?>

</body>
</html>