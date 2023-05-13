<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<title>CRUD application</title>
</head>
<body>
	<?php

	require('functions.php');

	$users = getUsers("users.json");
  	$user = $users[getUser($users, $_GET['id'])];

	?>
	<div class="container">
		<table class="table table-bordered">
		  <thead class="table-light">
		    <tr>
		      <td class="table_head" height="100px" valign="middle" colspan="2" scope="col">User profile: <b><?php echo $user['name']?></b></td>
		    </tr>
		  </thead>
		  <tbody>
		  	<tr>
		  		<th colspan="2" scope="row">
		  			<form action="update.php">
		  				<input class="none" name="id" value="<?php echo($user['id']);?>">
		  				<input type="submit" class="btn btn-outline-primary btn-actions" value="Update">
		  			</form>
		  			<form action="">
		  				<input type="submit" class="btn btn-outline-danger btn-actions" value="Delete">
		  			</form>
					<a href="index.php" class="btn btn-outline-secondary btn-actions">
						Back
					</a>		  			      		
		      	</th>
		    </tr>
		    <tr valign="middle" height="50px" >
		      <th width="250px" scope="row">Name:</th>
		      <td><?php echo($user['name']) ?></td>
		    </tr>
		    <tr valign="middle" height="50px" >
		      <th width="250px" scope="row">Username:</th>
		      <td><?php echo($user['username']) ?></td>
		    </tr>
		    <tr valign="middle" height="50px" >
		      <th width="250px" scope="row">Email:</th>
		      <td><?php echo($user['email']) ?></td>
		    </tr>
		    <tr valign="middle" height="50px" >
		      <th width="250px" scope="row">Phone:</th>
		      <td><?php echo($user['phone']) ?></td>
		    </tr>
		    <tr valign="middle" height="50px" >
		      <th width="250px" scope="row">Website:</th>
		      <td><?php echo($user['website']) ?></td>
		    </tr>
		  </tbody>
		</table>
	</div>
</body>
</html>