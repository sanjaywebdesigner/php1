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
else
{
$user=$_POST['username'];
$pass=$_POST['password'];
$sql = "SELECT * FROM practice WHERE username='$user' AND password='$pass' ";
	$result = $rr->query($sql);
	if ($result->num_rows > 0) {
		$lalit = $result->fetch_assoc() ;
		echo $lalit['contact']."<br>";
		echo $lalit['username']."<br>";
		echo $lalit['password']."<br>";	
	}
	else
	{
		echo "login failed";
	}
}
?>