<html>
<head>
<meta charset="UTF-8">

<script>
var myinfo={
	name:"시안",
	age:29,
	info:function (content){
		alert(myinfo.name+"의"+content);
	}
}
myinfo.info("정보보기");
document.write("이름:"+myinfo.name+"<br>나이:"+myinfo.age);
</script>
</head>
<body>

</body>
</html>