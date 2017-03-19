<?php

	include("dbconnect.php");

	$set_name = $_POST['set_name'];

	$check_dup = mysqli_query($connection, "SELECT * FROM katsu_question_sets_table WHERE set_name = '$set_name' AND is_active = 1");

	$row_count = $check_dup->num_rows;

	$insert_question_set = $connection->prepare("INSERT INTO katsu_question_sets_table(set_name,is_active) VALUES(?,?);");
	$insert_question_set->bind_param("si",$set_name,$is_active);

	$is_active = 1;

	if($row_count == 0){
		$insert_question_set->execute();
		header("Location: ../admin-dashboard.php");
	}
	else{
		header("Location: ../admin-dashboard.php?error=9");
	}
?>
