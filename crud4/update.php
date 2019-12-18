<?php
$a="localhost";
$b="crud_user";
$c="crud_pass";
$d="crud";

$rahul=new mysqli($a,$b,$c,$d);

$user=$_POST['user'];
$pass=$_POST['pass'];
$id=$_POST['id'];
$add=$_POST['add'];

$sql="UPDATE crud_tab SET password='$pass' , id='$id' , address='$add' WHERE username='$user'";
if($rahul->query($sql) === TRUE){
	header("Location:site.php");
	
	}else{
		echo "updation failed";
		}
?>