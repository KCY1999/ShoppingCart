<html>
<head>
<title>女款休閒跑鞋</title>
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
	$color2=$_GET['col2'];
	while($rd = mysqli_fetch_assoc($data))
	{
		$img=$rd["img"];
		$mode=$rd["mode"];
		$type=$rd["type"];
		$Gen=$rd["gender"];
		$color=$rd["color"];
		if($mode=="上架"&&$type=="休閒"&&$Gen=="女"&&$color2==$color)
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
<td><?php echo "<a href='relaxPageF.php' style='color:blue'>返回上一頁</a>"; ?></td>
</body>
</html>
