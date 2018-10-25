<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="//code.jquery.com/jquery.min.js"></script>

</head>

<body>



<button onclick="myFunction()">Sort</button>
<p id="demo"></p>


    <script type="text/javascript">
     var cars = [
	 {type:"VOlvo", year:2016},
	 {type:"Saab", year:2001},
	 {type:"BMW", year:2010}
	 ]
	 
	 displayCars();
	 function myFunction(){
		 cars.sort(function(a, b){return a.year - b.year});
		 displayCars();
	 }
	 function displayCars(){
		document.getElementById("demo").innerHTML =
		cars[0].type + " " + cars[0].year + "<br>" +
		cars[1].type + " " + cars[1].year + "<br>" +
		cars[2].type + " " + cars[2].year;
	 }
    </script>
</body>
</html>