<table class="table table-hover" style="max-width: 90% !important;">
	<thead>
		<tr>
			<th>Username</th>
			<th>Name</th>
			<th>Contact #</th>
			<th>E-mail</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$query = mysqli_query($connection, "SELECT * FROM katsu_users_table;");
			while($r = mysqli_fetch_array($query)){
				if($r['is_active'] == 0){
				}else{
				$username = $r['username'];
				$is_admin = $r['is_admin'];
				$firstname = $r['firstname'];
				
				if($r['middlename'] == NULL){
					$middlename = " ";
				}else{
					$middlename = $r['middlename'];
				}
				
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
				}
			}
		?>
	</tbody>
</table>