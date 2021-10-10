<html>
<head>
<title>商品圖示管理</title>
</head>
<center>
<h2><I><font face = "cursive"><font size = "10"><font color="purple">
商品圖示管理
</font></font></font></I></h2>
<body>

<form method="post" enctype="multipart/form-data">

<?php

	include "connect.php";
	$error=0;

?>
<p align="right">
<input type="button" value ="返回商品管理" onclick = "location.href='product_manage.php'" style="font-size:15px;width:100px;height:30px">
</p>

<?php

	include "isset2.php";

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
    	<td>編號</td>
    	<td>
            <input type="number" name="code" placeholder="商品將自動編號" value="<?php if(isset($_POST['code'])) {echo $_POST['code'];}?>">
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
		<td>尺寸</td>
		<td>
            <input type="radio" required name="size" value="7">7
            <input type="radio" required name="size" value="8">8
            <input type="radio" required name="size" value="9">9
            <input type="radio" required name="size" value="10">10
            <input type="radio" required name="size" value="11">11
            <input type="radio" required name="size" value="12">12
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
    	<td>庫存</td>
        <td>
            <input type="text" required name="reserve" value= "<?php if(isset($_POST['reserve'])) {echo $_POST['reserve'];}?>">
        </td>		
    </tr>
	
	<tr>
    	<td>狀態</td>
        <td>
            <input type="radio" required name="mode" value="上架">上架
	        <input type="radio" required name="mode" value="下架">下架
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

if($error==0&&isset($_POST["type"])&&isset($_POST["code"])&&isset($_POST["name"])&&isset($_POST["price"])&&isset($_POST["gender"])
 			&&isset($_POST["size"])&&isset($_POST["color"])&&isset($_POST["reserve"])&&isset($_POST["mode"])&&($_FILES['img']['name']))
{
	include "load2.php";
    mysqli_query($link,"INSERT INTO `products`(`type`, `code`, `name`, `price`, `gender`, `size`, `color`, `reserve`, `mode`, `img`)
	                                   VALUES ('$type','$code','$name','$price','$Gen','$size','$color','$Res','$mode','$img')");
									   
	echo "<script>alert('成功上架');javascript:location.href='reserve.php'</script>";
}
elseif($error==1&&isset($_POST["type"])&&isset($_POST["code"])&&isset($_POST["name"])&&isset($_POST["price"])&&isset($_POST["gender"])
                &&isset($_POST["size"])&&isset($_POST["color"])&&isset($_POST["reserve"])&&isset($_POST["mode"])&&($_FILES['img']['name']))
{
	echo"<br>"."商品內容有誤";
}

?>

</form>

</body>
</html>