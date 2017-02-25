<?php

	session_start();
	$userid = $_SESSION['userid'];
	$username = $_SESSION['username'];
	$firstname = $_SESSION['firstname'];
	$lastname = $_SESSION['lastname'];

	// if(!isset($username)){
	// 	header('Location: index.php');
	// }
	if(!isset($userid)){
		header('Location: index.php');
	}


?>