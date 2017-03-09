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


<div class="container" id="questions-table">
	<h3>Questions</h3>

	<?php include("partial_view/questions_table.php"); ?>

	<button class="btn-primary" data-toggle="modal" data-target="#questions-modal">Add Question</button>

	<div class="modal fade" id="questions-modal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				
				<div class="modal-body">
					<!-- <div class="container" id="add-questions"> -->
					<form action="php/create_question.php" method="POST" role="form">
						<legend>Add a question</legend>
						
						<div class="form-group">
							<label for="">Question</label>
							<textarea name="question_content" type="text" class="form-control" id="" placeholder="Input your desired question"></textarea> 				
						</div>
						
						<button type="submit" class="btn btn-primary">Add Question</button>
					</form>
					<!-- </div> -->
				</div>
				
			</div>
		</div>
	</div>

	<button class="btn-primary" data-toggle="modal" data-target="#disablequestions-modal">Disable Question</button>

	<div class="modal fade" id="disablequestions-modal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				
				<div class="modal-body">

					<form action="php/disable_question.php" method="POST" role="form">
						<legend>Disable a question</legend>

						<?php include("partial_view/disabled_questions_option.php"); ?>

						<br><br>
						
						<button type="submit" class="btn btn-primary">Disable Question</button>
					</form>

				</div>
				
			</div>
		</div>
	</div>

</div>


<div class="container" id="questions-table">
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