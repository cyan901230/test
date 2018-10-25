<?
require('./config.php');

$query = "SELECT * FROM user WHERE 1";
$row = $db->q($query);

//foreach($row as $value){
  //echo $value[idx];
//}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<body>

  아이디 <input type='text' class='id'><br>
  패스워드 <input type='password' class='pass'><br>
  <input type='button' class='btn1' value='로그인'>

  <p class='msg'></p>

</body>
</html>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.0/jquery.js"></script>

<script>
$('.btn1').click(function(){

  var id = $(".id").val();
  var pwd = $(".pass").val();

  $.ajax({
  		type: "POST",
  		url: "./ajax.php",
  		async:false,
  		data: {v1:id,v2:pwd},
  		dataType: "json",
  		success: function (data) {
			console.log("success");
  		},
		error: function (data) {
			console.log("fail");
  		},

  	});

  });
</script>
