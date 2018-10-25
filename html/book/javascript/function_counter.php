<html>
<head>
<meta charset="UTF-8">
<script>

</script> 
</head>
<body>

<script>
	var count=0;

	function myfunction(){
		function add(){
			return count+=1;
		}
		document.getElementById("demo").innerHTML=add();
	}

</script>
<button type="button" onclick="myfunction()">counter</button>
<p id="demo"></p>
</body>
</html>