<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p>Create New BUTTON element with text.</p>
<button onclick="myFunction()">Try it</button>
<script>
function myFunction(){
	var btn = document.createElement("BUTTON");
	var t = document.createTextNode("CLICK ME");
	btn.appendChild(t);
	document.body.appendChild(btn);
}
</script>
</body>
</html>