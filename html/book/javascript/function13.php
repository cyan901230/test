<html>
<head>
<meta charset="UTF-8">
<script>
	function count(x){
		if(x==0)
			document.write("함수실행 종료");
		else {
			document.write(x+"번째 실행중<br>");
			count(x-1);
		}
	}

	
</script> 
</head>
<body>
<script>
count(5);
</script>

</body>
</html>