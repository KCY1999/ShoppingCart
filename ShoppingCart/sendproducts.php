<?php

$sql = "SELECT * FROM `order`";
$data = mysqli_query($link,$sql);
if(mysqli_num_rows($data)>0)
	{
		while($rd = mysqli_fetch_assoc($data))
		{
			if($rd["status"]=="未出貨")
			{
				$img=$rd["img"];
				echo("<tr>".
							"<td>".$rd["ID"]."</td>".
							"<td>".$rd["type"]."</td>".
							"<td>".$rd["code"]."</td>".
							"<td>".$rd["name"]."</td>".
							"<td>".$rd["price"]."</td>".
							"<td>".$rd["gender"]."</td>".
							"<td>".$rd["size"]."</td>".
							"<td>".$rd["color"]."</td>".
							"<td>".$rd["reserve"]."</td>".
							"<td>".$rd["total"]."</td>".
							"<td>"."<img src=pictures/$img witdh='100' height='100'>"."</td>". 
							"<td>"."<a href='shipment.php?goods=".$rd['ID']."'style='color:red'>出貨</a></td>".								
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