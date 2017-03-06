<?php
	require_once("php/dbconnect.php");
	require("php/session/session_check.php");
	include("partial_view/essentials-upper-chat.html");
	include("partial_view/essentials-lower.html");

	$question_no = $_GET['question'];

	$query = ("SELECT question_content FROM katsu_questions_table WHERE question_id = '$question_no'");

	$query2 = mysqli_query($connection, $query);

	while($result = mysqli_fetch_array($query2)){
		$question = $result['question_content'];
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