<html>
<head>
<meta charset="UTF-8"> 
</head>
<body>
<?php
$number = "12345";
if(preg_match("/[0-9]+/", $number)){
	print "숫자입니다.";
}else
	print "숫자가 아닙니다.";

?>




</body>

</html>