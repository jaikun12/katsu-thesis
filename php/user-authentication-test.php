<?php
	include("dbconnect.php");

	$checkdb = $connection->prepare("SELECT * FROM users_table WHERE username = ? AND password = ?;");
	$checkdb->bind_param("ss",$username,$password_encrypted);

	$username = $_POST['username'];
	$password = $_POST['password'];

	if(!$username || !$password){
		
	}


	?>