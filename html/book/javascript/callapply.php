<html>
<head>
<meta charset="UTF-8">
<script>


	
</script> 
</head>
<body>
<p id = "demo01"></p>
<p id = "demo02"></p>
<p id = "demo03"></p>
<script>
document.getElementById("demo01").innerHTML = Math.max(1,2,3);
document.getElementById("demo02").innerHTML = Math.max.call(2,3,4);
document.getElementById("demo03").innerHTML = Math.max.apply(null,[3,4,5]);
</script>

</body>
</html>