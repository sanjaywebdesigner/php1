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
		echo "<table border='1'>";
		echo "<tr>";
		echo "<td>".$sanjay['username']."</td>";
		echo "<td>".$sanjay['password']."</td>";
		echo "<td>".$sanjay['mobile']."</td>";
		echo "<td>".$sanjay['mail']."</td>";
		echo "<td>".$sanjay['address']."</td>";
		echo "</tr>";
		echo "</table>";
	}
	else
	{
		echo "login failed";
	}
}
?>