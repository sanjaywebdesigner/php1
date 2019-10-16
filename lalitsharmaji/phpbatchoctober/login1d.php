<?php
session_start();
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
$sql = "SELECT * FROM register WHERE username='$user' AND password='$pass' ";
	$result = $rr->query($sql);
	if ($result->num_rows > 0) {
		$sanjay = $result->fetch_assoc() ;
		
		$_SESSION['username']=$sanjay['username'];
		$_SESSION['password']=$sanjay['password'];
		$_SESSION['mobile']=$sanjay['mobile'];
		$_SESSION['mail']=$sanjay['mail'];
		$_SESSION['address']=$sanjay['address'];
		
		header("Location: pp2.php");

	}
	else
	{
		echo "login failed";
	}
}
?>