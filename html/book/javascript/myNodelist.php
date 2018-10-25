<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<h2>JavaScript HTML DOM!</h2>
<p>Hello javascript...!</p>
<p>Good Programming Language...!</p>
<p id="demo"></p>
<script>
var myNodelist = document.getElementsByTagName("p");
document.getElementById("demo").innerHTML = myNodelist[1].innerHTML;
</script>
</body>
</html>