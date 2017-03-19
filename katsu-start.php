<?php
	require_once("php/dbconnect_r.php");
	require("php/session_check.php");
	include("partial_view/essentials-upper-user.html");
	include("partial_view/essentials-lower.html");
?>

	<a href="php/logout.php"><img src="images/power-btn.png" class="logout-btn"></a>
		<div id="welcome-div">

			<center>
			<img src="images/katsu.gif">
			<h1>Start a conversation with katsu.</h1>
			</center>

			<h4>Before starting a session, we require you to create a profile of the child that you are going to interview with katsu.</h4>
			<br>
			<h4>Fill up the form below to start a session with katsu.</h4>

			<center>

				<form action="php/katsu_start_session.php" method="POST">
					<input type="text" name="profile_id" placeholder="Child Profile ID">
					<input type="password" name="password" placeholder="Child Session Password">
					<select name="question_set" style="width:70%;">
						<option selected disabled>Select Question Set</option>
						<?php
							$query = mysqli_query($connection, "SELECT * FROM katsu_question_sets_table;");
							while($result = mysqli_fetch_array($query)){
								$question_set = $result['set_name'];
								$set_id = $result['set_id'];

								echo "<option value='".$set_id."'>".$question_set."</option>";
							}
							?>
					</select>
					<button type="submit" class="primary-btn">Start Session</button>
					<a href="home.php" class="link">Cancel</a>
				</form>
				<h4>Scroll down to view child table.</h4>
			</center>

			<div class="container" id="childs-table">
		<h3>CHILDS TABLE OUTPUT</h3>
		<table class="table table-hover"">
			<thead>
				<tr>
					<th>Child ID</th>
					<th>Name</th>
					<th>Age</th>
					<th>Gender</th>
					<th>Province</th>
					<th>City</th>
					<th>Time Created</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$query = mysqli_query($connection, "SELECT * FROM katsu_childs_table;");

					while($r = mysqli_fetch_array($query)){
						$child_id = $r['child_id'];
						$firstname = $r['child_fname'];
						$middlename = $r['child_mname'];
						$lastname = $r['child_lname'];
						$name = $lastname . ", " . $firstname . " " . $middlename;
						$age = $r['child_age'];
						$gender = $r['child_gender'];
						$province = $r['child_prov'];
						$city = $r['child_city'];
						$time_created = $r['time_created'];

						echo "
						<tr>
							<td>" . $child_id . "</td>
							<td>" . $name . "</td>
							<td>" . $gender . "</td>
							<td>" . $age . "</td>
							<td>" . $province . "</td>
							<td>" . $city . "</td>
							<td>" . $time_created . "</td>
						</tr>";
					}

				?>
			</tbody>
		</table>
	</div>

			<?php
				include("php/status.php");
			?>

		</div>
	</body>
</html>