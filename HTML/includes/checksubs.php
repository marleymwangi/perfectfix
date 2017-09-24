<?php

include_once 'dbh.inc.php';

$userId = $_SESSION['userId'];
$sql = "SELECT * FROM subs where userId = '$userId';";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0){
	while ($row = mysqli_fetch_assoc($result)) {
		$weekgames = $row['weekgames'];
		$thirteenj = $row['thirteenj'];
		$fifteenj = $row['fifteenj'];
		$seventeenj = $row['seventeenj'];
	}
}

?>