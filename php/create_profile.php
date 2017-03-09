<html>
<head><title>Creating Profile...</title></head>
<body>
<?php

	include("dbconnect.php");
	include("session_check.php");

	//preparation
	$check_child_table = $connection->prepare("SELECT * FROM katsu_childs_table WHERE child_fname = ? AND child_mname = ? AND child_lname = ?;");
	$check_child_table->bind_param("sss", $child_fname,$child_mname,$child_lname);

	$select_child = $connection->prepare("SELECT child_id FROM katsu_childs_table WHERE child_fname = ? AND child_mname = ? AND child_lname = ?;");
	$select_child->bind_param("sss", $child_fname,$child_mname,$child_lname);

	$insert_query = $connection->prepare("INSERT INTO katsu_childs_table (user_id, child_fname, child_mname, child_lname, child_age, child_gender, child_prov, child_city, child_pword) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
	$insert_query->bind_param("isssissss",$userid,$child_fname,$child_mname,$child_lname,$child_age,$child_gender,$child_prov,$child_city,$child_pword);

	$userid = $_SESSION['user_id'];
	$child_fname = $_POST['child_fname'];
	$child_mname = $_POST['child_mname'];
	$child_lname = $_POST['child_lname'];
	$child_age = $_POST['child_age'];
	$child_gender = $_POST['child_gender'];
	$child_prov = strtolower($_POST['child_prov']);
	$child_prov = preg_replace('/\s+/', '-', $child_prov);
	$child_city = $_POST['child_city'];
	$child_pword1 = $_POST['child_pword'];
	$child_pword = crypt($child_pword1, '$!@#$%ChilDPorN');

	// echo "<br>child_fname: ".$child_fname;
	// echo "<br>child_mname: ".$child_mname;
	// echo "<br>child_lname: ".$child_lname;
	// echo "<br>child_age: ".$child_age;
	// echo "<br>child_gender: ".$child_gender;
	// echo "<br>child_prov: ".$child_prov;
	// echo "<br>child_city: ".$child_city;
	// echo "<br>child_pword: ".$_POST['child_pword'];
	// echo "<br>child_encrypted_pword ".$child_pword;

	// echo "<br>";

	$check_child_table->execute();
	$check_child_table->store_result();
	$row_count = $check_child_table->num_rows;

	echo $row_count;

	
	if(!$child_fname || !$child_lname){
		header("Location: ../create-profile.php?error=6");
	}else{
		$query = mysqli_query("SELECT * FROM katsu_users_table;");
		while($r=mysqli_fetch_array($query)){
			if($row_count==0||$r['ist_active']==0){

				$insert_query->execute();

				if (!$insert_query){
					echo "$insert_query error!" . mysqli_error($connection);
				}else{
					
					$select_child->execute();
					$select_child->store_result();

					if($r=$select_child->fetch()){
						$child_id_placeholder = $r['child_id'];
					}else{
					}

					// echo "Child credentials created.";
					header("Location: ../create-profile.php?success=5&child_id=".$child_id_placeholder);
				}
			}else{
				echo "Child credentials already exists.";
				header("Location: ../create-profile.php?error=5");
				
			}
		}
	}
	

	//close
	$check_child_table->close();
	$insert_query->close();
	$connection->close();

?>
</body>
</html>