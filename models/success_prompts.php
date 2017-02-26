<?php
	if(isset($_GET['success'])){
		$s = $_GET['success'];

		if($s == '1'){
			echo '<p class="error-msg">Admin user account created.</p>';
			}
		elseif($s = 2){
			echo '<p class="error-msg">Normal user account created</p>';
		}
		elseif($s = 3){
			echo '<p class="error-msg">This username is deactivated.</p>';
		}
		elseif($s = 4){
			echo '<p class="error-msg">The password is incorrect.</p>';
		}
		else{

		}
	}
	else{
		
	}




 ?>	
