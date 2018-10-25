<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<div onmouseover="mOver(this)" onmouseout="mOut(this)" style="background-color:green;width:120px;height:20px;padding:40px;">
	First Display..
	</div>
<script>
function mOver(obj){
	obj.innerHTML = "Thank You"
}
function mOut(obj){
	obj.innerHTML = "Mouse Over Me"
}
</script>
</body>
</html>