<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "team44";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

?>
<!DOCTYPE html>
<head>
<meta charset="utf-8" />
<title>Pagination</title>
<link href="style.css" rel="stylesheet" type="text/css" />
	<style>
	.s1{
	width:1000px;
	height:55px;
	border:1px solid black;
	
}
		h2{
			margin-left:50px;
		}
	</style>
</head>

<body>


<?php



if(isset($_GET["page"])){
	$page = intval($_GET["page"]);
}
else {
$page = 1;
}
$calc = 5 * $page;
$start = $calc - 5;
	$sql = "select * from post Limit $start, 5";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
	$i = 0;
	while($row = $result->fetch_assoc()) {
?>


<div class="s1">
<h1><?php echo $row["title"];?></h1>
	</div>


<div class="s1">
<h2><?php echo $row["detail"]; ?></h2>
	</div>
<?php
}
}
?>





<?php

if(isset($page))

{
$sql = "select count(*) As Total from post";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
$rs = $result->fetch_assoc();


$total = $rs["Total"];

}

$totalPages = ceil($total / 5);

if($page <=1 ){

echo "<span id='page_links' style='font-weight: bold;'>Prev</span>";

}

else

{

$j = $page - 1;

echo "<span><a id='page_a_link' href='pagination.php?page=$j'> Prev</a></span>";

}

for($i=1; $i <= $totalPages; $i++)

{

if($i<>$page)

{

echo "<span><a id='page_a_link' href='pagination.php?page=$i'>$i</a></span>";

}

else

{

echo "<span id='page_links' style='font-weight: bold;'>$i</span>";

}

}

if($page == $totalPages )

{

echo "<span id='page_links' style='font-weight: bold;'>Next ></span>";

}

else

{

$j = $page + 1;

echo "<span><a id='page_a_link' href='pagination.php?page=$j'>Next</a></span>";

}

}

?>


</body>
</html>