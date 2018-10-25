<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script  src="http://code.jquery.com/jquery-latest.min.js"></script>
	
	<script type="text/javascript">
		function handlerName(event){
			$("#demo").text(event.data.msg);
		}
		$(document).ready(function(){
			$("p").on("click", {msg:"You just clicked me!"}, handlerName)
		})
    </script>
</head>

<body>
<p>Click me!</p>
<p id="demo"></p>
</body>
</html>