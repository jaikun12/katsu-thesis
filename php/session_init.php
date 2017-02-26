<?php
	//debug
	session_start();
	// session_destroy();

	if(isset($_SESSION['user_id']) && isset($_SESSION['username'])){

		$userid = $_SESSION['userid'];
		$username = $_SESSION['username'];
		$firstname = $_SESSION['firstname'];
		$lastname = $_SESSION['lastname'];
		$admin = $_SESSION['is_admin'];

		if($admin == 1){
			header("Location: admin-dashboard.php");
		}else{
			header("Location: home.php");
		}

		
	}else{
		// header("Location: index.php"); unending loop
		// bakit mo kasi nilagay sa index to :/
	}

?>