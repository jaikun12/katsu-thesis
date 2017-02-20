<?php 
	include('dbconnect.php');
	$test = $_POST['answer'];
	$questionNo = $_POST['question_no'];
	$nextQuestion = $questionNo + 1;
	$query = "SELECT * FROM questions_table";
	$query2 = mysqli_query($connection, $query);
	if($nextQuestion > mysqli_num_rows($query2)){
		$redirect = "Location: ../katsu-end.php";
	}
	else{
		$redirect = "Location: ../katsu-chat.php?question=".$nextQuestion;
	}
	
	header($redirect);

?>