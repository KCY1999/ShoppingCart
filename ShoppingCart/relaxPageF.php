<html>
<head>
<title>女款休閒鞋</title>
<center>
<h2><I><font face = "cursive"><font size = "7"><font color="blue">
女款休閒鞋
</font></font></font></I></h2>
</head>

<body>

<p align="right">
<?php

	include "welcome.php";

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
	while($rd = mysqli_fetch_assoc($data))
	{
		$img=$rd["img"];
		$mode=$rd["mode"];
		$type=$rd["type"];
		$Gen=$rd["gender"];
		if($mode=="主畫面"&&$type=="休閒"&&$Gen=="女")
		{
			$pic+=1;
		 echo "<td align=center>"."<a href='relaxF.php?col2=".$rd['color']."'style='color:red'><img src=pictures/$img witdh='250' height='250'></a>".
		      "<br>".$rd['name']."<br>"."US"."$".$rd["price"]."</td>";
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
<input type="button" value ="返回賣場首頁" onclick = "location.href='Home_Page.php'" style="font-size:15px;width:100px;height:30px">
</body>
</html>