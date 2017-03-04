<?php
	require_once("php/dbconnect.php");
	require("php/session/session_check.php");
	include("partial_view/essentials-upper-user.html");
	include("partial_view/essentials-lower.html");
?>
		<a href="php/logout.php"><img src="images/power-btn.png" class="logout-btn"></a>
		<div id="welcome-div">
			<center>
			
			<img src="images/katsu.gif">
			<h1>Welcome <?php echo $lastname . ", " . $firstname . ".";?></h1>
			<br>
			<h4>Before starting a session, we require you to create a profile of the child that you are going to interview with katsu.</h4>
			<br>
			<a href="katsu-start.php" class="link">Start a session</a><br><br><br>
			<a href="create-profile.php" class="primary-btn">Create child profile</a>
			</center>
		</div>
		
	</body>
</html>