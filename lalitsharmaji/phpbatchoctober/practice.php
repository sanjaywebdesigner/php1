<?php
$servername="localhost";
$username="batch";
$password="123";
$database="phpbatchoctober";
$rr = new mysqli($servername, $username, $password, $database);
if ($rr->connect_error) {
    die("Connection failed: " . $rr->connect_error);
} 
else
{
$contact=$_POST['contact'];
$user=$_POST['username'];
$pass=$_POST['password'];
	$sql="INSERT into rlalit(contact,username,password) VALUES('$contact','$user','$pass')";
	$rr->query($sql);
	
	
}
?>