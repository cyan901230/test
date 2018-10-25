<html>
<head>
<meta charset="UTF-8">
<script>
function hello_01(){
	alert("1");
}
var hello_02 = function () {
	alert("2");
};//세미클론 있어야한다해놓고 없어도됨
</script> 
<script>
hello_01();
hello_02();
</script> 
</head>
<body>

</body>
</html>