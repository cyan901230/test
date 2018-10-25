<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div id="gg">
	<p id="p1">This is a paragraph.</p>
	<p id="p2">This is another paragraph.</p>
</div>

<script>
	 var para = document.createElement("p1");
	 var node = document.createTextNode("This is new.");
	 para.appendChild(node);
	 var element = document.getElementById("gg");
	 element.appendChild(para);
</script>
</body>
</html>