<html>
<head>
<title>女款慢跑鞋</title>
<center>
<h2><I><font face = "cursive"><font size = "7"><font color="blue">
女款慢跑鞋
</font></font></font></I></h2>
</head>

<body>

<p align="right">
<?php

	include"welcome.php"
	
?>
</p>

<?php

	include"connect.php";

?>

<table border=1 align=center>
	<tr>
    <?php
	
	$sql = "SELECT type,code,name,price,gender,size,color,reserve,mode,img FROM products";
    $data = mysqli_query($link,$sql);
	$pic=0;
	$color6=$_GET['col6'];
	while($rd = mysqli_fetch_assoc($data))
	{
		$img=$rd["img"];
		$mode=$rd["mode"];
		$type=$rd["type"];
		$Gen=$rd["gender"];
		$color=$rd["color"];
		if($mode=="上架"&&$type=="慢跑"&&$Gen=="女"&&$color6==$color)
		{
			$pic+=1;
		 echo "<td align=center>"."<a href='product_detail.php?detail=".$rd['code']."'style='color:red'><img src=pictures/$img witdh='250' height='250'></a>".
		      "<br>".$rd['name']."<br>"."US".$rd["size"]."-------"."$".$rd["price"]."</td>";
		}
		if($pic==4)
		{
			echo"</tr><tr>";
			$pic=0;	
		}
	}

	
	?>
    </tr>
</table>
<center><br>
<td><?php echo "<a href='runPage.php' style='color:blue'>返回上一頁</a>"; ?></td>
</body>
</html>