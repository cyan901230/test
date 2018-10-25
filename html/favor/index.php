<?
require('../illeven/config.php');
$sess_id = "cyan";

$query = "SELECT * FROM favor WHERE wr_2='$sess_id'";
$row = $db->q($query);

$m1="☆";
$m2="☆";
$m3="☆";
$m4="☆";

$mm1="";
$mm2="";
$mm3="";
$mm4="";

foreach($row as $value){
	if($value[wr_1]=="영국"){
		$m1="★";
		$mm1="1";
	}
	if($value[wr_1]=="러시아"){
		$m2="★";
		$mm2="1";
	}
	if($value[wr_1]=="미국"){
		$m3="★";
		$mm3="1";
	}
	if($value[wr_1]=="일본"){
		$m4="★";
		$mm4="1";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<body>

<input type='hidden' class='leg1' value='<?=$mm1?>'><span class='msg1'><?=$m1?></span><input type='name' class='le1' value='영국'><input type='button' class='btn1' value='즐겨찾기'><br>
<input type='hidden' class='leg2' value='<?=$mm2?>'><span class='msg2'><?=$m2?></span> <input type='name' class='le2' value='러시아'><input type='button' class='btn2' value='즐겨찾기'><br>
<input type='hidden' class='leg3' value='<?=$mm3?>'><span class='msg3'><?=$m3?></span><input type='name' class='le3' value='미국'><input type='button' class='btn3' value='즐겨찾기'><br>
<input type='hidden' class='leg4' value='<?=$mm4?>'><span class='msg4'><?=$m4?></span><input type='name' class='le4' value='일본'><input type='button' class='btn4' value='즐겨찾기'><br>

</body>
</html>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.0/jquery.js"></script>

<script>
$('.btn1').click(function(){
	var fl = $(".leg1").val();
	var na = $(".le1").val();
	$.ajax({
		type: "POST",
		url: "./ajax.php",
		async:false,
		data: {na:na,fl:fl},
		dataType: "json",
		success: function (data) {
			console.log(data);
			if(data=='1'){
				$(".leg1").val(data);
				$(".msg1").html("★");
			}else if(data=='2'){
				$(".leg1").val("");
				$(".msg1").html("☆");
			}
		}

	});
});

$('.btn2').click(function(){
	var fl = $(".leg2").val();
	var na = $(".le2").val();
	$.ajax({
		type: "POST",
		url: "./ajax.php",
		async:false,
		data: {na:na,fl:fl},
		dataType: "json",
		success: function (data) {
			console.log(data);
			if(data=='1'){
				$(".leg2").val(data);
				$(".msg2").html("★");
			}else if(data=='2'){
				$(".leg2").val("");
				$(".msg2").html("☆");
			}
		}

	});
});

$('.btn3').click(function(){
	var fl = $(".leg3").val();
	var na = $(".le3").val();
	$.ajax({
		type: "POST",
		url: "./ajax.php",
		async:false,
		data: {na:na,fl:fl},
		dataType: "json",
		success: function (data) {
			console.log(data);
			if(data=='1'){
				$(".leg3").val(data);
				$(".msg3").html("★");
			}else if(data=='2'){
				$(".leg3").val("");
				$(".msg3").html("☆");
			}
		}

	});
});

$('.btn4').click(function(){
	var fl = $(".leg4").val();
	var na = $(".le4").val();
	$.ajax({
		type: "POST",
		url: "./ajax.php",
		async:false,
		data: {na:na,fl:fl},
		dataType: "json",
		success: function (data) {
			console.log(data);
			if(data=='1'){
				$(".leg4").val(data);
				$(".msg4").html("★");
			}else if(data=='2'){
				$(".leg4").val("");
				$(".msg4").html("☆");
			}
		}

	});
});
</script>
