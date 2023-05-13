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

	<div class="container">
		<table class="table table-bordered">
		  <thead class="table-light">
		    <tr>
		      <td class="table_head" height="100px" valign="middle" colspan="2" scope="col">Update user: <b>Patricia Labsack</b></td>
		    </tr>
		  </thead>
		  <tbody>
		  	<tr>
		  		<td scope="row">
		  				<?php

							require('functions.php');

							$users = getUsers('users.json');
							$user = getUser($users, $_GET['id']);
							
							if($_POST){
								if ($users[$user]['id'] == $_GET['id']) {
									
									$users[$user]['name'] = $_POST['name'];
									$users[$user]['username'] = $_POST['username'];
									$users[$user]['email'] = $_POST['email'];
									$users[$user]['phone'] = $_POST['phone'];
									$users[$user]['website'] = $_POST['website'];
									$users[$user]['image'] = $_POST['image'];
								}

								$newJson = json_encode($users);
								file_put_contents('users.json', $newJson);

								echo('<p class="successfulUpdate" >Changes was saved!</p>');
							}

							$user = $users[$user];
						?>
			  		<form class="row g-3 needs-validation" novalidate method="post" >
			  			<div class="table-row">
			  				<label for="validationName" class="form-label">Name</label>
			  				<input type="text" name="name" id="validationName" class="form-control" minlength="3" placeholder="Name" value="<?php echo($user['name'])?>" required>
		  				    <div class="invalid-feedback">
						      Name is mandatory
						    </div>
			  			</div>  	
			  			<div class="table-row">
			  				<label for="validationUsername" class="form-label">Username</label>
			  				<input type="text" name="username" id="validationUsername" class="form-control" minlength="6" maxlength="16" placeholder="Username" value="<?php echo($user['username'])?>" required>
			  				<div class="invalid-feedback">
			  					Username is required and it must be more than 6 and less than 16 character
			  				</div>
			  			</div>  
			  			<div class="table-row">
			  				<label for="validationEmail" class="form-label">Email</label>
			  				<input type="email" name="email" id="validationEmail" class="form-control" placeholder="Email" value="<?php echo($user['email'])?>" required>
			  				<div class="invalid-feedback">
			  					It must be valid email
			  				</div>
			  			</div>  
			  			<div class="table-row">
			  				<label for="validationPhone" class="form-label">Phone</label>
			  				<input type="tel" name="phone" id="validationPhone" minlength="3" class="form-control" placeholder="Phone" value="<?php echo($user['phone']) ?>" required>
			  				<div class="invalid-feedback">
			  					It must be valid phone
			  				</div>
			  			</div> 		
			  			<div class="table-row">
			  				<label for="validationWebsite" class="form-label">Website</label>
			  				<input type="url" name="website"  id="validationWebsite" class="form-control" placeholder="Website" value="<?php echo($user['website'])?>" required>
			  				<div class="invalid-feedback">
			  					It must be valid website
			  				</div>
			  			</div> 
			  			<div class="table-row">
			  				<label for="validationImage" class="form-label">Image</label><br>
			  				<img class="table_image" src="<?php echo($user['image'])?>" alt="icon"><br>
			  				<input id="validationImage" name="image" type="url" class="form-control" placeholder="Paste picture url here" value="" required>
			  			</div>
			  			<div class="table-row">
			  				<input type="submit" class="btn btn-success btn-create" value="Submit" >
							<a href="index.php" class="btn btn-secondary">
								Back
							</a>
			  			</div>
			  		</form>		  			
		      	</td>
		    </tr>
		  </tbody>
		</table>
	</div>

	<script src="assets/js/bootstrap-validation.js"></script>
</body>
</html>