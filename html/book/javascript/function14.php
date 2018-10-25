<html>
<head>
<meta charset="UTF-8">
<script>
	function callback(x){
		for(var i=1; i<=10; i++){
			x(i);
		}
	}
	var greeting=function(i){
		document.write("hello"+i+"<br>");
	}
	
</script> 
</head>
<body>
<script>
callback(greeting);
</script>

</body>
</html>