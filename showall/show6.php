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
	 
		   $sanjay = explode(",",$row["hobbies"]);
		   
		
			 if($sanjay[0]=="singing")
			 {
				 echo "Singing<input type='checkbox' checked>";
			 }
	else
	{
		echo "Singing<input type='checkbox'>";
	}
	if($sanjay[1]=="reading")
			 {
				 echo "Reading<input type='checkbox' checked>";
			 }
	else
	{
		echo "Reading<input type='checkbox'>";
	}
	
	if($sanjay[2]=="playing")
			 {
				 echo "Playing<input type='checkbox' checked>";
			 }
	else
	{
		echo "Playing<input type='checkbox'>";
	}	
          
}

$conn->close();
?>