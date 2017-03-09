<table class="table table-hover">
	<thead>
		<tr>
			<th>ID</th>
			<th>Question</th>
			<th>Date Created</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$query = mysqli_query($connection, "SELECT * FROM katsu_questions_table WHERE is_active = 1;");
			while($r = mysqli_fetch_array($query)){
				$question_id = $r['question_id'];
				$question_content = $r['question_content'];
				$date_created = $r['date_created'];
				echo "
				<tr>
							<td>" . $question_id . "</td>
							<td>" . $question_content . "</td>
							<td>" . $date_created . "</td>
				</tr>";
			}
		?>
	</tbody>
</table>