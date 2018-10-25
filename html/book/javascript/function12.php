<html>
<head>
<meta charset="UTF-8">
<script>
	function area(x, y){
		var calculate = function(a, b){
			sum=(x*y)/2;
			return sum;
		}
		var result= calculate(x,y);
			document.write("삼각형의 면적:"+result);
			
		}
</script> 
</head>
<body>
<h2>함수 내부의 함수(지역함수)를 호출</h2>
<script>
	area(100, 200);
	document.write("삼각형의 면적:"+ calculate(x,y));
</script>

</body>
</html>