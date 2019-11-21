<?php
$servername="localhost";
$username="root";
$password="";
$dbname="showall";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$name=$_POST['username'];
$pass=$_POST['password'];
$sql = "SELECT * FROM show1 WHERE username='$name' AND password='$pass' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc() ;
        echo "name is " .$row['username']."<br>";
	echo "name is " .$row['password']."<br>";
	?>
<input type="radio" value="male" 
	 <?php echo $row["gender"]=="male"?'checked':'';?>>Male<br><input type="radio" value="female" 
	 <?php echo $row["gender"]=="female"?'checked':'';?>>Female<br><input type="radio" value="female" 
	 <?php echo $row["gender"]=="others"?'checked':'';?>>others
<?Php
    }
 else {
    echo "failed";
}


$conn->close();

?>