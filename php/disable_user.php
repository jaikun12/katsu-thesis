<html>
	<head><title>Disabling user...</title>
	</head>
	<body>

		<?php

			include("dbconnect.php");
			include("session_check.php");
			
			$alter_user_query = $connection->prepare("UPDATE katsu_users_table SET is_active = ? WHERE username = ?;");
			$alter_user_query->bind_param("is", $change_user_status, $username);

			$username = $_POST['username'];
			$change_user_status = 0;

			//debug
			echo "<br> Username: " . $username;

			if(!$alter_user_query){
				echo "<br><br>Check code. <br>" . mysqli_error($connection);
			}else{
				//debug here
				$alter_user_query->execute();
				header("Location: ../admin-dashboard.php?success=6");
			}

			$alter_user_query->close();
			mysqli_close($connection);

		?>
	</body>
</html>