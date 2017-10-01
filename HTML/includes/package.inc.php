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
				$transcode = strtoupper($transcode);

				//retrieve user info from database
				$sql = "INSERT INTO mpesatransactions ( userId, mpesaImsi, transcode ) VALUES ('$userId','$mpesaImsi', '$transcode');";
				$result = mysqli_query ($conn, $sql);

				$sql = "INSERT INTO pendingSubs ( userId, subs) VALUES ('$userId','$subs');";
				$result = mysqli_query ($conn, $sql);
				
				$sql = "INSERT INTO subs ( userId) VALUES ('$userId');";
				$result = mysqli_query ($conn, $sql);

				if ($result==true) {
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