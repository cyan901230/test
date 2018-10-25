<html>
<head>
<meta charset="UTF-8"> 
</head>
<body>
<?php
if(isset($_POST["hobby"])){
	$hobby = implode('와', $_POST["hobby"]);
	print "저의 취미는 ";
	print $hobby;
	print "입니다.";
}else {
	print "저의 취미는 없습니다.";
}


?>





</body>
</html>