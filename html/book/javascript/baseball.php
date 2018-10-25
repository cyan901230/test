<html>
<head>
<meta charset="UTF-8">
<script>
var a, cunt = 0, clac, temp;
var num = [];

function calc_b(){
	num[0]= parseInt(Math.floor(Math.random()*10));
	num[1]= parseInt(Math.floor(Math.random()*10));
	while(num[1]==num[0]){
	num[1]=Math.floor(Math.random()*10);
	};
	num[2]= parseInt(Math.floor(Math.random()*10));
	while((num[2]==num[0])||(num[2]==num[1])){
		num[2]=Math.floor(Math.random()*10);
	}
	
	document.getElementById("num").value=num;
	if(num!=""){
		document.getElementById("dd").value="숫자생성";
	}

}

function calc_c(){
	var strike=0;
	var ball =0;
	temp = document.getElementById("x").value;
	var arr = temp.split("");
	if(arr[0]==arr[1] || arr[1]==arr[2] || arr[2]==arr[0]){
		alert("중복된 숫자가 있습니다.");
	}else{
	for (var m=0;m<3;m++){
		if(Number(arr[m]) == num[m])
		strike++;
		for (var n=0;n<3;n++){
			if((m!=n)&&(arr[m]==num[n])){
				ball++;
			}
		}
	}
	if(strike == 3 ){
		alert("3스트라이크");
	}else{
		document.getElementById("result").value=strike+"S"+ball+"B";
	}
	cunt += 1;
	document.getElementById("calc").value=cunt;
}
}
</script> 
</head>
<body>
<h2>야구</h2>
<input type="hidden"id="num"size=3/>

<input id="dd" disabled /><br>
숫자입력:<input id="x" size=3 />
입력결과:<input id="result" disabled /><br>
반복횟수:<input id="calc" disabled /><br>

<input type="button" value="숫자지정" onclick="calc_b();"/>
<input type="button" value="찾기" onclick="calc_c();"/>


</select>
</form>

</body>
</html>