<?php
$servername="localhost";
$username="umesh";
$password="12345";
$dbname="sharma";	
$conn = new mysqli($servername, $username, $password, $dbname);

	
	$sanjay=$_POST['username'];
	$sanjay1=$_POST['password'];
$sql="INSERT into sharma1(username,password) values('$sanjay','$sanjay1')";
	$conn->query($sql);


?>