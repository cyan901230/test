<html>
<head>
<meta charset="UTF-8"> 
</head>
<body>
<?php
echo "2-1";
$tel = "02-0000-0000";
echo "<br>";
echo "2-2";
echo "<br>";
for($i=1;$i<11;$i++){
	print $i;
}
echo "<br>";
echo "2-3";
echo "<br>";
$str="";
if($str=="등록")
	print "등록되었습니다.";
echo "2-4";
echo "<br>";
$member = array("name" => "철수", "tel" => "02-0000-0000", "adrress" => "강남구");
foreach($member as $key => $value){
	print "$key => $value";
	print "<br>";
}

function test($name){
		$str = $name."안녕하세요";
		return $str;

}


?>




</body>

</html>