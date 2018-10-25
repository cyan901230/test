<html>
<head>
<meta charset="UTF-8"> 
</head>
<body>
<?php


$type="form";
if($type=="form"){
	print "등록폼입니다.";
}else if ($type=="exec"){
	print "등록 처리를 실행중";
}else
	print "화면이 없습니다.";

echo "<br>";
$type="form";


switch($type){
	case "form" :
	print "등록폼입니다.";
	break;
	case "confirm":
	print "확인 화면입니다.";
	break;
	case "exec":
	print "등록 처리를 실행중";
	break;
	default:
	print "화면이 없습니다.";
};
?>


</body>

</html>