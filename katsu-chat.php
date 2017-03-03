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

	require("php/session_check.php");

	$child_id = $_SESSION['child_id'];

	?>

	<head>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/katsu-chat.css">
		<link rel="stylesheet" type="text/css" href="css/index.css">

	</head>
	<body>
		<a href="php/logout.php"><img src="images/power-btn.png" class="logout-btn"></a>

		<?php

		if(!$question){
			echo '

			<div id="welcome-div">

				<center>
				<img id="katsu" src="images/katsu-end.gif">

				<h2>Salamat sa usapan natin. Sa uulitin ';

			$get_child = $connection->mysqli_query("SELECT * FROM childs_table WHERE child_id = $child_id;");

			if($r=mysqli_fetch_array($get_child)){
				$fname = $r['child_fname'];
			}

			echo $fname . '!</h2>
		
			</div>

			';
		}else{
			echo '

			<div id="welcome-div">

				<center>
				<img id="katsu" src="images/katsu.gif">

				<h2><?php echo $question;?></h2>
				
				<form action="php/submit_response.php" method="POST">
					<button type="submit" name="answer" value="yes">Yes</button>
					<button type="submit" name="answer" value="no">No</button>
					<input type="text" name="question_no" value=<?php echo "' . $question_no . '"; ?> style="display:none;">
				</form>
				</center>

			</div>

			';
		}

		

		?>

	</body>
</html>