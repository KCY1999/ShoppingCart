<html>
<head>
<title>商品詳細資料</title>
<center>
<h2><I><font face = "cursive"><font size = "10"><font color="gray">
商品資料
</font></font></font></I></h2>
</head>

<body>
<form method = "POST">

<p align="right">
<?php
	
	include "welcome.php";
	
?>
</br></p>

<table border="1" align="center">
<?php

$ID = $_SESSION['ID'];
include "connect.php";
$error = 0;
$code = $_GET['detail'];
$sql = "SELECT type,code,name,price,gender,size,color,reserve,mode,img FROM products";
$sql2 = "SELECT * FROM shopping_cart";
$data = mysqli_query($link,$sql);
$data2 = mysqli_query($link,$sql2);
if(isset($_POST['purchase']))
{
	$Pch = $_POST['purchase'];
}
while($rd = mysqli_fetch_assoc($data))
{	
	if($code==$rd['code'])
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
echo 		
	"<tr>".
    	"<td>"."名稱"."</td>".
        "<td>".
            $name.
        "</td>".
    "</tr>".
	
	"<tr>".
    	"<td>"."價格"."</td>".
        "<td>".
            $price.
        "</td>".
    "</tr>".
	
	"<tr>".
    	"<td>"."尺寸"."</td>".
        "<td>".
            $size.
        "</td>".
    "</tr>".
	
    "<tr>".
		"<td>"."購買數量"."</td>".
		"<td>".
			" <input type='number' min='1' max='$Res' required name='purchase'>".
        "</td>".
    "</tr>".
    
	/*"<tr>".
    	"<td>"."庫存"."</td>".
        "<td>".
            $Res.
        "</td>".
    "</tr>".*/
	
	"<tr>".
    	"<td>"."圖片"."</td>".
        "<td>".
            "<img src=pictures/$img witdh='250' height='250'>".
        "</td>".
    "</tr>";
	}		
}

?>


</table><center>
<input type="submit" value="加入購物車" style="font-size:15px;width:100px;height:30px">

<?php

	include"memberjoin.php";

?>

<br>
<td><?php echo "<a href='Home_Page.php' style='color:blue'>返回首頁</a>"; ?></td>
<a href="javascript:history.back();" style='color:blue';>返回上一頁</a> 
</form>
</body>
</html>