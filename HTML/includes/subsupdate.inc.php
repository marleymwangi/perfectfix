<?php
include_once 'dbh.inc.php';
session_start();

$transaction=true;
$subs='weekgames';
echo $subs;

$weekgames =0;$thirteenj =0;$fifteenj =0;$seventeenj = 0;
switch ($subs) {
	case 'weekgames':
		$weekgames = 1;
		break;
	case 'thirteenj':
		$thirteenj = 1;
		break;
	case 'fifteenj':
		$fifteenj = 1;
		break;
	case 'seventeenj':
		$seventeenj = 1;
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
		$sql = "INSERT INTO subs (userId, weekgames, thirteenj, fifteenj,seventeenj) VALUES ('$userId','$weekgames','$thirteenj', '$fifteenj','$seventeenj');";
		$result = mysqli_query($conn, $sql);
	}

}else{
	header("Location: ../services.php?subsdata=error");
		exit();
}

?>