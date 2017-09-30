<?php
include_once 'dbh.inc.php';
session_start();

$confirrmed=true;
$subs='package4';

$package1 =0; $package2 =0; $package3 =0; $package4 = 0;
switch ($subs) {
	case 'package1':
		$package1 = 1;
		break;
	case 'package2':
		$package2 = 1;
		break;
	case 'package3':
		$package3 = 1;
		break;
	case 'package4':
		$package4 = 1;
		break;
	default:
		header("Location: ../services.php?subsdata=error");
		exit();
		break;
}

if ($transaction==true) {

	$userId = $_SESSION['userId'];

	$sql = "SELECT * FROM subs WHERE userId = '$userId';";
	$result = mysqli_query($conn,$sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		$sql="UPDATE subs SET $subs = 1 WHERE userId = '$userId' ;";
		$result = mysqli_query($conn, $sql);

	}elseif ($resultCheck = 1) {
		$sql = "INSERT INTO subs (userId, package1, package2, package3 , package4) VALUES ('$userId','$package1','$package2','$package3', '$package4');";
		$result = mysqli_query($conn, $sql);
	}

}else{
	header("Location: ../services.php?subsdata=error");
		exit();
}

?>