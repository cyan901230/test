<html>
<head>
<meta charset="UTF-8"> 
</head>
<body>
<?php
	class Test{
		public $str1 = '공개';
		private $str2 = '비밀';
	}
	$test = new Test();
	print $test->str1;
	print "<br>";
	print $test->str2;오류
	print "<br>";
?>
</body>
</html>