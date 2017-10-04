<?php  

include_once 'dbh.inc.php';

$sql = "DELETE * FROM subs;";
mysqli_query($conn,$sql);


$sql = "ALTER TABLE subs AUTO_INCREMENT = 1;";
mysqli_query($conn,$sql);

?>