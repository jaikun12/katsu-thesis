<?php
	if(isset($_GET['success'])){
		$s = $_GET['success'];

		if($s == '1'){
			echo '<p class="success-msg">Admin user account created.</p>';
			}
		elseif($s == 2){
			echo '<p class="success-msg">Normal user account created</p>';
		}
		elseif($s == 3){
			echo '<p class="success-msg">This username is deactivated.</p>';
		}
		elseif($s == 4){
			echo '<p class="success-msg">The password is incorrect.</p>';
		}
		elseif($s == 5){
			echo '<p class="success-msg">Child credentials added. </p>';
		}
		else{

		}
	}
	else{
		
	}




 ?>	
