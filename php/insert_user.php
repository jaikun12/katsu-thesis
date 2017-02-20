<html>
<head><title>Adding user...</title>
</head>
<body>

<?php

	include("dbconnect.php");

	$username = $_POST['username'];
	$password = $_POST['password'];
	$is_admin = $_POST['isadmin'];
	$firstname = $_POST['firstname'];
	$middlename = $_POST['middlename'];
	$lastname = $_POST['lastname'];
	$contact_num = $_POST['contact_num'];
	$email = $_POST['email'];

	// $insert_user = "INSERT INTO users_table (username, password, is_admin, firstname, middlename, lastname, email, is_active) VALUES ('$username', '$password', '$is_admin', '$firstname', '$middlename', '$lastname', '$contact_num', '$email', '1';)";

	$insert_user = "INSERT INTO users_table (username, password, is_admin, firstname, middlename, lastname, contact_num, email) VALUES ('$username', '$password', '$is_admin', '$firstname', '$middlename', '$lastname', '$contact_num', '$email');";


	$sql = mysqli_query($connection, $insert_user);

	mysqli_query($connection, "USE katsudb;");

	if(!$sql){
    	echo "<br><br>Check code.<br>" ;
    	// . mysqli_error($insert_user_table)
    }else{
    	header("Location: ../admin-page.php");
    }

    mysqli_close($connection);

?>

</body>
</html>