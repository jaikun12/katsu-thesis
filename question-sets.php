<?php
	require_once("php/dbconnect_r.php");
	require("php/session_check.php");
	include("partial_view/essentials-upper-admin.html");
?>

	<table class="table table-hover" style="width:80%;">
		<thead>
			<tr>
				<th>Question Set ID</th>
				<th>Question Set Name</th>
				<th>Actions</th>
			</tr>
		<thead>
		<tbody>
			<?php
				$get_table = mysqli_query($connection, "SELECT * FROM katsu_question_sets_table");
				while($result = mysqli_fetch_array($get_table)){
					$set_id = $result['set_id'];
					$set_name = $result['set_name'];

					echo "
							<tr>
							<td>".$set_id."</td>
							<td>".$set_name."</td>
							<td><a href='question-set-details.php?id=".$set_id."' class='btn btn-primary'>Details</a>
							<tr>
						";
				}


			?>
		</tbody>
	</table>

	<button class="btn-primary" data-toggle="modal" data-target="#create-question-set-modal">Create New Set</button>



	<div class="modal fade" id="create-question-set-modal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<div class="container-fluid">

						<form action="php/create_question_set.php" method="POST" role="form">
							<legend>Create a new question set</legend>
							<label>Set Name:
							<input type="text" name="set_name" placeholder="Input question set name.">
							</label>
							<br>
							<button type="submit" class="btn btn-primary">Create Question Set</button>

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