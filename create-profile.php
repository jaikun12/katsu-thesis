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
		<div id="welcome-div">
		<center>
		<h2>Create Child Profile</h2>
		
		<form action="php/create_profile.php" method="POST">
			<input type="text" name="child_fname" placeholder="Child's First Name">
			<input type="text" name="child_mname" placeholder="Child's Middle Name">
			<input type="text" name="child_lname" placeholder="Child's Last Name">
			<input type="text" name="child_age" placeholder="Child's Age">
			<h4>Gender</h4>
			<label for="male" id="male_label" onClick="selectedRadio1()">Male
			<input type="radio" name="child_gender" id="male" value="male" style="display:none;"></label>
			<label for="female" id="female_label" onClick="selectedRadio2()">Female</label>
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
		x.style.color = "red";
		y.style.color = "black";
	}

	function selectedRadio2(){
		x = document.getElementById("female_label");
		y = document.getElementById("male_label");
		x.style.color = "red";
		y.style.color = "black";
	}



	</script>
</html>