<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script  src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript">
		$(document).ready(function(){
			function aniDiv(){
				$("div:eq(0)").animate({width:"50%"}, "slow");
				$("div:eq(0)").animate({width:"100%"}, "slow", aniDiv);
			}
			aniDiv();
			$(".btn1").click(function(){
				$(":animated").css("background-color", "red");
			});
			});
    </script>
</head>

<body>
<button class="btn1">Change color of the animated element</button>
<div style="background:blue;">Div 1</div>
<div style="background:green;">Div 2</div>
</body>
</html>