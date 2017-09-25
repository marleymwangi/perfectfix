<?php

if (isset($_POST['submit'])) {
	include_once 'dbh.inc.php';

	$firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
	$lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
	$userName = mysqli_real_escape_string($conn, $_POST['userName']);
	$passwrd = mysqli_real_escape_string($conn, $_POST['passwrd']);
	$retypepass = mysqli_real_escape_string($conn, $_POST['retypepass']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$phone = mysqli_real_escape_string($conn, $_POST['phone']);

	//Error handers
	//check for empty fields
	if (empty($firstName) || empty($lastName) || empty($userName) || empty($email) || empty($phone) || empty($passwrd) ) {
		
		header("Location: ../signup.php?signup=empty");
		exit();

	} else {
		//check if input char are valid
		if (!preg_match("/^[a-zA-Z]*$/", $firstName) || !preg_match("/^[a-zA-Z]*$/", $lastName)) {
			
			header("Location: ../signup.php?signup=invalidname");
			exit();

		}else{
			//check if email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

				header("Location: ../signup.php?signup=invalidemail");
				exit();

			}else{

				$sql = "SELECT * FROM users WHERE userName = '$userName'";
				$result = mysqli_query ($conn, $sql);
				$resultcheck = mysqli_num_rows ($result);

				if ($resultcheck > 0) {

					header("Location: ../signup.php?signup=invaliduserName");
					exit();

				} else {

					$sql = "SELECT * FROM users WHERE phone = '$phone'";
					$result = mysqli_query ($conn, $sql);
					$resultcheck = mysqli_num_rows ($result);

					if ($resultcheck > 0) {

						header("Location: ../signup.php?signup=invalidphone");
						exit();

					} else {
					
						if (!$passwrd == $retypepass) {
							header("Location: ../signup.php?signup=passmismatch");
							exit();
							
						} else {

							//hash Password
							$hashedpasswrd = password_hash($passwrd, PASSWORD_DEFAULT);
							//Insert into db
							$sql = "INSERT INTO users (firstName, lastName, userName, passwrd, email, phone) VALUES ('$firstName', '$lastName', '$userName', '$hashedpasswrd', '$email', '$phone');";

							mysqli_query($conn, $sql);

							header("Location: ../services.php?signup=success");
							exit();
						}
					}
				}

			}
		}

	}
	
} else{
	header("Location: ../signup.php");
	exit();
}
