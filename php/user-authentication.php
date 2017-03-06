<?php
	include("dbconnect.php");

	$username = $_POST['username'];
	$password = $_POST['password'];

	if(!$username || !$password){
		header("Location: ../index.php?error=1");
	}else{
		$checkdb = $connection->prepare("SELECT user_id, username, is_admin, firstname, lastname, is_active  FROM katsu_users_table WHERE username = ? AND password = ?;");
		$checkdb->bind_param("ss",$username,$init_pass);

		$init_pass = crypt($password, "!@#$%ChilDPorN");

		$checkdb->execute();
		$checkdb->store_result();
		$row_count = $checkdb->num_rows;

		if($row_count==0){
			header("Location: ../index.php?error=2");
		}else{
			session_start();

			$checkdb->execute();
			$checkdb->bind_result($user_id, $username, $is_admin, $firstname, $lastname, $is_active);

			while($r = $checkdb->fetch()){

				$_SESSION['user_id'] = $user_id;
				$_SESSION['username'] = $username;
				$_SESSION['firstname'] = $firstname;
				$_SESSION['lastname'] = $lastname;
				$_SESSION['is_admin'] = $is_admin;
				$KIA = $is_active;

				if($KIA == 1){ //checks if is active

					if($_SESSION['is_admin'] == 1){ // checks admin priv
						header("Location: ../admin-dashboard.php");
					}
					else{
						header("Location: ../home.php");
					}

				}else{ // if inactive
					header("Location: ../index.php?error=3");
				}
			}
		}
	}


	?>