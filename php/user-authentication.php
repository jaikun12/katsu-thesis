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

			if($r = mysqli_fetch_array($check_db)){ // gets user information

				$_SESSION['user_id'] = $r['user_id'];
				$_SESSION['username'] = $r['username'];
				$_SESSION['firstname'] = $r['firstname'];
				$_SESSION['lastname'] = $r['lastname'];
				$_SESSION['is_admin'] = $r['is_admin'];

				$KIA = $r['is_active'];

				if($KIA == 1){ //checks if is active

					if($_SESSION['is_admin'] == 1){ // checks admin priv
						header("Location: ../admin-dashboard.php");
					}
					else{
						header("Location: ../home.php");
					}

				}else{
					header("Location: ../index.php?error=3");
				}

			}

		}
		else{
			header("Location: ../index.php?error=2");
		}
	}

?>