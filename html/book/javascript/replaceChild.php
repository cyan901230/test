<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<ul id="myList">
	<li>Coffee</li>
	<li>Tea</li>
	<li>Milk</li>
</ul>
<p>Append an item to the end of the list.</p>
<button onclick="myFunction()">Try it</button>
<script>
function myFunction(){
	var elmnt = document.createElement("li");
	var textnode = document.createTextNode("Water");
	elmnt.appendChild(textnode);
	var item = document.getElementById("myList");
	item.replaceChild(elmnt, item.childNodes[0]);
}
</script>
</body>
</html>