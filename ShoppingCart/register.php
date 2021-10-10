<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>會員註冊</title>
<center>
<h2><I><font face = "cursive"><font size = "10"><font color="red">
會員註冊
</font></font></font></I></h2>
</head>
<body>
<style>
.error{
	border:thin solid #F00;
}
.success{
	border:thin solid #0F0;
}
</style>

<form action="register.php" method="POST">

<?php

	include "connect.php";
	$error=0;
	
?>

<?php

	include "isset.php";
	
?>

<?php

	include "ifIDuse.php";

?>

<table border="1" align="center">
	
	<tr>
		<td>帳號</td>
    	<td>
<div class="Main">
	<div style="width:350px;height:29px; float:left;">
    	<div class="a" style="float:left">
        <input type="text" id="ID" name="ID"/>
    	</div>
    </div>
</div>
        </td>
		<td>	
		<?php
	
			if(isset($_POST["ID"])&&(strlen($_POST["ID"])<8||strlen($_POST["ID"])>16)){echo "帳號必須由八至十六個字組合";$error=1;}	
	
		?>	
		</td>
	</tr>
	
	<tr>
    	<td>密碼</td>
    	<td><input type="password" required name="Password" value= "<?php if(isset($_POST['Password'])) {echo $_POST['Password'];}?>"></td>
		<td>
		<?php	

			if(isset($_POST["Password"])&&(strlen($_POST["Password"])<8||strlen($_POST["Password"])>16&&(!preg_match
			("/^(([a-z]+[A-Z]+[0-9]+)||([0-9]+[a-z]+[A-Z]+))[a-zA-Z0-9]*$/i",$_POST["Password"])))){echo "密碼必須由八至十六位英文與數字組合";$error=1;}
		
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
<input type="submit" value="輸入" style="font-size:15px;width:100px;height:30px">
<input type="reset" value="清除" style="font-size:15px;width:100px;height:30px">
<input type="button" value ="返回首頁" onclick = "location.href='Home_Page.php'" style="font-size:15px;width:100px;height:30px">
	
<?php

	include "ifregister.php"

?>

<script src="http://code.jquery.com/jquery-1.12.4.min.js">
</script>
<script>
$("#ID").on("keyup",function(){
	var a = $(this).val();
    console.log(a);
    
    $.ajax({
    		url:'AJAX.php',
            type:'POST',
            dataType:"json",
            data:{'ID':a}
          }).done(function(data){
          				if(data==true){
							console.log("ookk");
             $("#ID").parent().removeClass("success").addClass("error");
          }else{
			  console.log("nnoo");
             $("#ID").parent().removeClass("error").addClass("success");
          }
          console.log(data);
          })
     	})
</script>
</form>
</body>
</html>