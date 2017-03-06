<?php
	require_once("php/dbconnect_r.php");
	require("php/session_init.php");
	include("partial_view/essentials-upper-user.html");
	include("partial_view/essentials-lower.html");
?>
<div id="welcome-div">

	<center>
		<img src="images/katsu.gif">
		<h2>Welcome to Katsu</h2>
		<br>
		<h4>Katsu is a chatbot used to obtain responses from suspected child pornography victims.</h4>
		<br>
		<h3>To begin, create a child profile and start a session with katsu.</h3>
	</center>

	<center>
		<form action="php/user-authentication.php" method="POST">
			<input type="text" name="username" placeholder="Username">
			<input type="password" name="password" placeholder="Password">
			<button type="submit" class="primary-btn">Login</button>
		</form>
	</center>

	<?php
		include("php/status.php");
	?>

</div>

</body>
</html>