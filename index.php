<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<title>Real-Estate</title>
</head>
<body>
	<div class="container">
		<form action="create.php">
			<input type="submit" class="btn btn-success btn-create" value="Create New Inforation" >
		</form>
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">Image</th>
		      <th scope="col">Name</th>
		      <th scope="col">Username</th>
		      <th scope="col">Email</th>
		      <th scope="col">Phone</th>
		      <th scope="col">Website</th>
		      <th scope="col">Actions</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php

		  	require('functions.php');
		  	$users = getUsers("users.json");

		  	for($i = 0;$i < count($users); $i++){
		  		
		  	?>
		    <tr>
		      <th valign="middle" scope="row"><img class="table_image" src="<?php echo($users[$i]['image']);?>" alt="icon"></th>
		      <td valign="middle" ><?php echo($users[$i]['name']);?></td>
		      <td valign="middle"><?php echo($users[$i]['username']);?></td>
		      <td valign="middle"><?php echo($users[$i]['email']);?></td>
		      <td valign="middle"><?php echo($users[$i]['phone']);?></td>
		      <td valign="middle"><a href="<?php echo($users[$i]['website']);?>"><?php echo( str_replace( array('http://', 'https://'), '', $users[$i]['website']));?></a></td>
		      <td valign="middle">
		      	<form action="profile.php" method="get">
		      		<input class="none" name="id" value="<?php echo($users[$i]['id']);?>">
		      		<input type="submit" class="btn btn-outline-info btn-actions" value="View">
		      	</form>
		      	<form action="update.php?id=<?php echo($users[$i]['id']);?>">
		      		<input class="none" name="id" value="<?php echo($users[$i]['id']);?>">
		      		<input type="submit" class="btn btn-outline-primary btn-actions" value="Update">
		      	</form>
		      	<form action="delete.php">
		      		<input class="none" name="id" value="<?php echo($users[$i]['id']);?>">
		      		<input type="submit" class="btn btn-outline-danger btn-actions" value="Delete">
		      	</form>
		      </td>
		    </tr>
		<?php } ?>
		  </tbody>
		</table>
	</div>
</body>
</html>

