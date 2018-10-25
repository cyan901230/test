<html>
<head>
<meta charset="UTF-8">
<script>
function aa(){
	var i=0;
	var array =["사과", "바나나", "키위", "딸기"];
	while(i< array.length){
		document.write(array[i]+"<br>");
		i++;
	}
}

function bb(){
	var i=0;
	var array =["사과", "바나나", "키위", "딸기"];
	do{
		document.write(array[i]+"<br>");
		i++
	}while(i< array.length);
}

function cc(){
	var remain=0;
	var array=[1,31,57,23,80,5,4];
	for( var i=0;i<array.length; i++){
		remain=array[i]%2;
		if(remain ==0) break;
		document.write(array[i]+"<br>");
	}
}

function dd(){
	for(var i=0;i<=6;i++){
		if(i==3){
			document.write("현제 반복문 내의 다음 코드를 생략..."+"<br>");
			continue;
		}
		document.write("conut="+i+"<br>");
	}
	
}
</script> 
</head>
<body>
<input type="button" onclick="aa()" value="while"/>
<input type="button" onclick="bb()" value="dowhile"/>
<input type="button" onclick="cc()" value="break"/>
<input type="button" onclick="dd()" value="continue"/>

</select>
</form>
</body>
</html>