<?php
$servername="localhost";
$username="rihan";
$password="123456";
$dbname="human";	
$conn = new mysqli($servername, $username, $password, $dbname);

	
	$sanjay=$_POST['username'];
	$sanjay1=$_POST['password'];
$sql="INSERT into word(username,password) values('$sanjay','$sanjay1')";
	$conn->query($sql);


?>