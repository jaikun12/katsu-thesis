<?php
	require_once("php/dbconnect_r.php");
	require("php/session_check.php");
	include("partial_view/essentials-upper-admin.html");

	$set_id = $_GET['id'];
	$_SESSION['question_set_id'] = $set_id;

	$get_question = mysqli_query($connection, "SELECT set_name FROM katsu_question_sets_table WHERE set_id = '$set_id';");
	$result = mysqli_fetch_assoc($get_question);
	$set_name = $result['set_name'];

?>
<div class="container">

	<table class="table table-hover" style="width:80%;">
		<h2>Questions for Question set: <?php echo $set_name;?></h2>
		<?php include("php/status.php"); ?>
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
	<button class="btn-primary" data-toggle="modal" data-target="#disable-question-modal">Disable a Question</button>
	<button class="btn-primary" data-toggle="modal" data-target="#edit-question-modal">Edit a Question</button>
	<a href="admin-dashboard.php"><button class="btn-primary">Back</button></a>



	<div class="modal fade" id="add-question-modal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<div class="container-fluid">

						<form <?php echo 'action="php/create_question.php?id=' . $set_id . '"'; ?> method="POST">
							<legend>Add a question to this set</legend>

							<div class="form-group">
							<label for="">Question</label>
							<textarea name="question_content" type="text" class="form-control" id="" placeholder="Input your desired question" required></textarea> 				
							</div>
							<div class="form-group">
							<label>Sequence Number:
							<input type="text" name="sequence" required></label>
							</div>
							<br>
							<button type="submit" class="btn btn-primary">Add Question</button>

						</form>

					</div>
				</div>
				
			</div>
		</div>
	</div>

<!-- disable a question -->
	<div class="modal fade" id="disable-question-modal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<div class="container-fluid">

						<form <?php echo 'action="php/disable_question.php?id=' . $set_id . '"'; ?> method="POST">
							<legend>Select a question to disable</legend>
							<select name="question_id">
			<?php
				$query = "SELECT * FROM katsu_questions_table WHERE question_set = '$set_id' AND is_active = 1 ORDER BY sequence_no;";
				$get_questions = mysqli_query($connection, $query);
				while($result = mysqli_fetch_array($get_questions)){
					$question_id = $result['question_id'];
					$question_content = $result['question_content'];
					$sequence = $result['sequence_no'];
					$date = $result['date_created'];

					echo '
						<option value="'.$question_id.'">' . $question_content . '</option>
					';
				}


			?>
							</select>
							<br><br>
							<button type="submit" class="btn btn-primary">Disable Question</button>

						</form>
<br><br>
		<table class="table table-hover" style="width:80%;">
		<h4>Questions Disabled for <?php echo $set_name;?></h4>
		<thead>
			<th>Question ID</th>
			<th>Question Content</th>
			<th>Sequence</th>
		</thead>
		<tbody>
			<?php
				$query = "SELECT * FROM katsu_questions_table WHERE question_set = '$set_id' AND is_active = 0 ORDER BY sequence_no;";
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

					</div>
				</div>
				
			</div>
		</div>
	</div>

	<div class="modal fade" id="edit-question-modal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<div class="container-fluid">

						<form <?php echo 'action="php/edit_question.php?id=' . $set_id . '"'; ?> method="POST">

						<legend>Modify a sequence of a question</legend>
						<h4>Select the question</h4>
							<select name="question_id">
			<?php
				$query = "SELECT * FROM katsu_questions_table WHERE question_set = '$set_id' AND is_active = 1 ORDER BY sequence_no;";
				$get_questions = mysqli_query($connection, $query);
				while($result = mysqli_fetch_array($get_questions)){
					$question_id = $result['question_id'];
					$question_content = $result['question_content'];
					$sequence = $result['sequence_no'];
					$date = $result['date_created'];

					echo '
						<option value="'.$question_id.'">' . $question_content . '</option>
					';
				}


			?>
							</select>
							<h3>Input new question sequence</h3>

							<div class="form-group">
							<label>Sequence Number:
							<input type="text" name="sequence" required></label>
							</div>
							<br>
							<button type="submit" class="btn btn-primary">Update Sequence</button>

						</form>
<br>
	<table class="table table-hover" style="width:80%;">
		<h4>Reference Questions of <?php echo $set_name;?></h4>
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

					</div>
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
