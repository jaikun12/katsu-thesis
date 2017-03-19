<html>
	<head><title>Disabling question...</title>
	</head>
	<body>

		<?php

			include("dbconnect.php");
			include("session_check.php");
			
			$alter_user_query = $connection->prepare("UPDATE katsu_questions_table SET sequence_no = ? WHERE question_id = ? AND question_set = ?;");
			$alter_user_query->bind_param("iss", $change_sequence, $question_id, $question_set_id);

			$question_set_id = $_GET['id'];
			$question_id = $_POST['question_id'];
			$change_sequence = $_POST['sequence'];

			//debug
			echo "<br> question_id: " . $question_id;
			echo "<br> question_set_id: " . $question_set_id;
			echo "<br> change_question_status: " . $change_question_status;

			if(!$alter_user_query){
				echo "<br><br>Check code. <br>" . mysqli_error($connection);
			}else{
				//debug here
				$alter_user_query->execute();
				header("Location: ../question-set-details.php?id=$question_set_id&success=7");
			}

			$alter_user_query->close();
			mysqli_close($connection);

		?>
	</body>
</html>