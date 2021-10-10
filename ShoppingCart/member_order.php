<html>
<head>
<title>訂單明細</title>
<center>
<h2><I><font face = "cursive"><font size = "10"><font color="brown">
訂單明細
</font></font></font></I></h2>
</head>

<body>
<form method="POST">

<?php

include "connect.php";
session_start();

?>

<p align="right">
<?php

if(isset($_SESSION["ID"]))
{
	echo "歡迎!".$_SESSION['ID'];
	echo "<a href='member.php'>會員專區 </a>";
	echo "<a href='logout.php'> 會員登出</a>";
}

?>
</p>

<table border=1 align=center>
	<tr>
   	    <td>商品圖片</td>
        <td>商品名稱</td>
        <td>購買數量</td>
        <td>商品價格</td>
        <td>出貨狀態</td>
        
<?php

$ID = $_SESSION['ID'];
$error = 0;
$a=0;
$sql = "SELECT * FROM `shopping_cart`";
$sql2 = "SELECT * FROM `order`";
$data = mysqli_query($link,$sql);
$data2 = mysqli_query($link,$sql2);

if(mysqli_num_rows($data2)>0)
{
	while($rd = mysqli_fetch_assoc($data2))
	{
		if($ID==$rd['ID'])
		{
			$type=$rd['type'];
			$code=$rd['code'];
			$name=$rd['name'];
			$Gen=$rd['gender'];
			$size=$rd['size'];
			$color=$rd['color'];
			$price=$rd['price'];
			$Res=$rd['reserve'];
			$ST=$rd['status'];
			$a+=$price*$Res;
			$b=$price*$Res;
			$img=$rd["img"];
			echo("<tr>".
						
						"<td>"."<img src=pictures/$img witdh='150' height='150'>"."</td>". 
						"<td>".$rd['name']."</td>".
						"<td>".$rd['reserve']."</td>".
						"<td>".$b."元"."</td>".
						"<td>".$rd['status']."</td>".
				"</tr>"	);						
		}		
	}
}
echo "<tr>"."<td>"."<center>"."總金額"."</td>"."<td>"."<center>".$a."元"."</td>"."<td>";

?>
    </tr>
</table>
<a href='member.php'> 返回會員專區</a>
</form>
</body>
</html>