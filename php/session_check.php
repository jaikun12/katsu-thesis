<?php

	session_start();
	$userid = $_SESSION['user_id'];
	$username = $_SESSION['username'];
	$firstname = $_SESSION['firstname'];
	$lastname = $_SESSION['lastname'];
	$admin = $_SESSION['is_admin'];

	// if(!isset($username)){
	// 	header('Location: index.php');
	// }
	if(!isset($userid) && !isset($username)){
		header('Location: index.php');
	}elseif($admin == 1){
		header("Location: admin-dashboard.php");
	}else{
		header("Location: home.php");
	}


?>