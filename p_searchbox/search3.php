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
	
	<form action="#" method="post">
	
	<input type="text" name="name" placeholder="name">
		<input type="text" name="fame" placeholder="id">
		<input type="text" name="game" placeholder="detail">
		<input type="submit" name="submit">
	
	</form>
	
	
	
	
	</form>
	<?php
	
	$a="localhost";
$b="root";
$c="";
$d="team44";

$rahul=new mysqli($a,$b,$c,$d);

if($rahul->connect_error){
	die("connection failed:". $rahul->connect_error );
}
	if(isset($_POST['submit'])){
		
		$a1=$_POST['name'];
		$a2=$_POST['fame'];
		$a3=$_POST['game'];
		
		$sql="SELECT * FROM post WHERE title LIKE '%$a1' OR id LIKE '%$a2' detail LIKE '%$a3'";
		
		
		
		$result=$rahul->query($sql);
		
		while($row=$result->fetch_assoc()){
			?>
			<div class="main">
	
	<div class="tab"><?php echo $row['id'] ?></div>
	<div class="tab"><?php echo $row['title'] ?></div>
	<div class="tab"><?php echo $row['detail'] ?></div>
				</div>
			<?php
		}
	}else{
		$sql="SELECT * FROM post ";
		
		$result=$rahul->query($sql);
		
		while($row=$result->fetch_assoc()){
		?>
			<div class="main">
	
	<div class="tab"><?php echo $row['id'] ?></div>
	<div class="tab"><?php echo $row['title'] ?></div>
	<div class="tab"><?php echo $row['detail'] ?></div>
				</div>
			<?php
		}
	}
	
	?>
</body>
</html>