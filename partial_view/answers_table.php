<table class="table table-hover" style="max-width: 90% !important;">
	<thead>
		<tr>
			<th>Answered by</th>
			<th>Question</th>
			<th>Answer</th>
			<th>Answer Date</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$answers_query = mysqli_query($connection, "SELECT * FROM katsu_answers_table;");

			while($r = mysqli_fetch_array($answers_query)){
				$answer_content = $r['answer_content'];
				$date_answered = $r['date_answered'];
				$user_id = $r['user_id'];
				$question_id = $r['question_id'];
				$victim_id = $r['victim_id'];

				$getchild_query = mysqli_query($connection, "SELECT * FROM katsu_childs_table WHERE child_id = $victim_id;");
				if(!$getchild_query){
					echo mysqli_error($connection);
				}

				if($get_child = mysqli_fetch_array($getchild_query)){
					$cfirstname = $get_child['child_fname'];
					$clastname = $get_child['child_lname'];
					$child_name = $clastname . ", " . $cfirstname;
				}

				$getquestion_query = mysqli_query($connection, "SELECT * FROM katsu_questions_table WHERE question_id = $question_id;");

				if($get_question = mysqli_fetch_array($getquestion_query)){
					$question_content = $get_question['question_content'];
				}


				echo "
				<tr>
					<td>".  $child_name . "</td>
					<td>" . $question_content . "</td>
					<td>" . $answer_content . "</td>
					<td>" . $date_answered . "</td>

				</tr>";
				
			}

			
			$answers_query = mysqli_query($connection, "SELECT * FROM katsu_questions_table;");

		?>
	</tbody>
</table>