<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script  src="http://code.jquery.com/jquery-latest.min.js"></script>
    
	<style>
	.intro{
		font-size:150%;
		color:red;
	}
	</style>
	
	<script type="text/javascript">
		$(document).ready(function(){
			$("p").bind({
				mouseenter : function(){
					$(this).css("background-color", "lightgray");
				},
				mouseleave : function(){
					$(this).css("background-color", "lightblue");
				},
				click: function(){
					$(this).css("background-color", "yellow");
				}
			});
		});
    </script>
</head>

<body>
<p>sdlfjaldfjlwaejfl;wkaefjl</p>
</body>
</html>