<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<style>
.democlass{
	color:red;
}

</style>
<body>
<h1>Hello World</h1>
<p id="myH1"> Good javaScript..!</p>
<button onclick="myFunction()">Try it</button>
<script>
function myFunction(){

	document.getElementsByTagName("h1")[0].setAttribute("class","democlass");

}
</script>



</body>
</html>