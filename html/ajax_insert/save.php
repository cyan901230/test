<?php

if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email']) && isset ($_POST['pass'])) {

$con = mysql_connect("localhost","cyan","shot9012");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("cyan", $con);



$name=$_POST['name'];
$surname=$_POST['surname'];
$email=$_POST['email'];
$pass=$_POST['pass'];
    $query = "INSERT INTO `user` (`name`, `surname`, `email`, `pass`) VALUES ('$name','$surname','$email','$pass')";
    $resource = mysql_query($query) 
        or die (mysql_error());
    
}

?>