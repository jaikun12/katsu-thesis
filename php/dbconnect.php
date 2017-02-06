<?php
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db_name = 'katsudb';

	$connect = mysqli_connect($host,$user,$pass,$db_name);

	if(mysqli_connect_errno()){
		printf("connection failed",mysqli_connect_error());
		exit();
	}


	?>