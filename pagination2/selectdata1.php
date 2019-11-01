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
$sql = "SELECT* FROM post WHERE title='CMS'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "<table border='1'>";
echo "<tr>";
echo "<td>title</td>";
echo "<td>".$row['title']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>detail</td>";
echo "<td>".$row['detail']."</td>";
echo "</tr>";
echo "</table>";
?>