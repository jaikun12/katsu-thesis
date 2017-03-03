<!DOCTYPE html>
<html>
<?php
	require("php/dbconnect.php");
	include("php/session_check.php");
	?>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		
	</head>
	<body>
		<a href="php/logout.php"><img src="images/power-btn.png" class="logout-btn"></a>
		<div id="welcome-div">
			<center>

			<h2>Create Child Profile</h2>

			<div class="container" style="margin-bottom: -4em;">

				<?php 	
					include("models/success_prompts.php");
				?>

			</div>
		
		<form action="php/create_profile.php" method="POST">
			<input type="text" name="child_fname" placeholder="Child's First Name">
			<input type="text" name="child_mname" placeholder="Child's Middle Name">
			<input type="text" name="child_lname" placeholder="Child's Last Name">
			<input type="text" name="child_age" placeholder="Child's Age">
			<label>Gender</label><br>
			<label for="male" id="male_label" onClick="selectedRadio1()" style="font-size:0.7em; margin:20px; padding:10px; border-radius:30px;">Male
			<input type="radio" name="child_gender" id="male" value="male" style="display:none;"></label>
			<label for="female" id="female_label" onClick="selectedRadio2()" style="font-size:0.7em; margin:20px; padding:10px; border-radius:30px;">Female</label>
			<input type="radio" name="child_gender" id="female" value="female" style="display:none;">
			<input type="text" name="child_prov" placeholder="Child's Province">
			<input type="text" name="child_city" placeholder="Child's City">
			<input type="password" name="child_pword" placeholder="Child's Session Password">
			<button type="submit" class="primary-btn">Submit</button>
			
			<a href="home.php" class="link">Cancel</a>
			</center>
		</form>


		<div class="container">
		<?php 
			include("models/error_prompts.php");
		 ?>
		</div>


		</div>
		<div class="container" id="childs-table">
		<h3>CHILDS TABLE OUTPUT</h3>
		<table class="table table-hover">
			<thead>
				<tr>
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
					$query = mysqli_query($connection, "SELECT * FROM childs_table;");

					while($r = mysqli_fetch_array($query)){
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
	</body>
	<script>
		function selectedRadio1(){
			x = document.getElementById("male_label");
			y = document.getElementById("female_label");
			x.style.border = "solid white 3px";
			y.style.border = "none";
		}

		function selectedRadio2(){
			x = document.getElementById("female_label");
			y = document.getElementById("male_label");
			x.style.border = "solid white 3px";
			y.style.border = "none";
		}
	</script>
</html>