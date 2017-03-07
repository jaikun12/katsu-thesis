<select name="question_id">
	<?php
		$query = mysqli_query($connection, "SELECT * FROM katsu_questions_table;");
		while($r = mysqli_fetch_array($query)){
			$question_id = $r['question_id'];
			$question_content = $r['question_content'];
			echo "<option value=" . $question_id . ">" . $question_content . "</option>";
			}
	?>
</select>