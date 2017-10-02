<?php

if (isset($_POST['submit'])) {
	include_once 'dbh.inc.php';

	$body = mysqli_real_escape_string($conn, $_POST['body']);
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$phoneNo = mysqli_real_escape_string($conn, $_POST['phoneNo']);

	//Error handers
	//check for empty fields
	if (empty($body) || empty($name) || empty($email) || empty($phoneNo) ) {
		
		header("Location: ../contacts.php?contacts=empty");
		exit();

	} else {
		//check if input char are valid
		if (!preg_match("/^[a-zA-Z]*$/", $firstName) || !preg_match("/^[a-zA-Z]*$/", $lastName)) {
			
			header("Location: ../signup.php?contacts=invalidname");
			exit();

		}else{
			//check if email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

				header("Location: ../contacts.php?contacts=invalidemail");
				exit();

			}else{
				// use wordwrap() if lines are longer than 70 characters
					$body = wordwrap($body,70);

					// send email
					mail("info@perfectfix.co",$name.$phoneNo,$msg);

					header("Location: ../contacts.php?contacts=successful");
					exit();

			}
					
		}

	}

}else{
	header("Location: ../contacts.php");
	exit();
}

?>