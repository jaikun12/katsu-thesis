<html>
<head><title>Creating Profile...</title></head>
<body>
<?php

	include("dbconnect.php");

	$child_fname = $_POST['child_fname'];
	$child_mname = $_POST['child_mname'];
	$child_lname = $_POST['child_lname'];
	$child_age = $_POST['child_age'];
	$child_gender = $_POST['child_gender'];
	$child_prov = $_POST['child_prov'];
	$child_city = $_POST['child_city'];
	$child_pword = $_POST['child_pword'];

	echo "<br>child_fname: ".$child_fname;
	echo "<br>child_mname: ".$child_mname;
	echo "<br>child_lname: ".$child_lname;
	echo "<br>child_age: ".$child_age;
	echo "<br>child_gender: ".$child_gender;
	echo "<br>child_prov: ".$child_prov;
	echo "<br>child_city: ".$child_city;
	echo "<br>child_pword: ".$child_pword;
	echo "<br>";

	$check_child_table = mysqli_query($connection, "SELECT * FROM childs_table WHERE child_fname = '$child_fname' AND child_mname = '$child_mname' AND child_lname = '$child_lname';");

	if(mysqli_num_rows($check_child_table) == 0){

		$insert_query = mysqli_query($connection, "INSERT INTO childs_table (child_fname, child_mname, child_lname, child_age, child_gender, gender_prov, child_city, child_pword) VALUES ('$child_fname', '$child_mname', '$child_lname', '$child_age', '$child_gender', '$child_prov', '$child_city', '$child_pword')");

		if (!$insert_query){
			echo "$insert_query error!" . mysqli_error($connection);
		}else{
					echo "Child credentials created.";
		}

	}else{
		echo "Child credentials already exists.";
	}


?>
</body>
</html>