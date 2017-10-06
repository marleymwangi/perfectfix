<?php
	if (isset($_POST['submit'])) {

		session_start();
        if (isset($_SESSION['userId'])) {

        	include_once 'dbh.inc.php';
        	$userId = $_SESSION['userId'];

			$phoneNo = mysqli_real_escape_string($conn, $_POST['phoneNo']);
			$transcode = mysqli_real_escape_string($conn, $_POST['transcode']);
			$subs = mysqli_real_escape_string($conn, $_POST['subs']);


			if (empty($phoneNo) || empty($transcode)) {
				header("Location: ../services.php?field=empty");
				exit();

			} else {
				//hash mpesa transaction code

				$transcode = trim($transcode);
				$phoneNo = trim($phoneNo);
				$phoneNo = str_replace("254","0",$phoneNo);
				$phoneNo = str_replace("+","",$phoneNo);
				$transcode = strtoupper($transcode);

				$sql = "SELECT * FROM pendingtrans WHERE (transcode = '$transcode' AND phoneNo = '$phoneNo')";
				$result = mysqli_query ($conn, $sql);
				$resultcheck = mysqli_num_rows ($result);

				if ($resultcheck < 1) {

					//insert pending trans mpesa transaction to their tables
					$sql = "INSERT INTO pendingtrans (userId, phoneNo, transcode ) VALUES ('$userId','$phoneNo','$transcode');";
					$result = mysqli_query ($conn, $sql);

				}

				//check if user is in subs table
				$sql = "SELECT * FROM pendingsubs WHERE (userId = '$userId' AND subs = '$subs')";
				$result = mysqli_query ($conn, $sql);
				$resultcheck = mysqli_num_rows ($result);

				if ($resultcheck < 1) {

					$sql = "INSERT INTO pendingsubs ( userId, subs) VALUES ('$userId','$subs');";
					$result = mysqli_query ($conn, $sql);

				}

				//check if user is in subs table
				$sql = "SELECT * FROM subs WHERE userId = '$userId';";
				$result = mysqli_query ($conn, $sql);
				$resultcheck = mysqli_num_rows ($result);

				if ($resultcheck < 1) {

					$sql = "INSERT INTO subs ( userId) VALUES ('$userId');";
					$result = mysqli_query ($conn, $sql);

					if ($result==true) {
						header("Location: ../services.php?trans=successful");
						exit();
					}
				} else {
						header("Location: ../services.php?trans=successful");
						exit();
				}
			}
            
        } else{

            header("Location: ../index.php?login=notsignedinerror");
        }
			
    }else{
    	header("Location: ../index.php");
    	exit();
    }

     ?>