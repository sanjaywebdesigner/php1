<?php
session_start();
session_destroy();
$a="localhost";
$b="root";
$c="";
$d="crud";

$rahul=new mysqli($a,$b,$c,$d);

$sql="SELECT * FROM crud_tab ORDER BY  username DESC";



$result = $rahul->query($sql);


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>

.big_tab{width:600px;}

.tab{text-align:center;
	line-height:48px;
	width:198px;
	height:48px;
	border:1px solid black;
	float:left;}

</style>
</head>

<body>
<a href="new_user.php"><input type="submit" value="New user"></a>
<a href="logout.php"><input type="submit" value="logout"></a>
<div class="big_tab">
<div class="message"><?php if(isset($message)){ echo $message;} ?></div>
<?php
while($row = $result->fetch_assoc()){
	
	$user=$row['username'];
	$pass=$row['password'];
	
?>
<div class="tab"><?php echo $user; ?></div>
<div class="tab"><?php echo $pass; ?></div>
<div class="tab">
<a href="edit.php?username=<?php echo $user ?>">edit</a>
<a href="delete.php?username=<?php echo $user ?>">delete</a>
<a href="profile.php?username=<?php echo $user ?>">profile</a>
</div>
<?php
}
?>
</div>


</body>
</html>