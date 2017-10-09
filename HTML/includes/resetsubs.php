<?php  

include_once 'dbh.inc.php';

$sql = "DELETE * FROM subs;";
mysqli_query($conn,$sql);


$sql = "ALTER TABLE subs AUTO_INCREMENT = 1;";
mysqli_query($conn,$sql);

$sql = "INSERT INTO subs (userId, package1, package2, package3, package4) VALUES (1,1,1,1,1);";
mysqli_query($conn,$sql);

?>