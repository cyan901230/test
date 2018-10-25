<html>
<head>
<meta charset="UTF-8"> 
</head>
<body>
<?php
	class Test{
		public function TestPublic(){
			print "공개<br>";
		}
		function TestNothing(){
			print "선언없음<br>";
		}
		private function TestPrivate(){
			print "비밀<br>";
		}
	}
	$test = new Test();
	$test->TestPublic();
	$test->TestNothing();//선언 안할시 public으로 인지
	$test->TestPrivate();//오류
?>




</body>
</html>