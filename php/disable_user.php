<html>
	<head><title>Disabling user...</title>
	</head>
	<body>

		<?php

			include("dbconnect.php");
			include("session_check.php");
			
			$update_user_query = $connection->prepare("UPDATE katsu_users_table SET is_active = ? WHERE user_id = ?;");
			$update_user_query->bind_param("is", $change_user_status, $user_id);

			$user_id = $_POST['user_id'];
			$change_user_status = 0;

			//debug
			echo "<br> User ID: " . $user_id;

			if(!$update_user_query){
				echo "<br><br>Check code. <br>" . mysqli_error($connection);
			}else{
				//debug here
				$update_user_query->execute();
				echo mysqli_error($connection);
				header("Location: ../admin-dashboard.php?success=6");
			}

			$update_user_query->close();
			mysqli_close($connection);

		?>
	</body>
</html>