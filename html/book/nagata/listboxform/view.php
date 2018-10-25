<html>
<head>
<meta charset="UTF-8"> 
</head>
<body>
<?php
if(isset($_POST["hobby"]) != ""){
	foreach($_POST["hobby"] as $k){
		print $k;
	}
}



?>




</select>
</form>

</body>
</html>