<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<p>This example of the addEventListener() with click event to a button.</p>
	<button id="myBtn">Try it1</button>
	<button id="myBtn2">Try it2</button>
<script>
	document.getElementById("myBtn").addEventListener("click", function(){ alert("Hello");})
	document.getElementById("myBtn2").addEventListener("click", myfunction);
	function myfunction(){
		alert("Hello2");
	}
</script>
</body>
</html>