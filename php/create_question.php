<html>
<head><title>Adding question...</title>
</head>
<body>

<?php

	include("dbconnect.php");
	include("session_check.php");

	$insert_question = $connection->prepare("INSERT INTO katsu_questions_table (user_id, question_content, sequence_no, question_set) VALUES (?,?,?,?);");
	$insert_question->bind_param("isii",$user_id,$question_content,$sequence_no,$question_set_id);

	if(!isset($_POST['question_content']) || $_POST['question_content'] == " " || !isset($_POST['sequence']) || $_POST['sequence'] == " "){
		header("Location: ../admin-dashboard.php?error=1");
	}

	else{

		$question_content = $_POST['question_content'];
		$question_set_id = $_GET['id'];
		$sequence_no = $_POST['sequence'];

		// $encrypted = crypt($password, '!@#$%ChilDPorN');

		//debug
		echo "<br> user_id: " . $user_id;
		echo "<br> question_content: " . $question_content;
		echo "<br> sequence_no: " . $sequence_no;
		echo "<br> question_set: " . $question_set_id;

		$check_if_exists = mysqli_query($connection, "SELECT * FROM katsu_questions_table WHERE question_content = '$question_content' AND is_active = 1");
		$row_count = $check_if_exists->num_rows;

		$check_sequence = mysqli_query($connection, "SELECT * FROM katsu_questions_table WHERE question_set = $question_set_id AND sequence_no = $sequence_no");
		$count_sequence = $check_sequence->num_rows;

		if($row_count==0){ // if username is not taken
			if($count_sequence==0){
				$insert_question->execute();

				if(!$insert_question){
			    	echo "<br><br>Check code. <br>" . mysqli_error($connection);
			    }else{
			    	//debug here
			    	header("Location: ../question-set-details.php?id=$question_set_id&success=9");
			    }

			}else{
				header("Location: ../question-set-details.php?id=$question_set_id&error=8");
			}
			
		}else{
			header("Location: ../question-set-details.php?id=$question_set_id&error=7");
		}
	}

    mysqli_close($connection);

?>

</body>
</html>