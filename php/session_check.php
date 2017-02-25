<?php

	if(isset($_SESSION['username'])){
		header("Location: admin-dashboard.php");
	}

?>