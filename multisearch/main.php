<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "team44";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$aa=$_POST['ss'];
$sql = "SELECT* FROM post WHERE title='$aa'";
$result = $conn->query($sql);
echo "<select name='bb'>";
while($row = $result->fetch_assoc()) {
	echo "<option>".$row['id']."</option>";
	}
echo "</select>";
?>