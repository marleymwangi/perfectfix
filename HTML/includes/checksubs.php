<?php

include_once 'dbh.inc.php';

$userId = $_SESSION['userId'];
$sql = "SELECT * FROM subs where userId = '$userId';";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0){
	while ($row = mysqli_fetch_assoc($result)) {
		$weekgames = $row['package1'];
		$thirteenj = $row['package2'];
		$fifteenj = $row['package3'];
		$seventeenj = $row['package4'];
	}
}

?>