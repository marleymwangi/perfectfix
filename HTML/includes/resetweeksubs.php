#!/usr/bin/php -q
<?php  

include_once 'dbh.inc.php';

$sql = "UPDATE subs SET package1 = 0;";
mysqli_query($conn,$sql);
if (!mysqli_query($con,$sql))
  {
  echo("Error description: " . mysqli_error($con));
  }

 $sql = "UPDATE subs SET pk1sms = 0;";
mysqli_query($conn,$sql);
if (!mysqli_query($con,$sql))
  {
  echo("Error description: " . mysqli_error($con));
  }


$sql = "UPDATE subs SET package1 = 1 WHERE 	userId = 1;";
mysqli_query($conn,$sql);
if (!mysqli_query($con,$sql))
  {
  echo("Error description: " . mysqli_error($con));
  }

?>