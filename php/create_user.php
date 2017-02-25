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

	echo "<br> Username: " . $username;
	echo "<br> Password: " . $password;
	echo "<br> is_admin: " . $is_admin;
	echo "<br> firstname: " . $firstname;
	echo "<br> middlename: " . $middlename;
	echo "<br> lastname: " . $lastname;
	echo "<br> contact_num: " . $contact_num;
	echo "<br> email: " . $email;

	// $insert_user = "INSERT INTO users_table (username, password, is_admin, firstname, middlename, lastname, email, is_active) VALUES ('$username', '$password', '$is_admin', '$firstname', '$middlename', '$lastname', '$contact_num', '$email', '1';)";

	$check_db = mysqli_query($connection, "SELECT * FROM users_table WHERE username = '$username';");

	if(mysqli_num_rows($check_db)==0){

		$insert_user = "INSERT INTO users_table (username, password, is_admin, firstname, middlename, lastname, contact_num, email, is_active) VALUES ('$username', '$password', '$is_admin', '$firstname', '$middlename', '$lastname', '$contact_num', '$email', 1);";

		$sql = mysqli_query($connection, $insert_user);

			if(!$sql){
		    	echo "<br><br>Check code. <br>" . mysqli_error($connection);
		    }else{
		    	header("Location: ../admin-page.php");
		    }

	}else{
		echo "The username: " . $username . " already exists.";
	}



    mysqli_close($connection);

?>

</body>
</html>