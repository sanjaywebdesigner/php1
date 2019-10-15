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
$sql = "SELECT * FROM register WHERE username='$user' AND password='$pass' ";
	$result = $rr->query($sql);
	if ($result->num_rows > 0) {
		$sanjay = $result->fetch_assoc() ;
		echo $sanjay['username']."<br>";
		echo $sanjay['password']."<br>";
		echo $sanjay['mobile']."<br>";
		echo $sanjay['mail']."<br>";
		echo $sanjay['address']."<br>";
	}
	else
	{
		echo "login failed";
	}
}
?>