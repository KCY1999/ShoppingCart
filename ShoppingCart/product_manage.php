<html>
<head>
<title>商品管理</title>
</head>
<center>
<h2><I><font face = "cursive"><font size = "10"><font color="purple">
商品圖示設置
</font></font></font></I></h2>
<body>

<p align="right">
<input type="button" value ="庫存管理" onclick = "location.href='reserve.php'" style="font-size:15px;width:100px;height:30px">
<input type="button" value ="商品上架" onclick = "location.href='main.php'" style="font-size:15px;width:100px;height:30px">
<input type="button" value ="上架中商品" onclick = "location.href='Shelves(O).php'" style="font-size:15px;width:100px;height:30px">
<input type="button" value ="已下架商品" onclick = "location.href='Shelves(F).php'" style="font-size:15px;width:100px;height:30px">
<form method="post" enctype="multipart/form-data">

</p>

<?php

	include "connect.php";
	$error=0;

?>

<?php

	include "goodsisset.php";

?>


<table border="1" align="center">
	
	<tr>
		<td>類型</td>
    	<td>
            <input type="radio" required name="type" value="休閒">休閒
            <input type="radio" required name="type" value="籃球">籃球
            <input type="radio" required name="type" value="慢跑">慢跑
        </td>

	</tr>
	   
    
    <tr>
    	<td>名稱</td>
    	<td>
            <input type="text" name="name" value="<?php if(isset($_POST['name'])) {echo $_POST['name'];}?>">
        </td>
    </tr>
    
	<tr>
    	<td>價格</td>
        <td>
            <input type="number" required name="price" value="<?php if(isset($_POST['price'])) {echo $_POST['price'];}?>">
        </td>
    </tr>
	
	<tr>
		<td>性別</td>
		<td>
            <input type="radio" required name="gender" value="男">男
	        <input type="radio" required name="gender" value="女">女
        </td>
	</tr>
	
	<tr>
    	<td>顏色</td>
        <td>
            <input type="radio" required name="color" value="黑">黑
            <input type="radio" required name="color" value="白">白
            <input type="radio" required name="color" value="灰">灰
            <input type="radio" required name="color" value="棕">棕
            <input type="radio" required name="color" value="紅">紅
            <input type="radio" required name="color" value="藍">藍
            <input type="radio" required name="color" value="綠">綠
            <input type="radio" required name="color" value="粉">粉
        </td>
    </tr>
	
	<tr>
    	<td>狀態</td>
        <td>
            <input type="radio" required name="mode" value="主畫面">主畫面
        </td>
    </tr>
	
	<tr>
    	<td>圖片</td>
        <td>
            圖檔: <input type="file" name="img"><br>
        </td>
    </tr>

</table>
<center>
<input type="submit" value="輸入" style="font-size:15px;width:100px;height:30px">
	
<?php

	include "success.php";

?>

</form>
<br><br><br><br><br><br><br><br><br><br><br>
<input type="button" value ="返回管理" onclick = "location.href='management.php'" style="font-size:15px;width:100px;height:30px">
</body>
</html>