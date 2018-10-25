<html>
<head>
<meta charset="UTF-8"> 
</head>
<body>
<?php
counter();
counter();
counter();
counter();
counter();
counter();
function counter(){
	static $data =0;//전역변수로 만듦
	print $data ++;
	print "<br>";
}

?>




</body>

</html>