<?php
	
	

	if(isset($_GET['error'])){
		$error_code = $_GET['error'];

		if($error_code == '1'){
			echo '<p class="error-msg">Please enter the required information into the fields.</p>';
			}
		elseif($error_code == 2){
			echo '<p class="error-msg">Invalid credentials, please try again.</p>';
		}
		elseif($error_code == 3){
			echo '<p class="error-msg">This username is deactivated.</p>';
		}
		elseif($error_code == 4){
			echo '<p class="error-msg">The password is incorrect.</p>';			
		}
		elseif($error_code == 5){
			echo '<p class="error-msg">Child credentials (First name, Middle name, Last name) already in the database.</p>';
		}
		elseif($error_code == 6){
			echo '<p class="error-msg">Please enter important child credentials. (At least a first name and last name provided.)</p>';
		}
		else{

		}
	}
	else{
		
	}


?>