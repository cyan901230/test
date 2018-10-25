<html>
<head>
<meta charset="UTF-8"> 
</head>
<body>
<?php
$member[0] = "철수";
$member[1] = "영희";
$member[2] = "길동";
$member[3] = "철수2";
$member[4] = "영희2";
$member[5] = "길동2";

$i = 0;
$limit = 4;
foreach($member as $key => $value){
	print "이름 : $value";
	print "<br>";
	if($i> $limit -3){
		print "반복을 빠져나옴";
		break;
	}
	$i++;
}
?>




</body>

</html>