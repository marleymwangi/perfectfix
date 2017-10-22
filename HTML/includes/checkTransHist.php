<?php

include_once 'dbh.inc.php';

$userId = $_SESSION['userId'];
$sql = "SELECT * FROM userTransHist where userId = '$userId' ORDER BY transId DESC LIMIT 5;";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0){
	while ($row = mysqli_fetch_assoc($result)) {
		$debit[] = $row['debit'];
		$amount[] = $row['amount'];
		$transTime[] = $row['transTime'];
	}
}

?>