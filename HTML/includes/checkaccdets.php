<?php
include_once 'dbh.inc.php';

$userId = $_SESSION['userId'];
$sql = "SELECT * FROM users where userId = '$userId';";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0){
	while ($row = mysqli_fetch_assoc($result)) {
		$userName = $row['userName'];
		$firstName = $row['firstName'];
		$lastName = $row['lastName'];
		$email = $row['email'];
		$phone = $row['phone'];
		$amount = $row['amount'];
		$passwrd = $row['passwrd'];
	}
}

?>