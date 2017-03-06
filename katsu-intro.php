<?php
	require_once("php/dbconnect.php");
	require("php/session/session_check.php");
	include("partial_view/essentials-upper-user.html");
	include("partial_view/essentials-lower.html");

	$child_id = $_GET['prof_id'];

	$_SESSION['child_id'] = $child_id;


	$collect_child_info = $connection->prepare("SELECT child_fname, child_gender FROM katsu_childs_table WHERE child_id = ?;");
	$collect_child_info->bind_param("s", $child_id);
	$collect_child_info->execute();
	$collect_child_info->bind_result($child_fname, $child_gender);
	if($result = $collect_child_info->fetch()){
		$child_name = $child_fname;
	}  

	
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
			<h2>Hello, <?php echo $child_fname;?></h2>
			<h4>Ako si katsu! Tara mag usap tayo.</p>
			<br><br><br><br>
			<a class="primary-btn" href="katsu-chat.php?question=1">Tara!</a> 
			
			
			</center>
		</div>
	</body>
</html>