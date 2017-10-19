<?php

if (isset($_POST['submit'])) {

		include_once 'dbh.inc.php';

		$games = 5;

		$n = $games; // the max number of variables
		$name = 'teamhome';  // the name of variables
		for ($i = 1; $i <= $n; $i++) {
		    $teamhome = $_POST[$i. $name];

		    $sql = "UPDATE weekgms SET home = '$teamhome' WHERE gameId = '$i' ;";
			mysqli_query($conn,$sql);
		}

		$n = $games; // the max number of variables
		$name = 'teamaway';  // the name of variables
		for ($i = 1; $i <= $n; $i++) {
		    $teamaway = $_POST[$i. $name];

		    $sql = "UPDATE weekgms SET away = '$teamaway' WHERE gameId = '$i' ;";
			mysqli_query($conn,$sql);
		}

		$n = $games; // the max number of variables
		$name = 'team1';  // the name of variables
		for ($i = 1; $i <= $n; $i++) {
		    $team1 = $_POST[$i. $name];

		    $sql = "UPDATE weekgms SET homepred = '$team1' WHERE gameId = '$i' ;";
			mysqli_query($conn,$sql);
		}

		$n = $games; // the max number of variables
		$name = 'teamX';  // the name of variables
		for ($i = 1; $i <= $n; $i++) {
		    $teamX = $_POST[$i. $name];

		    $sql = "UPDATE weekgms SET drawpred = '$teamX' WHERE gameId = '$i' ;";
			mysqli_query($conn,$sql);
		}

		$n = $games; // the max number of variables
		$name = 'team2';  // the name of variables
		for ($i = 1; $i <= $n; $i++) {
		    $team2 = $_POST[$i. $name];

		    $sql = "UPDATE weekgms SET awaypred = '$team2' WHERE gameId = '$i' ;";
			mysqli_query($conn,$sql);
		}

		header("Location: ../weekgames.php");
		exit();
}

else{
	header("Location: ../index.php");
	exit();
}
