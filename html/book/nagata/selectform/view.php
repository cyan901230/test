<html>
<head>
<meta charset="UTF-8"> 
</head>
<body>
<?php
if($_POST["prefecture"] != ""){
	print "행정구역:<br>";
	print $_POST["prefecture"];
}else {
	print "행정구역을 선택해 주세요";
}



?>


</body>
</html>