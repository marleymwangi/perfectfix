<?php  

include_once 'dbh.inc.php';

$sql = "SELECT * FROM weekgms;";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0){
	while ($row = mysqli_fetch_assoc($result)) {
		$home[]= $row['home'];
		$away[]=$row['away'];
		$homepred[]=$row['homepred'];
		$drawpred[]=$row['drawpred'];
		$awaypred[]=$row['awaypred'];
	}
}

?>