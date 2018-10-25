<html>
<head>
<meta charset="UTF-8"> 
</head>
<body>
<?php
	//final 을 매소드에 지정하면 오버라이드 못함
	class Test{
		final public function test_method(){
			//처리가 기술됩니다.
		}
	}
	final class Test2{
		public function test2_method(){
			//처리가 기술됩니다.
		}
	}
?>




</body>
</html>