<?php

	$url = 'localhost';
	$db_user = 'root';
	$db_pass = '';
	$db = 'katsudb';

	$connection = mysqli_connect($url, $db_user, $db_pass, $db);

	if(!$connection){
		echo "<center>Connection not established, please check your code.<br>";
		// echo "<a href='http://ustcodec.com/survey.php'> Go back <br>";
		echo "<br>Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    	echo "<br>Debugging error: " . mysqli_connect_error() . PHP_EOL;
	 }else{
	// 	echo "Connected to " . $url . " " . $db_user . " " . $db . " " ;
	 	mysqli_query($connection, "USE katsudb;");
	}

?>