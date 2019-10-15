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


$sql = "SELECT * FROM marks WHERE marks>=50 ";
	$result = $rr->query($sql);
	echo "<table border='1'>";
	if ($result->num_rows > 0) {
		while($sanjay = $result->fetch_assoc()) {
		
		echo "<tr>";
		echo "<td>".$sanjay['username']."</td>";
		echo "<td>".$sanjay['marks']."</td>";
	
		echo "</tr>";
		
	}
		echo "</table>";
	}
	else
	{
		echo "login failed";
	}
}
?>