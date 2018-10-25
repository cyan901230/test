<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script  src="http://code.jquery.com/jquery-latest.min.js"></script>

	
	<script type="text/javascript">
		$(document).ready(function(){
			$("p").on("myOwnEvent", function(event, showName){
				$(this).text(showName + "! What a beatiful name!").show();
			});
			$("button").click(function(){
				$("p").trigger("myOwnEvent", ["Park.S.B"]);
			});
		});
    </script>
</head>

<body>
<button>Trigger custom event</button>
<p>sdlfjaldfjlwaejfl;wkaefjl</p>
</body>
</html>