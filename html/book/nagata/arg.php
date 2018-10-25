<html>
<head>
<meta charset="UTF-8"> 
</head>
<body>
<?php
$myage=29;
check_age($myage);
function check_age($age){
	$mind_age=20;
	$check = $myage<$mind_age?"동안":"노안";
	print $check;
}
print "<br>";

check_member();
function check_member($username="guest", $password="guest"){
	if($username="guest" && $password="guest"){
		print "회원";
	}else
		print "비회원";
}
print "<br>";

// 동작 x function check($username="guest", $password);
// 동작 o function check($username, $password="guest");

list($year, $month, $day)= get_today();

function get_today(){
	$year = date('Y');
	$month = date('m');
	$day = date('d');
	return array($year,$month,$day);
}
print $year."년".$month."월".$day."일";

?>




</body>

</html>