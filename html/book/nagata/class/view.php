<html>
<head>
<meta charset="UTF-8"> 
</head>
<body>
<?php
$newuser = new User();
$newuser -> print_hello();
class User{
	public $name ="철수";
	public function print_hello(){
		print $this->name;//오브젝트 변수 -> 메소드();
		print " 님 안녕하세요 ";
		//public 외부에서 참조할수있음
		//private 변수를 선언한 클래스 안에서만 참조할 수 있음
		//protected 변수를 선언한 클래스와 상속 받은 클래스에서 참조할수있음
	}
}
?>
</body>
</html>