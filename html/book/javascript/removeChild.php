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
<p>Remove the first item from the list.</p>
<button onclick="myFunction()">Try it</button>
<script>
function myFunction(){
	var list=document.getElementById("myList");
	var x=list.removeChild(d.childNodes[0]);
}
</script>
</body>
</html>