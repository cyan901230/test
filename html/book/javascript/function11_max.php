<html>
<head>
<meta charset="UTF-8">
<script>
	function findMax(){
		var i;
		var max= 0;
		for(i=0; i< arguments.length; i++){
			if(arguments[i] > max){
				max = arguments[i];
			}
		}
		return max;
	}
	
	function sumAll(){
		var i, sum = 0;
		for(i=0;i<arguments.length;i++){
			sum += arguments[i];
		}
		return sum;
	}
	document.write("인수의 최대값: " +findMax(1, 123, 500, 115, 44, 89)+"<br>");
	document.write("인수의 합: "+ sumAll(1, 123, 500, 115, 44, 89));

</script> 
</head>
<body>
<script>

</script>

</body>
</html>