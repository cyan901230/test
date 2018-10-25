<html>
<head>
<meta charset="UTF-8">
<script>
function Calc(){
	var x = Number(document.calculator.number1.value);
	var y = Number(document.calculator.number2.value);
	var result_Add = x + y;
	document.calculator.result.value=result_Add;
	
	var a = Number(document.calculator.number3.value);
	var b = Number(document.calculator.number4.value);
	var result_mi=a-b;
	document.calculator.result2.value=result_mi;
	
	var c = Number(document.calculator.number5.value);
	var d = Number(document.calculator.number6.value);
	var result_multi= c*d;
	document.calculator.result3.value=result_multi;
	
	var e = Number(document.calculator.number7.value);
	var f = Number(document.calculator.number8.value);
	var result_divi=e/f;
	document.calculator.result4.value=result_divi;

}

</script> 
</head>
<body>
<form name="calculator">
<a>더하기</a>
입력:<input type="text" name = "number1" size=10/>
입력:<input type="text" name = "number2" size=10/>
결과:<input type="text" name = "result"/>
<br>
<a>빼기</a>
입력:<input type="text" name = "number3" size=10/>
입력:<input type="text" name = "number4" size=10/>
결과:<input type="text" name = "result2"/>
<br>
<a>곱하기</a>
입력:<input type="text" name = "number5" size=10/>
입력:<input type="text" name = "number6" size=10/>
결과:<input type="text" name = "result3"/>
<br>
<a>나누기</a>
입력:<input type="text" name = "number7" size=10/>
입력:<input type="text" name = "number8" size=10/>
결과:<input type="text" name = "result4"/>
<br>
</form>
<button onclick="Calc()">...</button>

</body>
</html>