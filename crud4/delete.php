<?php

$a="localhost";
$b="crud_user";
$c="crud_pass";
$d="crud";

$rahul=new mysqli($a,$b,$c,$d);

if($rahul->connect_error){
	die("connection failed:" . $rahul->connect_error);
	}else{
		$ss=$_GET["username"];
		
		$sql="DELETE from crud_tab WHERE username='$ss'";
		
		if($rahul->query($sql) === TRUE){
			header("Location:site.php");
			
			}else{
				echo "error in deletion";
				}
		
		}

?>