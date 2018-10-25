<html>
<head>
<meta charset="UTF-8"> 
</head>
<body>
<?php
//우선순위 클래스메소드 > 트레이트 메소드 > 상속한 메소드
	trait SayMorning{
		public function print_morning(){
			print $this->name;
			print "님, 안녕하세요!<br>";
		}
	}
	
	class User{
		private $name = null;
		public function print_hello(){
			print $this->name;
			print "님, 반갑습니다!!<br>";
		}
	}
	class Guset extends User{
		use SayMorning;
		private $name ="게스트";
		public function print_hello(){
			print $this->name;
			print "님, 처음뵙겠습니다.<br>";
		}
	}
	$newuser = new Guset();
	$newuser -> print_hello();
	$newuser -> print_morning();

?>




</body>
</html>