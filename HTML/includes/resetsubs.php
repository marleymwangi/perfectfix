#!/usr/bin/php -q
<?php  

include_once 'dbh.inc.php';

$sql = "DELETE FROM subs;";
mysqli_query($conn,$sql);
if (!mysqli_query($con,$sql))
  {
  echo("Error description: " . mysqli_error($con));
  }


$sql = "ALTER TABLE subs AUTO_INCREMENT = 1;";
mysqli_query($conn,$sql);
if (!mysqli_query($con,$sql))
  {
  echo("Error description: " . mysqli_error($con));
  }

$sql = "INSERT INTO subs (userId, package1, package2, package3, package4) VALUES (1,1,1,1,1);";
mysqli_query($conn,$sql);
if (!mysqli_query($con,$sql))
  {
  echo("Error description: " . mysqli_error($con));
  }

?>