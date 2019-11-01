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
$sql = "SELECT* FROM post WHERE title LIKE '_sanjay%'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
	?>
    <head>
    <style>
    .ss{width:1000px;
	height:50px;
	border:1px solid black;
	}
    </style>
    <head>
    <?php
echo "<div class='ss'>";
echo "title: ".$row['title']."<br>";
echo "description: ".$row['detail']."<br>";
echo "</div>";
}
?>