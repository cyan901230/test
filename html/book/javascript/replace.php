<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="//code.jquery.com/jquery.min.js"></script>

</head>

<body>

<p>this program is written by java. java is the best program</p>
<button onclick="myFunction()">Sort</button>
<p id="demo1"></p>
<p id="demo2"></p>


    <script type="text/javascript">
	function myFunction(){
		var str="this program is written by java. java is the best program";
		var txt=str.replace("java", "javascript");
		document.getElementById("demo1").innerHTML=txt;
		var txt=str.replace(/java/g, "javascript");
		document.getElementById("demo2").innerHTML=txt;
	}
    </script>
</body>
</html>