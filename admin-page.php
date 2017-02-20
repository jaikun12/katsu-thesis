<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin Dashboard</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
		<form action="php/insert_user.php" method="POST" role="form">
			<legend>Add a user or an admin</legend>
		
			<div class="form-group">

				<label for="">Username</label>
				<input name="username" type="text" class="form-control" id="" placeholder="Input username">

				<label for="">Password</label>
				<input name="password" type="password" class="form-control" id="" placeholder="Input password">

				<div class="radio">
				  	<label>
					    <input type="radio" name="isadmin" id="" value="1" checked>
					    Admin
				  	</label>
				</div>

				<div class="radio">
					<label>
						<input type="radio" name="isadmin" id="" value="0">
						User
					</label>
				</div>
				
				<label for="">First Name</label>
				<input name="firstname" type="text" class="form-control" id="" placeholder="Input username">

				<label for="">Middle Name</label>
				<input name="middlename" type="text" class="form-control" id="" placeholder="Input username">

				<label for="">Last Name</label>
				<input name="lastname" type="text" class="form-control" id="" placeholder="Input username">

				<label for="">Contact Number</label>
				<input name="contact_num" type="text" class="form-control" id="" placeholder="Input username">

				<label for="">E-mail</label>
				<input name="email" type="text" class="form-control" id="" placeholder="Input username">

			</div>
			
			<button type="submit" class="btn btn-primary">Add User</button>
		</form>
		</div>

		<!-- jQuery -->
		<script src="js/jquery-3.1.1.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="js/bootstrap.min.js""></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>