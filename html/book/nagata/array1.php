<html>
<head>
<meta charset="UTF-8"> 
</head>
<body>
<?php
$week [] = "월";
$week [] = "화";
$week [] = "수";

print "1.".$week[1];
echo "<br>"."2.";
$month= array(1,2,3,4,5,6,7,8,9,0);
$week= array("월","화","수","목", "금","토","일");
$PrefectureList = array(
	"서울특별시",
	"부산광역시",
	"대구광역시",
	"울산광역시"
);

print $PrefectureList[2];
echo "<br>"."3";

$member["name"]="철수";
print $member["name"];
echo "<br>"."4.";

$member["name"]="cyan";
$member["age"]="29";
$member["tall"]="183";

print $member["name"];
print "<br>";
print $member["age"];
print "<br>";
print $member["tall"];
print "<br>";
echo "<br>"."5";
print "<br>";

$member = array("name" => "cyan", "age" => "29", "tall" => "183");
print $member["name"];
print "<br>";
print $member["age"];
print "<br>";
print $member["tall"];
print "<br>";
echo "<br>"."6";
print "<br>";

$member[] = ["name" => "cyan", "age" => "29", "tall" => "183"];
print $member["name"];
print "<br>";
print $member["age"];
print "<br>";
print $member["tall"];
print "<br>";
echo "<br>"."7";
print "<br>";



?>




</body>

</html>