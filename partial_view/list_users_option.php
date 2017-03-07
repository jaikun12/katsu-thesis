<select name="username">
	<?php
		$query = mysqli_query($connection, "SELECT * FROM katsu_users_table;");
		while($r = mysqli_fetch_array($query)){
			$username = $r['username'];
			echo "<option value=" . $username . ">" . $username . "</option>";
			}
	?>
</select>