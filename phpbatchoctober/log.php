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
	
$user=$_POST['user'];
		


$pass=$_POST['pass'];
	
$phone=$_POST['mob'];
$email=$_POST['mail'];
$address=$_POST['add'];
	
	$sql="INSERT into register(username,password,mobile,mail,address) VALUES('$user','$pass','$phone','$email','$address')";
	if ($rr->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $rr->error;
}
	
}
?>