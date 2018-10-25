<html>
<head>
<meta charset="UTF-8"> 
</head>
<body>
<?php
for($i = 0; $i <10; $i++){
	print "반복문".$i."번쨰 입니다.<br>";
	
}
echo "<br>";

$number = array(1,2,3,4,5,6,7,8,9);
for($i=0;$i<count($number);$i++){
print $number[$i];
print "<br>";
}

$PrefectureList = array("대구","서울","대전","부산","울산","광주","창원");



$html = "<select name=\"prefecture\">\n";
for($i=0;$i <=count($PrefectureList)-1;$i++){
	$html .="<option value=\"$i\">$PrefectureList[$i]</option>\n";
}
$html .="</select>\n";
print $html;




?>




</body>

</html>