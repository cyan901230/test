<!DOCTYPE html> 
<html> 
<head> 
<meta charset="UTF-8"> 
<title>Insert title here</title> 
<script  src="http://code.jquery.com/jquery-latest.min.js"></script>
</head>
<style> 
ul { font-size:18px; margin:0; }
span { color:blue; text-decoration:underline; cursor:pointer; } 
.example { font-style:italic; } 
</style>

<body> 
To do list: <span>(click here to change)</span> 
<ul> 
<li>Eat</li> 
<li>Sleep</li> 
<li>Be merry</li> 
</ul> 
<script> 
$("span").click(function () { 
$("li").each(function(){ 
$(this).toggleClass("example"); 
}); 
}); 
</script> 
</body>

</html>



