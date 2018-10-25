<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p>create a P element with some text, and append it to DIV.</p>
<div id="myDIV">
	First statement....
</div>
<button onclick="myFunction()">Try it</button>
<script>
function myFunction(){
	var para = document.createElement("p");
	var t = document.createTextNode("Added statements....");
	para.appendChild(t);
	document.getElementById("myDIV").appendChild(para);
}
</script>
</body>
</html>