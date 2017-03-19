<?php
	require_once("php/dbconnect_r.php");
	require("php/session_check.php");
	include("partial_view/essentials-upper-chat.html");
	include("partial_view/essentials-lower.html");

	$question_no = $_GET['question'];
	$set_id = $_GET['set_id'];
	$question_count = 0;

	$query = ("SELECT question_content FROM katsu_questions_table WHERE question_set = '$set_id' ORDER BY sequence_no;");

	$query2 = mysqli_query($connection, $query);

	while($result = mysqli_fetch_array($query2)){
		$question_count = $question_count + 1;

		if($question_count == $question_no){
			$question = $result['question_content'];
			break;
			// echo $question_count;
		}
		else{

		}
	}

	$child_id = $_SESSION['child_id'];

	?>
	
	<a href="php/logout.php"><img src="images/power-btn.png" class="logout-btn"></a>

		<div id="welcome-div">

			<center>

		<?php
			include("php/chat_output.php");
		?>

	</body>
</html>