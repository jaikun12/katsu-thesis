<?php
		
	include("dbconnect.php");

	

	$query = $connection->prepare("INSERT INTO users_table (username, password) VALUES (?,?);");
	$query2 = $connection->prepare("SELECT * FROM users_table WHERE username = ? AND password = ?;");

	echo mysqli_error($connection);

	$query->bind_param("ss",$username,$init_pass);

	$username = "admin";
	$password = "admin";

	$init_pass = crypt($password, "!@#$%ChilDPorN");
	

	$query->execute();
	$query->store_result();

	$query2->execute();
	$query2->store_result();

	$row_count = $query2->num_rows;
	if($row_count==0){
		echo "Bad. No row?<br>";
	}else{
		echo "Not 0?<br>";
	}

	echo $row_count;

	while($r=$checkdb)

	$query->close();
	$connection->close();

?>