<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="//code.jquery.com/jquery.min.js"></script>

</head>

<body>
<input id="demo" type="text">
<button type="button" onclick="myFunction()">test input</button>
<p id="message"></p>
    
<script type="text/javascript">
	function myFunction(){
		var x = document.getElementById("demo").value;
		try{
			if(x == "") throw "empty";
			if(isNaN(x)) throw "not a number";
			x = Number(x);
			if(x < 5 ) throw "too law";
			else if (x > 10) throw "too hight";
			else throw "good data";
		}
		catch(err){
			msg = err;
		}finally {
			if(msg==undefined)
				document.getElementById("message").innerHTML = "Good Data";
			else 
				document.getElementById("message").innerHTML = "Input " + msg;
		}
	}
</script>



</body>
</html>