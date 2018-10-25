<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="//code.jquery.com/jquery.min.js"></script>

</head>

<body>
<p>The best program is javaScript....!</p>
    
<script type="text/javascript">
	var str="The best program is javaScript....!";
	var ptn01=/^j/ig;//정규식으로 시작하는 문자를 찾는다.
	document.write("<b>1. </b>" + str.match(ptn01)+"<br>");
	var ptn02=/!$/ig;//정규식으로 끝나는 문자를 찾는다.
	document.write("<b>2. </b>" + str.match(ptn02)+"<br>");
	var ptn03=/\w/ig;//모든 문자를 찾는다.
	document.write("<b>3. </b>" + str.match(ptn03)+"<br>");
	var ptn04=/\W/ig;//알파벳 대/소문자, 숫자, '_'를 제외한 모든 문자를 찾는다.
	document.write("<b>4. </b>" + str.match(ptn04)+"<br>");
	var ptn05=/\d/ig;//숫자를 찾는다.
	document.write("<b>5. </b>" + str.match(ptn05)+"<br>");
	var ptn06=/\D/ig;//숫자를 제외하고 모든 문자를 찾는다.
	document.write("<b>6. </b>" + str.match(ptn06)+"<br>");
	var ptn07=/\s/ig;//공백 문자를 찾는다.
	document.write("<b>7. </b>" + str.match(ptn07)+"<br>");
	var ptn08=/\S/ig;//공백 문자를 제외하고 모든 문자를 찾는다.
	document.write("<b>8. </b>" + str.match(ptn08)+"<br>");



</script>

</body>
</html>