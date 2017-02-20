<!DOCTYPE html>
<html>
<head><title>Adding user...</title>
</head>
<body>

<?php

	include("dbconnect.php");

	$username = $_POST["username"];
	$password = $_POST["password"];
	$is_admin = $_POST["is_admin"];
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$middlename = $_POST["middlename"];
	$contact_num = $_POST["contact_num"];
	$email = $_POST["email"];

	$insert_users_query = "INSERT INTO 'users_table' (username, password, is_admin, firstname, middlename, lastname, contact_num, email, is_active) VALUES ('$username', '$password', '$is_admin', '$firstname', '$middlename', '$lastname', '$contact_num', '$email', '1');";

	$insert_user_table = mysqli_query($connection, $insert_users_query);

	mysqli_query($connection, "USE katsudb;");

	if(!$insert_user_table){
    	echo "<br><br>Check 1st code.<br>" . mysqli_error($connection);
    }else{
    	header("Location: ../admin-page.php");
    }

    mysqli_close($connection);

?>

</body>
</html>