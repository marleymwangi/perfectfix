<?php
include_once 'dbh.inc.php';

$sql = "SELECT * FROM subs where package1 = 1;";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);
$send = false;

if ($resultCheck > 0){
	while ($row = mysqli_fetch_assoc($result)) {
		if ($row['pk1sms']==0) {
			$userIda[] = $row['userId'];
		}
	}

	if (!empty($userIda)) {
		$send = true;
		foreach($userIda as $user)
		{
			$sql = "UPDATE subs SET pk1sms = 1 WHERE userId = '$user';";
			$result = mysqli_query($conn,$sql);

			$sql = "SELECT * FROM users where userId = '$user';";
			$result = mysqli_query($conn,$sql);
			$resultCheck = mysqli_num_rows($result);

			if ($resultCheck > 0){
				while ($row = mysqli_fetch_assoc($result)) {
					$phoneNo = $row['phone'];
					$phoneNo = substr($phoneNo, 1);
		 			$phoneNo = "+254".$phoneNo;
		 			$phoneNoa[] = $phoneNo;
				}
			}
		}

		$phoneList = implode(', ', $phoneNoa);
	}
}

?>