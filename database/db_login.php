<?php
	session_start();
	include "db_connect.php";

	$user = $_POST["user_name"];
	$pass = $_POST["password"];
	$pass_hash = sha1($_POST['password']);

	$sql = "SELECT * FROM user_accounts 
            WHERE user_name = '".$user."' and password = '".$pass_hash."' LIMIT 1";
	$result = mysqli_query($connection, $sql);

  	if (mysqli_num_rows($result) == 1) {
		$row = mysqli_fetch_row($result);
		$user_id = $row[0];
		$hive_id = $row[1];
		$first_name = $row[3];

		$_SESSION['loggedin'] = true;
		$_SESSION['user_id'] = $user_id;
		$_SESSION['hive_id'] = $hive_id;
		$_SESSION['first_name'] = "Hello, " . $first_name;

		header("Location: ../index.php");
	}
	else {
        echo "<br>User not found. Please try again.<br>";
        die(mysqli_error($connection));
    }
    
	mysqli_close($connection);
 ?>
