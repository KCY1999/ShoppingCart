<html>
<head>
<title>購物車</title>
<center>
<h2><I><font face = "cursive"><font size = "10"><font color="brown">
購物車
</font></font></font></I></h2>
</head>

<body>
<form method = "POST">

<p align="right">
<?php

	include "welcome.php";

?>
</p>
<center>
<table border = 1>
	<tr>
		<td>類型</td>
        <td>名稱</td>
        <td>單價</td>
        <td>性別</td>
		<td>尺寸</td>
        <td>顏色</td>
        <td>購買數量</td>        
        <td><center>圖片</center></td>
        <td>選項</td>
	</tr>

<?php

	include "cart.php";

?>
    
</center><br>
<p align="right">
<input type="button" value ="回賣場首頁" onclick = "location.href='Home_Page.php'" style="font-size:15px;width:100px;height:30px">
</p>
</body>
</html>