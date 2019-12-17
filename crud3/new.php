<?php

$a="localhost";
$b="crud_user";
$c="crud_pass";
$d="crud";

$rahul=new mysqli($a,$b,$c,$d);

if($rahul->connect_error){
	die("connection failed:" . $rahul->connect_error);
	}else{
		$user=$_POST['user'];
		$pass=$_POST['pass'];
		$id=$_POST['id'];
		$add=$_POST['add'];
		
		$sql="INSERT into crud_tab(username,password,id,address)
			VALUES('$user','$pass','$id','$add')";
		if($rahul->query($sql) === TRUE){
			echo $message="record done";
			header('Location:site.php');
			
			}else{
				echo "error in add" . $sql . "<br>" . $rahul->error;
				}
		}


?>