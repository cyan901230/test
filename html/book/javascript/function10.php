<html>
<head>
<meta charset="UTF-8">
<script>

function add(){
	var len=arguments.length;
	if(len<2){
		document.write('두개 이상의 숫자를 입력하세요.');
	}else {
		var sum = 0;
		for(var idx in arguments){
			sum = sum + arguments[idx];
		}
		return sum;
	}
}
	
</script> 
</head>
<body>
<script>
document.write('add() 결과' + add()+'<br>');
document.write('add(100) 결과' + add(100)+'<br>');
document.write('add(100, 200) 결과' + add(100, 200)+'<br>');
document.write('add(100, 200, 300) 결과' + add(100, 200, 300)+'<br>');
</script>

</body>
</html>