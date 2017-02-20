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
	?>

	<head>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/katsu-chat.css">

	</head>
	<body>
		<div class="container">
			<nav class="chat-nav">

			</nav>
			<center>
			<img id="katsu" src="images/katsu.gif">
			<h2><?php echo $question;?></h2>
			<form action="php/submit_response.php" method="POST">
			<button type="submit" name="answer" value="yes">Yes</button>
			<button type="submit" name="answer" value="no">No</button>
			</form>
			</center>
		</div>
	</body>
</html>