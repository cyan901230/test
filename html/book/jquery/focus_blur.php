<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script  src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript">
	$(document).ready(function(){
		$("input").focus(function(){
			$(this).css("background-color", "#cccccc");
		});
		$("input").blur(function(){
			$(this).css("background-color", "#ffffff");
		});
	});
    </script>
</head>

<body>
Name:<input type="text" name="fullname"><br>
Email:<input type="text" name="email"><br>
</body>
</html>