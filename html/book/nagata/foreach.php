<html>
<head>
<meta charset="UTF-8"> 
</head>
<body>
<?php
$week = array("월", "화", "수", "목", "금", "토", "일");
	foreach($week as $value){
		print $value;
		print "<br>";
	}

//$member [] = ["name" => "cyan", "age" => "29", "tall" => "183"];
$member = array("name" => "cyan", "age" => "29", "tall" => "183");
	foreach($member as $key => $value){
		print "$key : $value";
		print "<br>";
	}
	
	
$member = array("name" => "cyan", "age" => "29", "tall" => "183");
foreach($member as $key => $value){
	if($key == "name"){
		$title="이름";
	}else{
		if($key=="age"){
		$title="나이";
	}else{
		if($key =="tall"){
			$title="키";
		}
	}
}
print "$title : $value";
print "<br>";
}
?>
</body>
</html>