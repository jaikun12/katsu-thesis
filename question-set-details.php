<?php
	require_once("php/dbconnect_r.php");
	require("php/session_check.php");
	include("partial_view/essentials-upper-admin.html");

	$set_id = $_GET['id'];

	$get_question = mysqli_query($connection, "SELECT set_name FROM katsu_question_sets_table WHERE set_id = '$set_id';");
	$result = mysqli_fetch_assoc($get_question);
	$set_name = $result['set_name'];

?>

	<table class="table table-hover" style="width:80%;">
		<h2>Questions for Question set: <?php echo $set_name;?></h2>
		<thead>
			<th>Question ID</th>
			<th>Question Content</th>
			<th>Sequence</th>
		</thead>
		<tbody>
			<?php
				$query = "SELECT * FROM katsu_questions_table WHERE question_set = '$set_id' AND is_active = 1 ORDER BY sequence_no;";
				$get_questions = mysqli_query($connection, $query);
				while($result = mysqli_fetch_array($get_questions)){
					$question_id = $result['question_id'];
					$question_content = $result['question_content'];
					$sequence = $result['sequence_no'];
					$date = $result['date_created'];

					echo "
						<tr>
							<td>".$question_id."</td>
							<td>".$question_content."</td>
							<td>".$sequence."</td>
						</tr>
					";
				}


			?>
		</tbody>
	</table> 

	<button class="btn-primary" data-toggle="modal" data-target="#add-question-modal">Add New Question</button>



	<div class="modal fade" id="add-question-modal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<div class="container-fluid">

						<form action="php/create_question.php" method="POST">
							<legend>Add a question to this set</legend>

							<div class="form-group">
							<label for="">Question</label>
							<textarea name="question_content" type="text" class="form-control" id="" placeholder="Input your desired question"></textarea> 				
							</div>
							<div class="form-group">
							<label>Sequnce Number:
							<input type="text" name="sequence"></label>
							</div>
							<br>
							<button type="submit" class="btn btn-primary">Add Question</button>

						</form>

					</div>
				</div>
				
			</div>
		</div>
	</div>


	<!-- jQuery -->
<script src="js/jquery-3.1.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js""></script>
<script>
$(document).ready(function(){
$("#hide").click(function(){
$("p").hide(1000);
});
$("#show").click(function(){
$("p").show(500);
});
});
</script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
</body>
</html>
