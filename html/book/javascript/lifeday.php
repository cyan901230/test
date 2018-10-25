<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="//code.jquery.com/jquery.min.js"></script>

</head>

<body>
<form>
년도<input  id="year"></input>
월<input  id="month"></input>
일<input id="day"></input>
<button type="button" onclick="sevivalCalc()">계산</button>
<p id="result"></p>
</form>
    
	<script type="text/javascript">


	function sevivalCalc(){
		var today=new Date();
		var year=parseInt(document.getElementById("year").value);
		var month=parseInt(document.getElementById("month").value);
		var day=parseInt(document.getElementById("day").value);
	
		var myBoth = new Date();
		myBoth.setFullYear(year, month, day);
		today_Mili = Date.parse(today);
		both_Mili = Date.parse(myBoth);
		result = today_Mili - both_Mili;
		resulte=result/1000/60/60/24;
		
	
	document.getElementById("result").innerHTML=resulte;
	}
	
	
    </script>

</body>
</html>