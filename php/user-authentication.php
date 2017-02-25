<?php
	require("dbconnect.php");

	$username = $_POST['username'];
	$password = $_POST['password'];

	if($username == null || $password == null){
		header("Location: ../index.php?error=1");
	}
	else{

		$query = "SELECT * FROM users_table WHERE username = '$username' AND password = '$password'";
		$check_db = mysqli_query($connection, $query);
		$count = mysqli_num_rows($check_db);

		if($count!=0){

			session_start();
			if($r = mysqli_fetch_array($check_db)){
				$_SESSION['user_id'] = $r['user_id'];
				$_SESSION['username'] = $r['username'];
				$_SESSION['firstname'] = $r['firstname'];
				$_SESSION['lastname'] = $r['lastname'];
			}

			header("Location: ../home.php");

		}
		else{
			header("Location: ../index.php?error=2");
		}
	}

?>