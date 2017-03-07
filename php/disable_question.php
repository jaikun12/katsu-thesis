<html>
	<head><title>Disabling question...</title>
	</head>
	<body>

		<?php

			include("dbconnect.php");
			include("session_check.php");
			
			$alter_user_query = $connection->prepare("UPDATE katsu_questions_table SET is_active = ? WHERE question_id = ?;");
			$alter_user_query->bind_param("is", $change_question_status, $question_id);

			$question_id = $_POST['question_id'];
			$change_question_status = 0;

			//debug
			echo "<br> question_id: " . $question_id;

			if(!$alter_user_query){
				echo "<br><br>Check code. <br>" . mysqli_error($connection);
			}else{
				//debug here
				$alter_user_query->execute();
				header("Location: ../admin-dashboard.php?success=7");
			}

			$alter_user_query->close();
			mysqli_close($connection);

		?>
	</body>
</html>