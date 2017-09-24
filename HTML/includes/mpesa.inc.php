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

				$transcode = strtoupper($transcode);
				$hashedcode = password_hash($transcode, PASSWORD_DEFAULT);

				//retrieve user info from database
				$sql = "INSERT INTO mpesatransactions ( userId,subs, mpesaImsi, transcode ) VALUES ('$userId','$subs','$mpesaImsi', '$hashedcode');";
				$result = mysqli_query ($conn, $sql);

				if ($result==true) {
					header("Location: ../services.php?trans=success");
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