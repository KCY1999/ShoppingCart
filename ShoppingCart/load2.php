<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>檔案上傳</title>
</head>
<center>
<?php

$date=date("Y-m-d-H-i-s",mktime(date('H')+6,date('i'),date('s'),date('m'),date('d'),date('Y')));
$newPath=$date;
$img=$_FILES["img"]["name"];
	if($_FILES['img']['size']<4096001&&($_FILES['img']['type']=="image/jpeg"||
	   $_FILES['img']['type']=="image/png"||$_FILES['img']['type']=="image/bmp"))
	{
    	if ($_FILES['img']['error']==0)
    	{
			if(file_exists("./pictures/".$_FILES["img"]["name"]))
				{ 
					rename("./pictures/".$_FILES["img"]["name"],
				    	   "./pictures/".$date.$_FILES["img"]["name"]);
				}
	    	if(move_uploaded_file($_FILES["img"]["tmp_name"],"./pictures/".$_FILES["img"]["name"]))		    
	    	{  	
        	   echo "<font size=5>"."檔案"."上傳成功". '<br/>';
			   echo '檔案名稱: ' . $_FILES['img']['name'] . '<br/>';
    	       echo '檔案類型: ' . $_FILES['img']['type'] . '<br/>';
        	   echo '檔案大小: ' . (round($_FILES['img']['size']/1024,2)) . 'KB<br/>';
	    	}			
    	}
	}	
	elseif($_FILES['img']['error']==4)
	{
    	echo "<font size=20>"."<font color='RED'>"."請選擇圖檔!!!"."<br>";
	}
	elseif($_FILES['img']['error']==4)
	{
	    echo"";
	}
	else
	{
		echo"<font size=\"15\" color=\"BLUE\">檔案"."$g"."格式錯誤或檔案過大</font>"."<br>";
	}

?>
</body>
</html>