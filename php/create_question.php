<html>
<head><title>Adding user...</title>
</head>
<body>

<?php

	include("dbconnect.php");
	include("session_check.php");

	$insert_question = $connection->prepare("INSERT INTO katsu_questions_table (user_id, question_content) VALUES (?,?);");
	$insert_question->bind_param("is",$user_id,$question_content);

	if(!isset($_POST['question_content']) || $_POST['question_content'] == " "){
		header("Location: ../admin-dashboard.php?error=1");
	}

	else{



	$question_content = $_POST['question_content'];

	// $encrypted = crypt($password, '!@#$%ChilDPorN');

	//debug
	echo "<br> user_id: " . $user_id;
	echo "<br> question_content: " . $question_content;

	$check_db = mysqli_query($connection, "SELECT * FROM katsu_questions_table WHERE question_content = '$question_content';");

	if(mysqli_num_rows($check_db)==0){ // if username is not taken

		$insert_question->execute();

			if(!$insert_question){
		    	echo "<br><br>Check code. <br>" . mysqli_error($connection);
		    }else{
		    	//debug here
		    	header("Location: ../admin-dashboard.php?success=9");
		    }

	}else{
		header("Location: ../admin-dashboard.php?error=7");
	}
}
    mysqli_close($connection);

?>

</body>
</html>