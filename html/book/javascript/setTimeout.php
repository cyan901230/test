<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="//code.jquery.com/jquery.min.js"></script>

</head>

<body>
<p>Click "Try it". Wait 3 seconds, and the page will alert "Hello".</p>
<button onclick="setTimeout(myFunction, 3000);"> Try it</button>    
<script type="text/javascript">
function myFunction(){
	alert("Hello");
}
</script>
<br>
<br>
<button onclick="aa()"> Try it</button>
<button onclick="aastop()">Stop the alert</button>
<script>
	var myVar;
	function aa(){
		myVar = setTimeout(function(){
			alert("Hello");
		}, 3000);
	}
	function aastop(){
		clearTimeout(myVar);
	}
</script>




</body>
</html>