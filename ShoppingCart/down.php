<?php

$sql = "SELECT type,code,name,price,gender,size,color,reserve,mode,img FROM products";
$data = mysqli_query($link,$sql);
if(mysqli_num_rows($data)>0)
	{
		while($rd = mysqli_fetch_assoc($data))
		{
			if($rd["mode"]=="上架")
			{
				$img=$rd["img"];
				echo("<tr>".
							"<td>".$rd["type"]."</td>".
							"<td>".$rd["code"]."</td>".
							"<td>".$rd["name"]."</td>".
							"<td>".$rd["price"]."</td>".
							"<td>".$rd["gender"]."</td>".
							"<td>".$rd["size"]."</td>".
							"<td>".$rd["color"]."</td>".
							"<td>".$rd["reserve"]."</td>".
							"<td>"."<img src=pictures/$img witdh='100' height='100'>"."</td>". 
							"<td>"."<a href='off.php?number=".$rd['code']."'style='color:red'>下架</a></td>".								
					 "</tr>");
			}
		}
	}
else
{
	echo "無資料";	
}
mysqli_close($link);

?>