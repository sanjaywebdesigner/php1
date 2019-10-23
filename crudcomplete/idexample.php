
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog_samples";

$conn = new mysqli($servername, $username, $password, $dbname);
$x=102;
global $x;
$user=$_POST['username'];
$pass=$_POST['password'];
$sql = "INSERT INTO main1 (id, username, password)
VALUES ('$x', '$user', '$pass')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	$x++;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>

