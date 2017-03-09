<table class="table table-hover" style="max-width: 90% !important;">
	<thead>
		<tr>
			<th>Name</th>
			<th>Age</th>
			<th>Gender</th>
			<th>Status</th>
			<th>Created by</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$query = mysqli_query($connection, "SELECT * FROM katsu_childs_table;");
			while($r = mysqli_fetch_array($query)){
				if($r['child_status'] == "Confirmed"){
				}elseif($r['child_status'] == "Pending"){
				$child_fname = $r['child_fname'];
				$child_mname = $r['child_mname'];
				$child_lname = $r['child_lname'];
				$name = $child_lname . ", " . $child_fname . " ". $child_mname;
				$child_age = $r['child_age'];
				$child_gender = $r['child_gender'];
				$child_status = $r['child_status'];
				$user_id_child = $r['user_id'];

				$query2 = mysqli_query($connection, "SELECT * FROM katsu_users_table WHERE user_id = $user_id_child;");

				if($r = mysqli_fetch_array($query2)){
					$created_by = $r['username'];
				}

				echo "
				<tr>";

					if($is_admin == 1) {
						echo "<td style='border-left:2px solid red;'>";
						}else{
							echo "<td style='border-left:2px solid lightgreen;'>";
							}
								echo $name . "</td>
								<td>" . $child_age . "</td>
								<td>" . $child_gender . "</td>
								<td>" . $child_status . "</td>
								<td>" . $created_by . "</td>
					</tr>
					";
				}
			}
		?>
	</tbody>
</table>