<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
 Enter yout name: <input type="text" id="fname" onchange="myFunction()">
 <p>transforms the input text to upper case.</p>
<script>
function myFunction(){
	var x = document.getElementById("fname");
	x.value=x.value.toUpperCase();
}
</script>
</body>
</html>