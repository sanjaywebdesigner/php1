<?php
session_start();
if(isset($_SESSION['a1']))
{

	
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
	echo $pass;
$mobile=$_POST['mobile'];
$mail=$_POST['mail'];
$address=$_POST['address'];
	$gg1=$_SESSION['a1'];
	$gg=$_SESSION['a2'];
$sql = "UPDATE register SET password='$pass' WHERE username='$gg1' AND password='$gg'";

$rr->query($sql);
session_destroy();
header("Location:loginsession1ddddd.php");	
}
	
	
	
}
else
{
	header("Location:loginsession.html");
}
	?>