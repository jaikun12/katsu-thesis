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

		$insert_user_table = mysqli_query($connection, "INSERT INTO 'users_table' (username, password, firstname, middlename, lastname, contact_num, email, is_active, is_admin) VALUES ('$username', '$password', $firstname', '$middlename', '$lastname', '$contact_num', '$email', '1', '$is_admin');");

		header("Location: ../admin-page.php");

?>

</body>
</html>