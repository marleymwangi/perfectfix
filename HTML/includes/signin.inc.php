<?php 

session_start();

if (isset($_POST['submit'])) {
	include_once 'dbh.inc.php';


	$userName = mysqli_real_escape_string($conn, $_POST['userName']);
	$passwrd = mysqli_real_escape_string($conn, $_POST['passwrd']);


	//Error handers
	//check for empty fields
	if (empty($userName) || empty($passwrd)) {
		
		header("Location: ../index.php?login=empty");
		exit();

	} else {

		//retrieve user info from database
		$sql = "SELECT * FROM users WHERE userName = '$userName' OR email = '$userName'";
		$result = mysqli_query ($conn, $sql);
		$resultcheck = mysqli_num_rows ($result);

		if ($resultcheck < 1) {

			header("Location: ../index.php?login=Uerror");
			exit();
		} else {

			if ($row = mysqli_fetch_assoc($result)) {
				
				//dehash and check password
				$hashedPwdcheck = password_verify($passwrd, $row['passwrd']);
				if ($hashedPwdcheck == false) {
					header("Location: ../index.php?login=Perror");
					exit();
				}else if ($hashedPwdcheck == true) {
					//login user
					$_SESSION['userId'] = $row['userId'];
					$_SESSION['firstName'] = $row['firstName'];
					$_SESSION['lastName'] = $row['lastName'];
					$_SESSION['userName'] = $row['userName'];
					$_SESSION['passwrd'] = $row['passwrd'];
					$_SESSION['email'] = $row['email'];
					$_SESSION['phone'] = $row['phone'];
					
					header("Location: ../index.php?login=success");
					exit();
				}
			} 	
		}
	}

	} else {
	header("Location: ../index.php");
	exit();
}