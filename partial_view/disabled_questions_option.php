<select name="question_id">
	<?php
		$query = mysqli_query($connection, "SELECT * FROM katsu_questions_table WHERE is_active = 1;");
		while($r = mysqli_fetch_array($query)){
			$question_id = $r['question_id'];
			$question_content = $r['question_content'];
			echo "<option value=" . $question_id . ">" . $question_content . "</option>";
			}
	?>
</select>
<br><br>

<table class="table table-hover">
	<thead>
		<tr>
			<th>Disabled Questions</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$query2 = mysqli_query($connection, "SELECT * FROM katsu_questions_table WHERE is_active = 0;");

			while($ar = mysqli_fetch_array($query2)){
				$question_content = $ar['question_content'];
				echo "<tr>
						<td>".$question_content."</td>
					</tr>";
			}
		?>
	</tbody>
</table>