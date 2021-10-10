<?php

$ID = $_SESSION['ID'];
$error = 0;
$a=0;$b=0;
$sql = "SELECT * FROM shopping_cart";
$sql2 = "SELECT * FROM `order`";
$data = mysqli_query($link,$sql);
$data2 = mysqli_query($link,$sql2);


	while($rd = mysqli_fetch_assoc($data))
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
			$a+=$price*$Res;
			$b=$price*$Res;
			$img=$rd["img"];
			echo("<tr>".
						
						"<td>"."<img src=pictures/$img witdh='150' height='150'>"."</td>". 
						"<td>".$rd['name']."</td>".
						"<td>".$rd['reserve']."</td>".
						"<td>".$b."元"."</td>".
						"<td>"."未出貨"."</td>".
				"</tr>"	);						
			if(isset($_SESSION['ID']))
			{
				mysqli_query($link,"INSERT INTO `order`(`ID`,`type`,`code`,`name`,`price`,`gender`,`size`,`color`,`reserve`,`total`,`pay`,`img`,`status`)
	     				        				 VALUES('$ID','$type','$code','$name','$price','$Gen','$size','$color','$Res','$b','$a','$img','未出貨')");								 				mysqli_query($link,"DELETE FROM `shopping_cart`	WHERE `ID`='$ID'");
			}
		}		
	}

echo "<tr>"."<td>"."<center>"."總金額"."</td>"."<td>"."<center>".$a."元"."</td>";
if($a>0)
{
	echo "<script>alert('購買成功');javascript:location.href='member_order.php'</script>";
}
else
{
	echo"<script>alert('尚未加入商品');javascript:location.href='shopping_cart.php'</script>";
}
?>