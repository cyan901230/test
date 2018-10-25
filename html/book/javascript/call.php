<html>
<head>
<meta charset="UTF-8">

</head>
<body>

<div id="demo01"></div>
<p id="demo02"></p>
<script>
var person={
	firstName:"John",
	lastName:"Goodman",
	fullName:function(){
		return this.firstName+" "+this.lastName;
	}
}

var myObject={
	firstName:"Mary",
	lastName:"Lockman"
}

x=person.fullName(myObject);
document.getElementById("demo01").innerHTML=x;
y=person.fullName.call(myObject);
document.getElementById("demo02").innerHTML=y;
</script>
</body>
</html>