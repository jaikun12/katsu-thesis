<?php
	if(isset($_GET['question'])){
			$check_end = $_GET['question'];
		}

		if($check_end == "end"){

			echo '
				<img id="katsu" src="images/katsu-end.gif">

				<h2>Salamat sa usapan natin. Sa uulitin ';

			$get_child = mysqli_query($connection, "SELECT * FROM katsu_childs_table WHERE child_id = $child_id;");

			if($r=mysqli_fetch_array($get_child)){
				$fname = $r['child_fname'];
			}

			echo $fname . '! <span class="glyphicon glyphicon-heart" aria-hidden="true"></span></h2>
			<h4>Pakibalik na po ako kay ate o kuya.</h4>
			<br><br><br><br>

			<a href="katsu-start.php" class="primary-btn">End session</a>
		
			</div>

			';

		}else{
			if(!isset($question)){
				// $check_end = $check_end + 1;
				// $query = "SELECT * FROM katsu_questions_table WHERE question_id = $check_end;";
				// $check_if_end = mysqli_query($connection,$query);
				// $row_count = mysqli_num_rows($check_if_end);
				// if($row_count != 0){
				// 	header("Location: ../katsu-chat.php?question=$check_end");
				// }
				// else{
					header("Location: katsu-chat.php?question=end");
				// }
				
			}
			else{
				echo '
			<img id="katsu" src="images/katsu.gif">
				<h2>' . $question . '</h2>
				
				<form action="php/submit_response.php" method="POST">
					<button type="submit" name="answer" value="yes">Oo</button>
					<button type="submit" name="answer" value="no">Hindi</button>
					<input type="text" name="question_no" value="' . $question_no . '" style="display:none;">
					<input type="text" name="set_id" value="' . $set_id . '" style="display:none;">
				</form>
				</center>

			</div>

			';
			}
			
		}

		?>