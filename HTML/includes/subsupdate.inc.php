<?php
include_once 'dbh.inc.php';

$sql = "SELECT * FROM pendingsubs;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$confirmed = false;
        $userId = $row['userId'];
        $subs = $row['subs'];

        $sql = "SELECT * FROM users WHERE userId = '$userId' ;";
		$result2 = mysqli_query($conn,$sql);
		if (!mysqli_query($conn,$sql))
				  {
				  echo("select from users description: " . mysqli_error($conn));
				  }

		if ($row2 = mysqli_fetch_assoc($result2)) {
			$amount = $row2['amount'];

			//check if account has enough funds
			if ($amount >= 100.00) {
				$confirmed = true;
				//deduct 100 from account
				$amount = ($amount - 100.00);

				$sql = "UPDATE users SET amount = '$amount' WHERE userId = '$userId' ;";
				mysqli_query($conn,$sql);

				if (!mysqli_query($conn,$sql))
				  {
				  echo("update users description: " . mysqli_error($conn));
				  }


				$package1 =0; $package2 =0; $package3 =0; $package4 = 0;
				switch ($subs) {
					case 'package1':
						$package1 = 1;
						break;
					case 'package2':
						$package2 = 1;
						break;
					case 'package3':
						$package3 = 1;
						break;
					case 'package4':
						$package4 = 1;
						break;
					default:

						break;
				}

				if ($confirmed==true) {

						$sql = "SELECT * FROM subs WHERE userId = '$userId';";
						$result3 = mysqli_query($conn,$sql);
						$resultCheck3 = mysqli_num_rows($result3);

						if ($resultCheck3 = 1) {
							$sql="UPDATE subs SET $subs = 1 WHERE userId = '$userId' ;";
							mysqli_query($conn, $sql);
							if (!mysqli_query($conn,$sql))
				  {
				  echo("update subs description: " . mysqli_error($conn));
				  }
							$sql = "DELETE FROM pendingsubs WHERE userId= '$userId' ;";
							mysqli_query($conn, $sql);
							if (!mysqli_query($conn,$sql))
				  {
				  echo("dele pending subs description: " . mysqli_error($conn));
				  }
						}
					}

			}

		}

        
	}
}

?>