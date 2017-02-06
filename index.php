<!DOCTYPE html>
<html>
<?php
	require("php/dbconnect.php");
	?>

	<head>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/index.css">

	</head>
	<body>
		<div id="welcome-div">
			<center>
			<img src="images/katsu.gif">
			<h1>Welcome to Katsu</h1>
			<h4>Katsu is a chatbot used to obtain responses from suspected child pronography victims. To begin, create a child profile and start a session with katsu.</h4>
			<form action="php/user-authentication.php" method="POST">
				<input type="text" name="username" placeholder="Username">
				<input type="password" name="password" placeholder="Password">
				<button type="submit" class="primary-btn">Login</button>
			</form>
			</center>
		</div>
		
	</body>
</html>