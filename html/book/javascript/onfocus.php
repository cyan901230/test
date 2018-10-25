<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	Enter your name: <input type="text" id="fname" onfocus="focusFunction()" onblur="blurFunction()">
<script>
function focusFunction(){
	document.getElementById("fname").style.backgroundColor="green";
}
function blurFunction(){
	document.getElementById("fname").style.background="yellow";
}
</script>
</body>
</html>