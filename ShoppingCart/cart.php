<?php

$ID = $_SESSION['ID'];
include "connect.php";
$error = 0;
$a=0;
$sql = "SELECT * FROM `shopping_cart`";
$data = mysqli_query($link,$sql);
if(mysqli_num_rows($data)>0)
{
	while($rd = mysqli_fetch_assoc($data))
	{
		if($ID==$rd['ID'])
		{
			$Res=$rd["reserve"];
			$price=$rd["price"];
			$a+=$price*$Res;
			$img=$rd["img"];
			{			
			echo("<tr>".
						"<td>".$rd["type"]."</td>".
						"<td>".$rd["name"]."</td>".
						"<td>".$rd["price"]."</td>".
						"<td>".$rd["gender"]."</td>".
						"<td>".$rd["size"]."</td>".
						"<td>".$rd["color"]."</td>".
						"<td>".$rd["reserve"]."</td>".
						"<td>"."<img src=pictures/$img witdh='150' height='150'>"."</td>". 
						"<td>"."<a href='plus.php?cart1=".$rd['code']."'style='color:green'>+1</a>"." ".
						"<a href='decrease.php?cart2=".$rd['code']."'style='color:green'>-1</a>"."<br>".
						"<a href='delete3.php?cart=".$rd['code']."'style='color:red'>刪除商品</a>"."</td>".								
				 "</tr>");
			}
		}		
	}
}
echo "</table>"."<br>"."總額".$a."元"."<br>"."<a href='purchase.php?'style='color:green'>下單</a>";

?>