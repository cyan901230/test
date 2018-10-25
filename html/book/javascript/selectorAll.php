<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="//code.jquery.com/jquery.min.js"></script>

</head>

<body>
<h1 class="intro">Hello World!</h1>
<p class="intro">The DOM is very userful.</p>
<p class="intro">This exaple demostrates.</p>
<p id="demo"></p>

<script>
var x = document.querySelectorAll("p.intro");
document.getElementById("demo").innerHTML = x[0].innerHTML;
</script>



</body>
</html>