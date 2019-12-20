<!DOCTYPE html>
<html>
<body>

<?php
$date1=date_create("2018-11-1");
$date2=date_create("2019-12-20");
$diff=date_diff($date1,$date2);
echo $diff->format("%R%a days");
?>

</body>
</html>
