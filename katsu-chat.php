<?php
	require_once("php/dbconnect.php");
	require("php/session/session_check.php");
	include("partial_view/essentials-upper-user.html");
	include("partial_view/essentials-lower.html");

	$question_no = $_GET['question'];

	$query = ("SELECT question_content FROM questions_table WHERE question_id = '$question_no'");

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
		if(isset($_GET['question'])){
			$check_end = $_GET['question'];
		}

		if($check_end == "end"){

			echo '
				<img id="katsu" src="images/katsu-end.gif">

				<h2>Salamat sa usapan natin. Sa uulitin ';

			$get_child = mysqli_query($connection, "SELECT * FROM childs_table WHERE child_id = $child_id;");

			if($r=mysqli_fetch_array($get_child)){
				$fname = $r['child_fname'];
			}

			echo $fname . '! <span class="glyphicon glyphicon-heart" aria-hidden="true"></span></h2>
			<h4>Pakibalik na po ako kay ate o kuya.</h4>
			<br><br><br><br>

			<a href="katsu-start.php" class="primary-btn">End session</a>
		
			</div>

			';
			unset()

		}else{
			echo '
			<img id="katsu" src="images/katsu.gif">
				<h2>' . $question . '</h2>
				
				<form action="php/submit_response.php" method="POST">
					<button type="submit" name="answer" value="yes">Oo</button>
					<button type="submit" name="answer" value="no">Hindi</button>
					<input type="text" name="question_no" value="' . $question_no . '" style="display:none;">
				</form>
				</center>

			</div>

			';
		}

		

		?>

	</body>
</html>