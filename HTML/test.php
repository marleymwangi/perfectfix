<?php 

session_start();
include_once 'includes/dbh.inc.php';

if (isset($_POST['submit'])) {
	$userName = mysqli_real_escape_string($conn, $_POST['userName']);
	$passwrd = mysqli_real_escape_string($conn, $_POST['passwrd']);

	echo $userName.$passwrd;

}

?>