<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="//code.jquery.com/jquery.min.js"></script>

</head>

<body>

    
<script type="text/javascript">
	function ju_serch(){
		var x = calculator.number1.value;
		var patn01 = /\d{6}-[12]\d{6}/;
		if(patn01.test(x))
			document.getElementById("demo").innerHTML = patn01.exec(x);
	}
	


</script>


<form name="calculator">
	주민등록번호:<input type="text" name="number1" size=14>
<form>
<button type="button" onclick="ju_serch()">검색</button>
<p id="demo"></p>
</body>
</html>