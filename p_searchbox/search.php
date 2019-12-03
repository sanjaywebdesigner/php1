<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="#" method="post">
	<input type="text" name="iname" onkeyUp>
		
	</form>
</body>
</html>
<?php
$a="localhost";
$b="root";
$c="";
$d="team44";

$rahul=new mysqli($a,$b,$c,$d);

if($rahul->connect_error){
	die("connection failed:". $rahul->connect_error );
}else{
	
	
	
	if(isset($_POST['iname'])){
		
		$in=$_POST['iname'];
	
	$sql_search="SELECT * FROM post  WHERE title LIKE '%$in'";
	
	$result_search=$rahul->query($sql_search);
	
	
	
	while($row_search=$result_search->fetch_assoc()){
	
	
	
	
	

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<style>
	
		.main	{width:600px;}
		.tab	{width:198px;
				height:78px;
				border:1px solid black;
				float:left;
				line-height: 78px;
				text-align: center;
				}	
	</style>
</head>

<body>
	
	<div class="tab">ID</div>
	<div class="tab">TITLE</div>
	<div class="tab">DETAIL</div>
	<div class="main">
	<div class="tab"><?php  echo $id ?></div>
	<div class="tab"><?php  echo $title ?></div>
	<div class="tab"><?php  echo $detail ?></div>
	<?php 
		}
		}else{
	
	$sql="SELECT * FROM post";
	
	$result=$rahul->query($sql);
	
	$result->num_rows>0;
	
	while($row=$result->fetch_assoc()){
	
	$id=$row['id'];
	$title=$row['title'];
	$detail=$row['detail'];
	
	?>
	<div class="main">
	<div class="tab"><?php  echo $id ?></div>
	<div class="tab"><?php  echo $title ?></div>
	<div class="tab"><?php  echo $detail ?></div>
	
	
	</div>
	<?php
		}
}
}
?>
</body>
</html>