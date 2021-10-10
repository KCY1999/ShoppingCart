<html>
<head>
<title>修改商品資訊</title>
</head>

<body>
<form method="POST">
<?php

include "connect.php";
$error = 0;
$code3 = $_GET['number2'];
$sql = "SELECT type,code,name,price,gender,size,color,reserve,mode,img FROM products";
$data = mysqli_query($link,$sql);
while($rd = mysqli_fetch_assoc($data))
{
	if($code3==$rd['code'])
	{
		$type=$rd["type"];
		$name=$rd["name"];
		$price=$rd["price"];
		$Gen=$rd["gender"];
		$size=$rd["size"];
		$color=$rd["color"];
		$Res=$rd["reserve"];
		$mode=$rd["mode"];
		$img=$rd["img"];
	}	
}

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
            <?php echo $code3;?>
        </td>
    </tr>
	
	<tr>
    	<td>價格</td>
        <td>
            <?php echo "<input type='number' name='price' value='$price'>"?>
        </td>
    </tr>
    
    	<tr>
    	<td>名稱</td>
        <td>
            <?php echo "<input type='text' name='name' value='$name'>"?>
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
             <?php echo "<input type='number' name='reserve' value='$Res'>"?>
        </td>		
    </tr>
	
	<tr>
    	<td>狀態</td>
        <td>
            <input type="radio" required name="mode" value="上架">上架
	        <input type="radio" required name="mode" value="下架">下架
			<font color="red">
            <input type="radio" required name="mode"  style='color:' value="主畫面">主畫面
            </font>
        </td>
    </tr>
	
	<tr>
    	<td>圖片</td>
        <td>
            圖檔: <input type="file" name="img"><br>
        </td>
    </tr>

</table><center>
<input type="submit" value="輸入" style="font-size:15px;width:100px;height:30px">
<input type="reset" value="清除" style="font-size:15px;width:100px;height:30px">
<input type="button" value ="返回首頁" onclick = "location.href='management.php'" style="font-size:15px;width:100px;height:30px">
</form>

<?php

	include"amend.php";
	   
?>
<center><br>
<td><?php echo "<a href='reserve.php' style='color:blue'>返回上一頁</a>"; ?></td>

</body>
</html>