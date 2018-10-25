<?
require('../illeven/config.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<body>

	<input type="text" id='' class="text" value=""/>
	<input type="button" id='' class="submit" value="전송"/>
	
	
	<p class="my"></p>
	<p class="com"></p>
	<p class="result"></p>

</body>
</html>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.0/jquery.js"></script>

<script>
$('.submit').click(function(){
	
	var a= $('.text').val();
	//console.log(fl);
	
	if(a=="" || a.length <3){
		$('.result').html("숫자를 정확히 입력하세요");
		return false;
	}
	$('.result').html("");
	$('.my').html(a);
	
	//반복되는숫자 x
	
});
</script>
