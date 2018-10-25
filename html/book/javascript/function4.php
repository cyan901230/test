<html>
<head>
<meta charset="UTF-8">
<script>
	function add(x, y){
		var sum;
		sum=x+y;
		return sum;
	}
	var result= add(200, 300);
	document.write(result);
	
	
	function aprint(x, y)
		document.write(x+"가 있고"+ y+"가 있다");
	}
	
</script> 
</head>
<body>
<script>
aprint('사과', 10);
aprint('사과');
aprint('사과','수','천');
</script>
</body>
</html>