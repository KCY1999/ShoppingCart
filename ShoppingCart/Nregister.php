<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>帳號驗證</title>
</head>

<body>
<style>
.error{
	border:thin solid #F00;
}
.success{
	border:thin solid #0F0;
}
</style>
<div class="Main">
	<div style="width:400px;height:600px; float:left;">
    	<div class="a" style="float:left">
        帳號:<input type="text" id="ID"/>
        <input type="submit" value="確定" name="submit" id="submit"/>
    	</div>
    
    <div class="a" style="float:right;">
    
    </div>
	</div>

	<div class="a" style="float:right;">
    
    </div>
</div>
<script src="http://code.jquery.com/jquery-1.12.4.min.js">
</script>
<script>
$("#ID").on("keyup",function(){
	var a = $(this).val();
    console.log(a);
    
    $.ajax({
    		url:'AJAX.php',
            type:'POST',
            dataType:"json",
            data:{'ID':a}
          }).done(function(data){
          				if(data==true){
							console.log("ookk");
             $("#ID").parent().removeClass("success").addClass("error");
          }else{
			  console.log("nnoo");
             $("#ID").parent().removeClass("error").addClass("success");
          }
          console.log(data);
          })
     	})
</script>
</body>
</html>