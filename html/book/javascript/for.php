<html>
<head>
<meta charset="UTF-8">
<script>
function gg(){
for(var i=0;i<=100;i++){
	document.write("Hello!!"+"<br>");
}
}

function ee(){
	for(var e=0;e<=5;e++){
		document.write("당신은 우리집을 "+e+"번 방문 하였습니다."+"<br>")
	}
}

function ww(){
	var friuts=["apple", "mango", "orange", "lemon", "pear"];
	for(var j=0, len=friuts.length; j<len; j++){
		document.write(friuts[j]+"<br>");
	}
}

function gugu(){
	var result;
	for(var i=1;i<10;i++){
		for(var j=1;j<10;j++){
			result = i*j;
			document.write(i+"*"+j+"="+result+"<br>");
		}
	}
}

function forin(){
	var friuts=["apple", "mango", "orange", "lemon", "pear"];
	for(var i in friuts){
		document.write(friuts[i]+"<br>")
	}
}
</script> 
</head>
<body>
<input type="button" onclick="gg()" value="버튼1"/>
<input type="button" onclick="ee()" value="버튼2"/>
<input type="button" onclick="ww()" value="버튼3"/>
<input type="button" onclick="gugu()" value="구구단"/>
<input type="button" onclick="forin()" value="for_in"/>
</body>
</html>