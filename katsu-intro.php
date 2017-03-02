<!DOCTYPE html>
<html>
<?php
	require("php/dbconnect.php");
	$child_id = $_GET['prof_id'];

	$collect_child_info = $connection->prepare("SELECT * FROM childs_table WHERE child_id = '$child_id';");
	$collect_child_info->bind_param("s", $child_id);

	$collect_child_info->execute();
	$collect_child_info->store_result();
	?>

	<head>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/katsu-chat.css">
		<link rel="stylesheet" type="text/css" href="css/index.css">

	</head>
	<body>
		<a href="php/logout.php"><img src="images/power-btn.png" class="logout-btn"></a>
		<div id="welcome-div">
			<center>
			<img id="katsu" src="images/katsu.gif">
			<h2><?php echo $question;?></h2>
			
			
			</center>
		</div>
	</body>
</html>