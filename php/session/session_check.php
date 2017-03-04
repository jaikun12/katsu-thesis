<?php
	// if(!isset($username)){
	// 	header('Location: index.php');
	// }

	//debug
	session_start();
	// session_destroy();
	
	if(isset($_SESSION['user_id']) && isset($_SESSION['username'])){

		$userid = $_SESSION['user_id'];
		$username = $_SESSION['username'];
		$firstname = $_SESSION['firstname'];
		$lastname = $_SESSION['lastname'];
		$admin = $_SESSION['is_admin'];

		if($admin == 1){
			// header("Location: admin-dashboard.php");
		}else{
			// header("Location: home.php");
		}

		
	}else{
		header("Location: index.php");
	}
	
?>