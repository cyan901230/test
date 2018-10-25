<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="//code.jquery.com/jquery.min.js"></script>

</head>

<body>
<p>A script on this page starts this clock:</p>
<p id="demo"></p>
<button onclick="clearInterval(myVar)">Stop time</button>
<script>
	var myVar = setInterval(myTimer, 1000);
	function myTimer(){
		var d = new Date();
		document.getElementById("demo").innerHTML = d.toLocaleTimeString();
	}
</script>



</body>
</html>