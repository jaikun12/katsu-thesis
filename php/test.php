<?php
		
	include("dbconnect.php");

	

	$query = $connection->prepare("INSERT INTO users_table (username, password) VALUES (?,?);");

	echo mysqli_error($connection);

	$query->bind_param("ss",$username,$init_pass);

	$username = "admin";
	$password = "admin";

	$init_pass = crypt($password, "!@#$%ChilDPorN");

	$query->execute();

	$query->close();
	$connection->close();

?>