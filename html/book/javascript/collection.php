<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="//code.jquery.com/jquery.min.js"></script>

</head>

<body>
<form id="coll">
<input type="text"/>
<input type="text"/>
<input type="text"/>
</form>
<button type="submit">제출</button>
<p>Click "Try it" to display the value of each element in the form.</p>
<button onclick="myFunction()">Try it</button>
<p id="demo"></p>
<script>
	function myFunction(){
		var x = document.getElementById("coll");
		var text= "";
		var i;
		for(i=0;i<x.length;i++){
			text += (i + 1)+"." + x.elements[i].value+"<br>";
		}
		document.getElementById("demo").innerHTML = text;
	}
</script>



</body>
</html>