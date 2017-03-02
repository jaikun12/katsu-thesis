<?php
	session_start();
	include("dbconnect.php");
	$prof_id = $_POST['profile_id'];
	$prof_pw = $_POST['password'];

	$check_account = $connection->prepare("SELECT * FROM childs_table WHERE child_id = '$prof_id' AND child_pword = '$prof_pw';");
	$check_account->bind_param("ss", $prof_id, $prof_pw);

	$check_account->execute();
	$check_account->store_result();

	$result_count = $check_account->num_rows;
	$result = $check_account->mysqli_fetch_array;

	if($result_count != 0){
		header("Location: ../katsu-intro.php?prof_id=".$prof_id);
	}
	else{
		header("Location: ../katsu-start.php?error=2");
	}
 ?>