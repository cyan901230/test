<html>
<head>
<meta charset="UTF-8"> 
</head>
<body>
<?php
$username="user";
$password="pass";
$db_data["username"]="user";
$db_data["password"]="pass";
if($db_data["username"]=$username && $db_data["password"]=$password){
	print "회원페이지 입니다";
}else
	print "틀렷어";

?>




</body>

</html>