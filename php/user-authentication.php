<?php
	require("dbconnect.php");

	$username = $_POST['username'];
	$password = $_POST['password'];

	if($username == null || $password == null){
		header("../index.php");
	}
	else{
		$query = "SELECT * FROM users_table WHERE username = '$username' AND password = '$password'";
		$check_db = mysqli_query($connect, $query);
		$count = mysqli_num_rows($check_db);
		if($count!=0){
			session_start();
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;

			header("Location: ../home.php");
		}
		else{
			header("Location: ../index.php");
		}
	}

?>