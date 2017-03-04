<?php
	require_once("php/dbconnect.php");
	require("php/session/session_check.php");
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
				<input name="firstname" type="text" class="form-control" id="" placeholder="Input username" required>

				<label for="">Middle Name</label>
				<input name="middlename" type="text" class="form-control" id="" placeholder="Input username">

				<label for="">Last Name</label>
				<input name="lastname" type="text" class="form-control" id="" placeholder="Input username" required>

				<label for="">Contact Number</label>
				<input name="contact_num" type="text" class="form-control" id="" placeholder="Input username" required>

				<label for="">E-mail</label>
				<input name="email" type="text" class="form-control" id="" placeholder="Input username" required>

			</div>
			
			<button type="submit" class="btn btn-primary">Add User</button>
		</form>
		<!-- </div> -->

	</div>
    	  </div>
    	  
   	 </div>
  	</div>
</div>

	<div class="container" id="users-table">
		<h3>User List</h3>
		<table class="table table-hover" style="max-width: 90% !important;">
			<thead>
				<tr>
					<th>Username</th>
					<th>Admin?</th>
					<th>Name</th>
					<th>Contact #</th>
					<th>E-mail</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$query = mysqli_query($connection, "SELECT * FROM users_table;");

					while($r = mysqli_fetch_array($query)){
						$username = $r['username'];
						$is_admin = $r['is_admin'];
						$firstname = $r['firstname'];
						$middlename = $r['middlename'];
						$lastname = $r['lastname'];
						$name = $lastname . ", " . $firstname . " ". $middlename;
						$contact_num = $r['contact_num'];
						$email = $r['email'];

						echo "
						<tr>
							<td>" . $username . "</td>
							<td>" . $is_admin . "</td>
							<td>" . $name . "</td>
							<td>" . $contact_num . "</td>
							<td>" . $email . "</td>
						</tr>
						";
					}

				?>
			</tbody>
		</table>
		<button class="btn-primary" data-toggle="modal" data-target="#user-modal">Add User</button>

	</div>

	<div class="container" id="questions-table">
		<h3>Questions</h3>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Question</th>
<!-- 					<th>Weight</th>
					<th>Category</th> -->
					<th>Date Created</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$query = mysqli_query($connection, "SELECT * FROM questions_table;");

					while($r = mysqli_fetch_array($query)){
						$question_id = $r['question_id'];
						$question_content = $r['question_content'];

						
						// $question_weight = $r['question_weight'];
						// $question_category = $r['question_category'];
							// 						<td>" . $question_weight . "</td>
							// <td>" . $question_category . "</td>


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
		<button class="btn-primary" data-toggle="modal" data-target="#questions-modal">Add Question</button>
	</div>

	<div class="container" id="questions-table">
		<h3>Answers</h3>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Question</th>
					<th>Answer Content</th>
					<th>Date Answered</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$query = mysqli_query($connection, "SELECT * FROM answers_table;");

					while($r = mysqli_fetch_array($query)){
						$question_id = $r['question_id'];

						$get_question = mysqli_query($connection, "SELECT question_content FROM questions_table WHERE question_id = '$question_id'");

						$answer_content = $r['answer_content'];
						$date_answered = $r['date_answered'];

						echo "
						<tr>
							<td>";
						while($r=mysqli_fetch_array($get_question)){ 
								echo $r['question_content'];
							} 
						echo "</td>
							<td>" . $answer_content . "</td>
							<td>" . $date_answered . "</td>
						</tr>";
					}

				?>
			</tbody>
		</table>
		
	</div>

	<div class="modal fade" id="questions-modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        	<!-- <div class="container" id="add-questions"> -->
		<form action="php/create_question.php" method="POST" role="form">
			<legend>Add a question</legend>
		
			<div class="form-group">

				<label for="">Question</label>
				<input name="question_content" type="text" class="form-control" id="" placeholder="Input your desired question">

				<label for="">Question Weight</label>
				<input name="question_weight" type="text" class="form-control" id="" placeholder="Input the question weight">

				<label for="">Question Category</label>
				<div class="radio">
				  	<label>
					    <input type="radio" name="category" id="" value="General" checked>
					    General
				  	</label>
				</div>

				<div class="radio">
					<label>
						<input type="radio" name="category" id="" value="Child Abuse">
						Child abuse
					</label>
				</div>

				<div class="radio">
					<label>
						<input type="radio" name="category" id="" value="Child Porn">
						Child porn
					</label>
				</div>

			</div>
			
			<button type="submit" class="btn btn-primary">Add Question</button>
		</form>
	<!-- </div> -->
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