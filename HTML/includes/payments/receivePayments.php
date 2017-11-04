<?php

header('Content-Type: application/jsonrequest');

$data  = json_decode(file_get_contents('php://input'), true);
print_r($data);
echo $data;
// Process the data...
$category = $data["category"];
if ( $category == "MobileC2B" ) {
   // We have been paid by one of our customers!!
   $phoneNumber = $data["source"];
   $value       = $data["value"];
   $account     = $data["clientAccount"];


   // manipulate the data as required by your business logic
   // Perhaps send an SMS to confirm the payment using our APIs...
} else {echo "No data recieved";}