<!DOCTYPE HTML>

<html>

 <head>

  <title> New Document </title>

<script src="http://code.jquery.com/jquery-latest.js"></script> <!-- 레이어 팝업에 필요한 jquery소스파일 -->

<script type="text/javascript">

	$(document).ready(function() {

		$('#close').click(function() {  //close라는 영역을 클릭했을때,

			$('#popup').hide();        //popup이라는 영역을 사라지게(혹은 숨겨지도록)

		});

	});

 </script>

 </head>
<style>
* {padding:0;margin:0}
.main_pop {

width:270px; //영역의 가로값

height:370px; //영역의 세로값

background:#FF1B7A; //영역의 배경색

color:#FFF;  //영역안의 텍스트색

position:absolute; top:200px; left:180px; //팝업창을 띄울 위치

text-align:center; 

border:2px solid #FF1B7A;

}



</style>



 <body>

      <!--  contents  -->

<div id="popup" class="main_pop">

<div id="contents" style="height: 360px;">

		<a href="#"><img src="URL" border=0></a>

	</div>

	<div id="close" style="width:50px; float:right;">

		close

	</div>

</div>

 </body>

</html>