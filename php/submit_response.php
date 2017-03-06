<?php 
	include('dbconnect.php');
	include('session/session_check.php');

	$child_id = $_SESSION['child_id'];
	$answer = $_POST['answer'];
	$questionNo = $_POST['question_no'];

	$nextQuestion = $questionNo + 1;

	$query = "SELECT * FROM katsu_questions_table";
	$query2 = mysqli_query($connection, $query);

	$insert_query = "INSERT INTO katsu_answers_table (question_id, victim_id, user_id, answer_content) VALUES($questionNo, $child_id, $userid, '$answer')";

	$submit_response = mysqli_query($connection, $insert_query);

	if($nextQuestion > mysqli_num_rows($query2)){
		$redirect = "Location: ../katsu-chat.php?question=end";
	}
	else{
		$redirect = "Location: ../katsu-chat.php?question=".$nextQuestion;
	}

	// $submit_answer = $connection->prepare("INSERT INTO answers_table (question_id, victim_id, answer_content) VALUES (?,?,?)");

	// $submit_answer->bind_param("iis", $question_id, $victim_id, $answer);

	// $question_id = $questionNo;
	// $victim_id = $_SESSION['victim_id'];
	// $answer = $_POST['answer'];
	// $submit_answer->execute();
	
	header($redirect);

?>