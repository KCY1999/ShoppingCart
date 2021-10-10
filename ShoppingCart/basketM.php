<html>
<head>
<title>男款籃球鞋</title>
<center>
<h2><I><font face = "cursive"><font size = "7"><font color="blue">
男款籃球鞋
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
	$color3=$_GET['col3'];
	while($rd = mysqli_fetch_assoc($data))
	{
		$img=$rd["img"];
		$mode=$rd["mode"];
		$type=$rd["type"];
		$Gen=$rd["gender"];
		$color=$rd["color"];
		if($mode=="上架"&&$type=="籃球"&&$Gen=="男"&&$color3==$color)
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
<td><?php echo "<a href='basketPage.php' style='color:blue'>返回上一頁</a>"; ?></td>
</body>
</html>