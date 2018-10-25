<html>
<head>
<meta charset="UTF-8"> 
</head>
<body>
<?php
$data = 5;
function scope_test(){
	$data = 1;
	print $data;
	print "<br>";
}
Print $data;
print "<br>";
scope_test();
Print $data;
print "<br>";
print "<br>";
$data = 5;
function scope_global(){
	global $data;
	$data += 1;
	print $data;
	print "<br>";
};
print $data;
print "<br>";
scope_global();
print "<br>";

$data = 5;
$dataa = 6;

$data = 4;

function global_data(){
	$GLOBALS['data'] += 1;
	print $GLOBALS['data'];
}
print $data;
print "<br>";
print global_data();
print "<br>";

?>




</body>

</html>