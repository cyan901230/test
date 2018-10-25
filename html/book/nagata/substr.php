<html>
<head>
<meta charset="UTF-8"> 
</head>
<body>
<?php
$str = "abcdef";
$result = substr($str , 1, 3);
print $result;
//문자열 바꾸기
$html = '<font size="3">hello</font>';
$replace = 'size="3"';
$result = 'size="7"';
$gg = str_replace($replace, $result, $html);
print $gg;
//공백제거
$str = "    1234";
$strr = trim($str);
print $strr;
echo "<br>";

//스트립태그
$strin = '<a href="http://www.naver.com"/>내가내다</a><hr><br>';
$result = strip_tags($strin);
print $result;
print "<br>";

//배열에서 문자열 작성
$date = array("사과", "바나나", "귤");
$result = implode('...', $date);
print $result;
print "<br>";

//데이터베이스에 넘기는 문자열 가공
$string = '"사과", "배", "귤"';
$result = addslashes($string);
print $result;
print "<br>";

?>




</body>
</html>