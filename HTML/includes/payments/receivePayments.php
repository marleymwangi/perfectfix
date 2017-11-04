<?php

include_once '../dbh.inc.php';

$data  = json_decode(file_get_contents('php://input'), true);
print_r($data);
// Process the data...
$category = $data["category"];
if ( $category == "MobileC2B" ) {
   // We have been paid by one of our customers!!
   $phoneNumber = $data["source"];
   $value       = $data["value"];
   $account     = $data["clientAccount"];

   $sql = "INSERT INTO test (phoneNo, value, account) VALUES ('$phoneNumber', '$value', '$account');";
	mysqli_query($conn, $sql);


   // manipulate the data as required by your business logic
   // Perhaps send an SMS to confirm the payment using our APIs...
} else {echo "payment not procesed";}