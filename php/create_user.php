<html>
<head><title>Adding user...</title>
</head>
<body>

<?php

	include("dbconnect.php");
	include("session_check.php");

	$insert_user = $connection->prepare("INSERT INTO katsu_users_table (username, password, is_admin, firstname, middlename, lastname, contact_num, email, is_active, created_by) VALUES (?,?,?,?,?,?,?,?,?,?);");
	$insert_user->bind_param("ssisssssis",$username, $encrypted, $is_admin, $firstname, $middlename, $lastname, $contact_num,$email,$one,$created_by);

	$username = $_POST['username'];
	$password = $_POST['password'];
	$is_admin = $_POST['isadmin'];
	$firstname = $_POST['firstname'];
	$middlename = $_POST['middlename'];
	$lastname = $_POST['lastname'];
	$contact_num = $_POST['contact_num'];
	$email = $_POST['email'];
	$created_by = $_SESSION['username'];
	$one = 1;

	$encrypted = crypt($password, '!@#$%ChilDPorN');

	//debug
	echo "<br> Username: " . $username;
	echo "<br> Password: " . $password;
	echo "<br> Encrypted: " . $encrypted;
	echo "<br> is_admin: " . $is_admin;
	echo "<br> firstname: " . $firstname;
	echo "<br> middlename: " . $middlename;
	echo "<br> lastname: " . $lastname;
	echo "<br> contact_num: " . $contact_num;
	echo "<br> email: " . $email;
	echo "<br> created_by: " . $created_by;

	$check_db = mysqli_query($connection, "SELECT * FROM katsu_users_table WHERE username = '$username';");

	if(mysqli_num_rows($check_db)==0){ // if username is not taken

		$insert_user->execute();

			if(!$insert_user){
		    	echo "<br><br>Check code. <br>" . mysqli_error($connection);
		    }else{
		    	//debug here
		    	header("Location: ../admin-dashboard.php?success=1");
		    }

	}else{
		echo "The username: " . $username . " already exists.";
	}

    mysqli_close($connection);

?>

</body>
</html>