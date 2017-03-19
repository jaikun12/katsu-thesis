<?php

	include("dbconnect.php");
	include("session_check.php");

	$prof_id = $_POST['profile_id'];
	$prof_pw = $_POST['password'];
	$set_id = $_POST['question_set'];

	$crypt_pass = crypt($prof_pw, "$!@#$%ChilDPorN");

	$check_account = $connection->prepare("SELECT * FROM katsu_childs_table WHERE child_id = ? AND child_pword = ?;");
	$check_account->bind_param("ss", $prof_id, $crypt_pass);

	$check_account->execute();
	$check_account->store_result();

	$result_count = $check_account->num_rows;

	if($result_count != 0){
		header("Location: ../katsu-intro.php?prof_id=".$prof_id."&set_id=".$set_id);
	}
	else{
		header("Location: ../katsu-start.php?error=2");
	}
	
 ?>