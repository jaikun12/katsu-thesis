<!DOCTYPE html>
<html>
<?php
	require("php/dbconnect.php");
	session_start();
	$username = $_SESSION['username'];

	if(!isset($username)){
		header('Location: index.php');
	}
	else{

	}

	?>

	<head>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/index.css">

	</head>
	<body>
		<a href="php/logout.php"><img src="images/power-btn.png" class="logout-btn"></a>
		<div id="welcome-div">
			<center>
			
			<img src="images/katsu.gif">
			<h1>Welcome <?php echo $username;?></h1>
			<br>
			<h4>Before starting a session, we require you to create a profile of the child that you are going to interview with katsu.</h4>
			<br>
			<a href="katsu-start.php" class="link">Start a session</a><br><br><br>
			<a href="create-profile.php" class="primary-btn">Create child profile</a>
			</center>
		</div>
		
	</body>
</html>