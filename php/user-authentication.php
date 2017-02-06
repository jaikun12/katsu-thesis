<?php
	require("php/dbconnect.php");

	$username = $_POST['username'];
	$password = $_POST['password'];

	if($username == null || $password == null){
		header("../index.php");
	}
	else{
		$check_db = mysql_query($link, "SELECT * FROM users_table WHERE username = $username AND password = $password");

		if(mysqli_num_rows($check_db)!=0){
			session_start();
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;

			header("../home.php");
		}
		else{
			header("../index.php");
		}
	}

?>