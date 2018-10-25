<?

class Member{
	const AdultAge = 20;
	function printAdultAge(){
		print self::AdultAge; //$this 가 아닌 self
	}
}

?>