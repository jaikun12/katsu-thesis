<!DOCTYPE html>
<html>
<?php
	require("php/dbconnect.php");
	?>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/index.css">
	</head>
	<body>
		<a href="php/logout.php"><img src="images/power-btn.png" class="logout-btn"></a>
		<div id="welcome-div">
		<center>
		<h2>Create Child Profile</h2>
		
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