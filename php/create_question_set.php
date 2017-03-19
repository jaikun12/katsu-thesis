<?php

	include("dbconnect.php");

	$set_name = $_POST['set_name'];
	$query = "INSERT INTO katsu_question_sets_table(set_name) VALUES('$set_name');";
	$check_dup = mysqli_query($connection, "SELECT * FROM katsu_question_sets_table WHERE set_name = '$set_name';");
	$count = mysqli_num_rows($check_dup);

	if($count == 0){
		$create_set = mysqli_query($connection, $query);
		header("Location: ../question-sets.php");
	}
	else{
		header("Location: ../create-question-set.php");
	}
?>
