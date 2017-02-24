<?php
	
	

	if(isset($_GET['error'])){
		$error_code = $_GET['error'];

		if($error_code == '1'){
			echo '<p class="error-msg">Please enter the required information into the fields.</p>';
			}
		elseif($error_code = 2){
			echo '<p class="error-msg">Invalid credentials, please try again.</p>';
		}
		else{

		}
	}
	else{
		
	}


?>