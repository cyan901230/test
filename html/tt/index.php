<?
require('../illeven/config.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<body>실험용

	<input type="button" id='1' class="btn1" value="가위"/>
	<input type="button" id='2' class="btn1" value="바위" />
	<input type="button" id='3' class="btn1" value="보" />
	
	<p class="my"></p>
	<p class="com"></p>
	<p class="resul"></p>

</body>
</html>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.0/jquery.js"></script>

<script>
$('.btn1').click(function(){
	var fl = $(this).attr("id");
	var a = $(this).attr("value");
	//console.log(fl);
	
	var val = Math.ceil(Math.random()*3);
	if(val==1){
		var b="가위";
	}else if(val==2){
		var b="바위";
	}else{
		var b="보";
	}
	//console.log(val);
	
	$('.my').html(a);
	$('.com').html(b);
	
	if(fl==val){
		$('.resul').html("비겼습니다.");
	}else if(a=="가위" && b=="바위"){
		$('.resul').html("컴퓨터가 이겼습니다.");
	}else if(a=="바위" && b=="보"){
		$('.resul').html("컴퓨터가 이겼습니다.");
	}else if(a=="보" && b=="가위"){
		$('.resul').html("컴퓨터가 이겼습니다.");
	}else{
		$('.resul').html("내가 이겼습니다.");
	}
	
	
});
</script>
