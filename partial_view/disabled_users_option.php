<select name="user_id">
	<?php
		$query = mysqli_query($connection, "SELECT * FROM katsu_users_table WHERE is_active = 1;");
		while($r = mysqli_fetch_array($query)){
			$user_id = $r['user_id'];
			$username = $r['username'];
			echo "<option value=" . $user_id . ">" . $username . "</option>";
			}
	?>
</select>
<br><br>

<table class="table table-hover">
	<thead>
		<tr>
			<th>Disabled Usernames</th>
			<th>Name</th>
			<th>Contact #</th>
			<th>E-mail</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$query2 = mysqli_query($connection, "SELECT * FROM katsu_users_table WHERE is_active = 0;");

			while($r = mysqli_fetch_array($query2)){
				$username = $r['username'];
				$is_admin = $r['is_admin'];
				$firstname = $r['firstname'];
				
				$lastname = $r['lastname'];
				$name = $lastname . ", " . $firstname . " ". $middlename;
				$contact_num = $r['contact_num'];
				$email = $r['email'];

				echo "
				<tr>";

					if($is_admin == 1) {
						echo "<td style='border-left:2px solid red;'>";
						}else{
							echo "<td style='border-left:2px solid lightgreen;'>";
							}
								echo $username . "</td>
								<td>" . $name . "</td>
								<td>" . $contact_num . "</td>
								<td>" . $email . "</td>
					</tr>
					";
					echo mysqli_error($connection);
			}
		?>
	</tbody>
</table>