<html>
<head>
<meta charset="UTF-8"> 
</head>
<body>
<?php
$member = array("name" => "cyan", "age" => "29", "tall" => "183");
	foreach($member as $key => $value){
		if($key == "name"){
			$title = "이름";
		}else{ 
		if($key == "age"){
			$title = "나이";
			}else{ 
				if($key == "tall"){
					$title = "키";
				}else{
					print "처리를 건너 뜁니다.<br>";
					continue;
				}
			}
		}
		print "$title : $value";
		print "<br>";
	}
		

?>




</body>

</html>