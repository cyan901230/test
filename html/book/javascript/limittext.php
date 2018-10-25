<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="//code.jquery.com/jquery.min.js"></script>

</head>

<body>
<p>The best program is javaScript....!</p>
    
<script type="text/javascript">
	var str01 = "ab";
	var str02 = "abc";
	var str03 = "abccc";
	
	var ptn01=/abc+/ig;//n+적어도 하나이상, n개의 문자열을 찾는다.
	document.write("<b>1. ab: </b>"+ str01.match(ptn01)+"<br>");
	document.write("<b>2. abc: </b>"+ str02.match(ptn01)+"<br>");
	document.write("<b>3. abccc: </b>"+ str03.match(ptn01)+"<br>");
	
	var ptn02=/abc*/ig;//n* 0개 이상, n개가 포함된 문자열을 찾는다.
	document.write("<b>1. ab: </b>"+ str01.match(ptn02)+"<br>");
	document.write("<b>2. abc: </b>"+ str02.match(ptn02)+"<br>");
	document.write("<b>3. abccc: </b>"+ str03.match(ptn02)+"<br>");
	
	var ptn03=/abc?/ig;//n? n이 0 또는 1회 있는 문자열을 찾는다.
	document.write("<b>1. ab: </b>"+ str01.match(ptn03)+"<br>");
	document.write("<b>2. abc: </b>"+ str02.match(ptn03)+"<br>");
	document.write("<b>3. abccc: </b>"+ str03.match(ptn03)+"<br>");


</script>

</body>
</html>