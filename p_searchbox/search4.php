<?php
	
	$a="localhost";
$b="root";
$c="";
$d="team44";

$rahul=new mysqli($a,$b,$c,$d);

if($rahul->connect_error){
	die("connection failed:". $rahul->connect_error );
}

if(isset($_POST['submit'])) {
        $sql = mysql_query("SELECT * FROM post WHERE id LIKE '%" . $_POST['name'] . "%'
                   OR title LIKE '%" . $_POST['add'] . "%'
                   OR detail LIKE '%" . $_POST['cit'] . "%'
                   ");
    }





?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	 <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" /></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="text" name="add" /></td>
            </tr>
            <tr>
                <td>City:</td>
                <td><input type="text" name="cit" /></td>
            </tr>
            
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="submit" value="Search" /></td>
            </tr>
        </form>
    </table>
</body>
</html>
<?php
        if(isset($_POST['submit'])) {
            while($row = mysql_fetch_array($sql)) {
                echo $row['name'] . "<br />";
            }
        }   
    ?>