
<?php
$board="threadboard";	
$conn = mysql_connect("localhost","cyan","shot9012") or die ("DB에 연결실패");
if($conn){

	echo '[연결성공]';
}

mysql_select_db ("cyan",$conn);
mysql_query('set names euckr');

?>

