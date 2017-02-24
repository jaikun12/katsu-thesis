<!DOCTYPE html>
<html>
<?php
	require("php/dbconnect.php");
	$question_no = $_GET['question'];
	$query = ("SELECT question_content FROM questions_table WHERE question_id = '$question_no'");
	$query2 = mysqli_query($connection, $query);
	while($result = mysqli_fetch_array($query2)){
		$question = $result['question_content'];
	}

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
			<img id="katsu" src="images/katsu.gif">
			<h2><?php echo $question;?></h2>
			
			<form action="php/submit_response.php" method="POST">
			<button type="submit" name="answer" value="yes">Yes</button>
			<button type="submit" name="answer" value="no">No</button>
			<input type="text" name="question_no" value=<?php echo "'$question_no'"; ?> style="display:none;">
			</form>
			</center>
		</div>
	</body>
	
</html>