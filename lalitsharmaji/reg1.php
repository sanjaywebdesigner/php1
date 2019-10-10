<?php
$servername="localhost";
$username="umesh";
$password="12345";
$dbname="sharma";	
$conn = new mysqli($servername, $username, $password, $dbname);

	
	$sanjay=$_POST['username'];
	$sanjay1=$_POST['password'];
if(isset($_POST['gender']))
{
$gender=$_POST['gender'];
}
else{
	$gender="";
}
$hobbies=implode(",",$_POST['hobbies']);
$date=$_POST['date'];
$month=$_POST['month'];
$year=$_POST['year'];
$fulldate=$date."-".$month."-".$year;
$country=implode(",",$_POST['country']);
$sql="INSERT into sharma1(username,password,gender,hobbies,date,countryvisited) values('$sanjay','$sanjay1','$gender','$hobbies','$fulldate','$country')";
	$conn->query($sql);


?>