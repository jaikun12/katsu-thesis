<?php
	header("../index.php");
	include("dbconnect.php");

	$query = $connection->prepare("INSERT INTO katsu_users_table (username, password, is_admin, firstname, middlename, lastname, contact_num, email, is_active, created_by) VALUES (?,?,?,?,?,?,?,?,?,?);");
	$query->bind_param("ssisssssis", $username, $init_pass, $is_admin, $firstname, $middlename, $lastname, $contact_num, $email, $is_active, $created_by);

	$query2 = $connection->prepare("SELECT * FROM katsu_users_table WHERE username = ? AND password = ?;");
	$query2->bind_param("ss",$username,$init_pass);

	echo mysqli_error($connection);

	$username = "katsu_admin";
	$password = "admin";
	$is_admin = 1;
	$firstname = "Bok Joo";
	$middlename = "NA";
	$lastname = "Kim";
	$contact_num = "123456789";
	$email = "sample@gmail.com";
	$is_active = 1;
	$created_by = "super admin";

	$init_pass = crypt($password, "!@#$%ChilDPorN");

	$query->execute();

	$username = "katsu_user";
	$password = "user";
	$is_admin = 0;
	$firstname = "Shi Jin";
	$middlename = "NA";
	$lastname = "Yoo";
	$contact_num = "091234567";
	$email = "sample@gmail.com";
	$is_active = 1;
	$created_by = "super admin";

	$init_pass = crypt($password, "!@#$%ChilDPorN");

	$query->execute();

	//not active

	$username = "katsu_inactive";
	$password = "inactive";
	$is_admin = 1;
	$firstname = "Shi Jin";
	$middlename = "NA";
	$lastname = "Yoo";
	$contact_num = "092323231";
	$email = "sample@gmail.com";
	$is_active = 0;
	$created_by = "super admin";

	$init_pass = crypt($password, "!@#$%ChilDPorN");

	$query->execute();


	// $query->store_result(); //use this when counting rows

	// $row_count = $query->num_rows;
	// if($row_count==0){
	// 	echo "Bad. No row?<br>";
	// }else{
	// 	echo "Not 0?<br>";
	// }

	// echo $row_count;

	$query->close();
	$connection->close();

	echo "USERS TABLE FILLED.";
?>