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
		$_SESSION['a1']= $sanjay['username'];
		$_SESSION['a2']=$sanjay['password'];
		$_SESSION['a3']=$sanjay['mobile'];
		$_SESSION['a4']=$sanjay['mail'];
		$_SESSION['a5']=$sanjay['address'];
		header("Location:profilessa1.php");
	}
	else
	{
		echo "login failed";
	}
}
?>