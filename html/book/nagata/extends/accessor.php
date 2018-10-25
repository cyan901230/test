<html>
<head>
<meta charset="UTF-8"> 
</head>
<body>

<?
	class Member{
		private $id;
		private $lastname;
		private $firstname;
		private $email;
		private $password;
		
		public function getId(){
			return $this->id;
		}
		public function setId($id){
			$this->id = $id;
		}
		public function getLastname(){
			return $this->lastname;
		}
		public function setLastname($lastname){
			$this->lastname = $lastname;
		}
		public function getFirstname(){
			return $this->firstname;
		}
		public function setFirstname($firstname){
			$this->firstname = $firstname;
		}
		public function getEmail(){
			return $this->email;
		}
		public function setEmail($email){
			$this->email = $email;
		}
		public function getPassword(){
			return $this->password;
		}
		public function setPassword($password){
			$this->password = $password;
		}
		}
		
		$member = new Member;
		$member->setId("1");
		$member->setLastname("당신의 성");
		$member->setFirstname("당신의 이름");
		$member->setEmail("당신의 이메일주소");
		$member->setPassword("당신의 비밀번호");
		print $member->getId()."<br>";
		print $member->getLastname()."<br>";
		print $member->getFirstname()."<br>";
		print $member->getEmail()."<br>";
		print $member->getPassword()."<br>";
		
		
	

?>
</body>
</html>