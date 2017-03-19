<?php
	require_once("php/dbconnect_r.php");
	require("php/session_check.php");
	include("partial_view/essentials-upper-admin.html");
	include("partial_view/essentials-lower.html");
?>
<br>
<h2 style="margin-left:1em;">Welcome <?php echo $lastname . ", " . $firstname . ".";?></h2>
<div style="margin-left:1em;" class="container">
	<?php
		include("php/status.php");
	?>
</div>
<a href="php/logout.php"><img src="images/power-btn.png" class="logout-btn"></a>

<div class="container" id="users-table">
	<h3>User List</h3>
	<!-- TABLE -->
	<?php include("partial_view/users_table.php"); ?>
	
	<button class="btn-primary" data-toggle="modal" data-target="#user-modal">Add User</button>

	<div class="modal fade" id="user-modal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<div class="container-fluid">
						<!-- <div class="container" id="add-user-content"> -->
						<form action="php/create_user.php" method="POST" role="form">
							<legend>Add a user or an admin</legend>
							
							<div class="form-group">
								<label for="">Username</label>
								<input name="username" type="text" class="form-control" id="" placeholder="Input username" required>
								<label for="">Password</label>
								<input name="password" type="password" class="form-control" id="" placeholder="Input password" required>
								<div class="radio">
									<label>
										<input type="radio" name="isadmin" id="" value="1" checked>
										Admin
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="isadmin" id="" value="0">
										User
									</label>
								</div>
								
								<label for="">First Name</label>
								<input name="firstname" type="text" class="form-control" id="" placeholder="Input firstname" required>
								<label for="">Middle Name</label>
								<input name="middlename" type="text" class="form-control" id="" placeholder="Input middlename">
								<label for="">Last Name</label>
								<input name="lastname" type="text" class="form-control" id="" placeholder="Input lastname" required>
								<label for="">Contact Number</label>
								<input name="contact_num" type="text" class="form-control" id="" placeholder="Input contact number" required>
								<label for="">E-mail</label>
								<input name="email" type="text" class="form-control" id="" placeholder="Input email" required>
							</div>
							
							<button type="submit" class="btn btn-primary">Add User</button>
						</form>
						<!-- </div> -->
					</div>
				</div>
				
			</div>
		</div>
	</div>

	<button class="btn-primary" data-toggle="modal" data-target="#disableuser-modal">Disable User</button>

	<div class="modal fade" id="disableuser-modal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<div class="container-fluid">

						<form action="php/disable_user.php" method="POST" role="form">
							<legend>Disable a user or an admin</legend>

							<?php include("partial_view/disabled_users_option.php"); ?> <br><br>

							<button type="submit" class="btn btn-primary">Disable User</button>

						</form>

					</div>
				</div>
				
			</div>
		</div>
	</div>

	<!-- <button class="btn-primary" data-toggle="modal" data-target="#disableduser-modal">Disabled Users</button>

	<div class="modal fade" id="disableduser-modal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<div class="container-fluid">

						<form action="php/disable_user.php" method="POST" role="form">
							<legend>Disable a user or an admin</legend>

							<button type="submit" class="btn btn-primary">Disabled Users</button>

						</form>

					</div>
				</div>
				
			</div>
		</div>
	</div> -->

</div>
<br><br>

<div class="container" id="questions-table">
	<h3>Questions</h3>

	
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
				$get_table = mysqli_query($connection, "SELECT * FROM katsu_question_sets_table WHERE is_active = 1");
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

	<button class="btn-primary" data-toggle="modal" data-target="#disable-question-set-modal">Disable Question Set</button>

	<div class="modal fade" id="disable-question-set-modal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<div class="container-fluid">
						<h4>Select the question</h4>
						<select name="question_id">
			<?php
				$query = "SELECT * FROM katsu_question_sets_table WHERE is_active = 1;";
				$get_question_sets = mysqli_query($connection, $query);
				while($result = mysqli_fetch_array($get_question_sets)){
					$set_id = $result['set_id'];
					$set_name = $result['set_name'];

					echo '
						<option value="'.$set_id.'">' . $set_name . '</option>
					';
				}


			?>
						</select>

						<h3>Disabled Question Sets</h3>
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
				$get_table = mysqli_query($connection, "SELECT * FROM katsu_question_sets_table WHERE is_active = 0");
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


					</div>
				</div>
				
			</div>
		</div>
	</div>

</div>
<br><br>

<div class="container" id="questions-table">
	<h3>Child Table</h3>
	<div class="container" style="height:250px; overflow:auto;">
	<?php include("partial_view/childs_table.php"); ?>
	</div>
	

	<button class="btn-primary" data-toggle="modal" data-target="#confirm-modal">Confirm a Victim</button>

	<div class="modal fade" id="confirm-modal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				
				<div class="modal-body">

					<form action="php/disable_question.php" method="POST" role="form">
						<legend>Confirm Child Pornography Victim</legend>
						<select name="question_id">
						<?php
							$query = mysqli_query($connection, "SELECT * FROM katsu_childs_table WHERE child_status = 'Pending';");
							while($r = mysqli_fetch_array($query)){
								$child_id = $r['question_id'];
								$child_fname = $r['child_fname'];
								$child_mname = $r['child_mname'];
								$child_lname = $r['child_lname'];
								$name = $child_lname . ", " . $child_fname . " ". $child_mname;
								echo "<option value=" . $child_id . ">" . $name . "</option>";
								}
						?>
					</select>						<br><br>
						
						<button type="submit" class="btn btn-primary">Confirm Child Pornography Victim</button>
					</form>

				</div>
				
			</div>
		</div>
	</div>
</div>
<br>
<div class="container" id="questions-table" style="height:500px; overflow:auto;">
	<h3>Answers</h3>

	<?php include("partial_view/answers_table.php"); ?>
	
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