<?php
	require_once("php/dbconnect_r.php");
	require("php/session_check.php");
	include("partial_view/essentials-upper-user.html");
	include("partial_view/essentials-lower.html");
?>

	<a href="php/logout.php"><img src="images/power-btn.png" class="logout-btn"></a>
		<div id="welcome-div">

			<center>
			<img src="images/katsu.gif">
			<h1>Start a conversation with katsu.</h1>
			</center>

			<h4>Before starting a session, we require you to create a profile of the child that you are going to interview with katsu.</h4>
			<br>
			<h4>Fill up the form below to start a session with katsu.</h4>

			<center>

				<form action="php/katsu_start_session.php" method="POST">
					<input type="text" name="profile_id" placeholder="Child Profile ID">
					<input type="password" name="password" placeholder="Child Session Password">
					<button type="submit" class="primary-btn">Start Session</button>
					<a href="home.php" class="link">Cancel</a>
				</form>

			</center>

			<?php
				include("php/status.php");
			?>

		</div>
	</body>
</html>