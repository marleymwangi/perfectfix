<?php
	if (isset($_POST['submit'])) {

		session_start();
        if (isset($_SESSION['userId'])) {

        	include_once 'dbh.inc.php';
        	$userId = $_SESSION['userId'];

			$mpesaImsi = mysqli_real_escape_string($conn, $_POST['mpesaImsi']);
			$transcode = mysqli_real_escape_string($conn, $_POST['transcode']);
			$subs = mysqli_real_escape_string($conn, $_POST['subs']);


			if (empty($mpesaImsi) || empty($transcode)) {
				header("Location: ../services.php?field=empty");
				exit();

			} else {
				//hash mpesa transaction code

				$transcode = trim($transcode);
				$mpesaImsi = trim($mpesaImsi);
				$mpesaImsi = str_replace("254","0",$mpesaImsi);
				$mpesaImsi = str_replace("+","",$mpesaImsi);
				$transcode = strtoupper($transcode);

				//insert pending subs and pending mpesa transaction to their tables
				$sql = "INSERT INTO mpesatransactions ( userId, mpesaImsi, transcode ) VALUES ('$userId','$mpesaImsi', '$transcode');";
				$result = mysqli_query ($conn, $sql);

				$sql = "INSERT INTO pendingsubs ( userId, subs) VALUES ('$userId','$subs');";
				$result1 = mysqli_query ($conn, $sql);

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

					if ($result1==true) {
						header("Location: ../services.php?trans=successful");
						exit();
					}
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