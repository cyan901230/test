<html>
<head>
<meta charset="UTF-8"> 
</head>
<body>
<?php
	class User{
		private $name = null;
		public function print_hello(){
			print $this->name;
			print "님 안녕하세요<br>";
		}
	}
	class Guest extends User{
		private $name = "게스트";
		public function print_hello(){
			print $this->name;
			print "님 반갑습니다!<br>";
		}
	}
	$newuser = new Guest();
	$newuser->print_hello();
?>




</body>
</html>