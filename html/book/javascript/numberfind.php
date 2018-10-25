<html>
<head>
<meta charset="UTF-8">
<script>
var a, cunt = 0, clac, num, temp;
function calc_b(){
	calc = Math.random()*100;
	num = parseInt(calc);
}
function calc_c(){
	temp = document.getElementById("x").value;
	a= parseInt(temp);
	if(a>num){
	document.getElementById("result").value="입력된 값이 큽니다.";
	}else if(a<num){
	document.getElementById("result").value="입력된 값이 작습니다.";
}else{
		document.getElementById("result").value="축하합니다.";
	}
	cunt +=1;
	document.getElementById("calc").value=cunt;
}
</script> 
</head>
<body>
<h2>숫자맞추기</h2>
숫자입력:<input id="x"/>
입력결과:<input id="result"/><br>
반복횟수:<input id="calc"/><br>

<input type="button" value="숫자지정" onclick="calc_b();"/>
<input type="button" value="찾기" onclick="calc_c();"/>


</select>
</form>

</body>
</html>