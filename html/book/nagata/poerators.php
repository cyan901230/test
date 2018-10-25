<html>
<head>
<meta charset="UTF-8"> 
</head>
<body>
<?php
$dd [] = ["name1" => "cyan", "age1" => "29"];
$dt [] = ["name1" => "green", "age1" => "20"];
$data = $dd + $dt;
print "<pre>";
var_dump ($data);
print "</pre>";


$answer=5+1;
print "5+1=$answer";
print "<br>";

$answer=5-1;
print "5-1=$answer";
print "<br>";

$answer=5/2;
print "5/2=$answer";
print "<br>";

$answer=5*2;
print "5*2=$answer";
print "<br>";

$data = "cyan";
$name = $data;
$name .= "green";
print $name;
print "<br>";

$data = 0 & 0;
print $data."<br>";
$data = 1 & 0;
print $data."<br>";
$data = 0 & 1;
print $data."<br>";
$data = 1 & 1;
print $data."<br>";

$age = 29;
$mind_age=20;
$mind_check=($mind_age <= $age? "젊은이":"늙은이");
print $mind_check;
print "<br>"




?>




</body>

</html>