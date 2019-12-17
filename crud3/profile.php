<?php 
session_start();
$a="localhost";
$b="root";
$c="";
$d="crud";

$rahul=new mysqli($a,$b,$c,$d);
error_reporting(0);
if(isset($_SESSION['dd']))
{
	$ss=$_SESSION['dd'];
}
else
{
$ss=$_GET['username'];
$_SESSION['dd']=$ss;
}
$sql="SELECT * FROM crud_tab WHERE username='$ss'";

$sql1="SELECT * FROM crud_tab ORDER BY username DESC";

$result = $rahul->query($sql);

$result1 = $rahul->query($sql1);

$row = $result->fetch_assoc();

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
	
	.pos{clear: both;}
	
			page_links
 {
  font-family: arial, verdana;
  font-size: 12px;
  border:1px #000000 solid;
  padding: 6px;
  margin: 3px;
  background-color: #cccccc;
  text-decoration: none;

 }
 #page_a_link
 {
	 
  font-family: arial, verdana;
  font-size: 12px;
  border:1px #000000 solid;
  color: #ff0000;
  background-color: #cccccc;
  padding: 6px;
  margin: 3px;

  text-decoration: none;
 }
	
	
	
ul{margin:0;
	padding:0;}
	
	li{list-style-type:none;
		width:248px;
		height:68px;
		font-size:20px;
		border:1px solid black;
		background-color:yellow;
		line-height:68px;
		text-align:center;
		}
		
	
		
		.pic{width:30%;
			height:300px;
			background-color:blue;
			float:left;}
			
			.pro{width:30%;
			height:300px;
			padding-left:10%;
			background-color:skyblue;
			float:left;}
			
			
			.c_s{width:30%;
			height:300px;
			float:left;
			background-color:blue;}
			
			.sec{width:600px;}
			
			.tab{width:198px;
				height:48px;
				float:left;
				border:1px solid black;
				}
				
	.fee{width:198px;
				height:48px;
				float:left;
				border:1px solid black;}
				
	.feemain{width:850px;}

</style>
</head>

<body>
<div class="top">
<div class="pic">1</div>
<div class="pro">
<ul>
<li>name:<?php echo $row['username']; ?></li>
<li>password:<?php echo $row['password']; ?></li>
<li>id:<?php echo $row['id']; ?></li>
<a href="aa.php"><li>address:<?php echo $row['address']; ?></li></a>
</ul>
</div>
<div class="c_s">3</div>
</div>
<div class="down">
<form action="" method="post">

<input type="text" name="mon" placeholder="Month_name">
<input type="text" name="fee" placeholder="Fee_amount">
<input type="text" name="bal" placeholder="Balance_amount">
<input type="text" name="adv" placeholder="Advance_amount">
<input type="submit">

</form>
<?php

$sql_mul="CREATE TABLE $ss(
month VARCHAR(30) PRIMARY KEY,
fees VARCHAR(30) ,
balance VARCHAR(30) ,
advance VARCHAR(30) 

)";
	
	if($rahul->query($sql_mul)=== TRUE){
		
		echo "table is done";
	}else{
		
		echo"tabli is failed:"."<br>".$sql_mul."<br>".$rahul->error;
	}

$mm=$_POST['mon'];
$ff=$_POST['fee'];
$bb=$_POST['bal'];
$aa=$_POST['adv'];

$sql_in="INSERT into $ss(month,fees,balance,advance) VALUES('$mm','$ff','$bb','$aa')";

if($rahul->query($sql_in)=== TRUE){
	
	echo "fee record updated successfully";
	
	}else{
		echo "error in updation";
		}
		
?>



	
<?php

$perpage= 2;

if(isset($_GET["page"])){
	
	$page=intval($_GET["page"]);
	
	
	}else{
		$page=1;
		}
$start=$page*$perpage-$perpage;

	
	$sql_pg="SELECT * FROM $ss LIMIT $start, $perpage	";
	
	$result_pg=$rahul->query($sql_pg);
	
	if($result_pg->num_rows > 0){
		
		$i=0;
		
		while($row_pg=$result_pg->fetch_assoc()){
$gmm=$row_pg['month'];
$gff=$row_pg['fees'];
$gbb=$row_pg['balance'];
$gaa=$row_pg['advance'];
?>
<div class="feemain">
<div class="fee"><?php echo $gmm ?></div>
<div class="fee"><?php echo $gff ?></div>
<div class="fee"><?php echo $gbb ?></div>
<div class="fee"><?php echo $gaa ?></div>
</div>
<?php 		
			
		}
		
	}
	
	if(isset($page)){
		
		$sql_pg2="SELECT COUNT(*) As Total FROM user";
		
		$result_pg2=$rahul->query($sql_pg2);
		
		if($result_pg2->num_rows > 0){
		
		$row_pg2=$result_pg2->fetch_assoc();
			
			$total=$row_pg2["Total"];
			
		
	}
	$totalpages=ceil($total / $perpage);
		echo"<div class='pos'>";
		if($page<=1){
			
			
			echo "<span id='page_links' style='font-weight:bold;'>start</span>";
		}else{
				
			$j=$page - 1;
			
echo "<span><a href='profile.php?page=$j' id='page_a_link' style='font-weight:bold' ; >< Prev</a></span>";		
				}
		
		for($i=1 ; $i<=$totalpages;$i++){
			
			
				
	echo "<span><a href='profile.php?page=$i' id='page_a_link' style='font-weight:bold;'>$i</a></span>";
				}
			if($page == $totalpages){
			echo "<span id='page_links' style='font-weight:bold;'>last</span>";
			}else{
				
				$j= $page + 1;
				
echo "<span><a href='profile.php?page=$j' id='page_a_link' style='font-weight:bold;'>last</a></span>";
				}
		}
	echo"</div>";
	?>
</div>
</div>
</body>
</html>