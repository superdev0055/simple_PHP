<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<title>CRUD appliction</title>
</head>
<body>
	<div class="container">
		<table class="table table-bordered">
		  <thead class="table-light">
		    <tr>
		      <td class="table_head" height="100px" valign="middle" colspan="2" scope="col">Create new information</td>
		    </tr>
		  </thead>
		  <tbody>
		  	<tr>
		  		<td scope="row">
		  			<?php 

		  			require('functions.php');

		  			$users = getUsers('users.json');
		  			if($_POST){

		  				$newUser = new stdClass();

		  				$newUser->id = end($users)['id'] + 1;
		  				$newUser->name = $_POST['name'];
		  				$newUser->username = $_POST['username'];
		  				$newUser->email = $_POST['email'];
		  				$newUser->phone = $_POST['phone'];
		  				$newUser->website = $_POST['website'];
		  				$newUser->image = $_POST['image'];

		  				$users[] = $newUser;

  						$newJson = json_encode($users);
						file_put_contents('users.json', $newJson);
		  			}

		  			?>
			  		<form class="row g-3 needs-validation" novalidate method="post" >
			  			<div class="table-row">
			  				<label for="validationName" class="form-label">First Name</label>
			  				<input type="text" id="validationName" name="name" class="form-control" minlength="3" placeholder="Name" value="" required>
		  				    <div class="invalid-feedback">
						      Name is mandatory
						    </div>
			  			</div>  	
			  			<div class="table-row">
			  				<label for="validationUsername" class="form-label">Last Name</label>
			  				<input type="text" id="validationUsername" name="username" class="form-control" minlength="6" maxlength="16" placeholder="Username" value="" required>
			  				<div class="invalid-feedback">
			  					Username is required and it must be more than 6 and less than 16 character
			  				</div>
			  			</div>  
			  			<div class="table-row">
			  				<label for="validationUsername" class="form-label">Position</label>
			  				<input type="text" id="validationUsername" name="username" class="form-control" minlength="6" maxlength="16" placeholder="Username" value="" required>
			  				<div class="invalid-feedback">
			  					Username is required and it must be more than 6 and less than 16 character
			  				</div>
			  			</div>  
			  			<div class="table-row">
			  				<label for="validationUsername" class="form-label">Phone Number</label>
			  				<input type="number" id="validationUsername" name="username" class="form-control" minlength="6" maxlength="16" placeholder="Username" value="" required>
			  				<div class="invalid-feedback">
			  					Username is required and it must be more than 6 and less than 16 character
			  				</div>
			  			</div>  
			  			<div class="table-row">
			  				<label for="validationUsername" class="form-label">Whatsapp Number</label>
			  				<input type="text" id="validationUsername" name="username" class="form-control" minlength="6" maxlength="16" placeholder="Username" value="" required>
			  				<div class="invalid-feedback">
			  					Username is required and it must be more than 6 and less than 16 character
			  				</div>
			  			</div>  
			  			<div class="table-row">
			  				<label for="validationUsername" class="form-label">Email</label>
			  				<input type="text" id="validationUsername" name="username" class="form-control" minlength="6" maxlength="16" placeholder="Username" value="" required>
			  				<div class="invalid-feedback">
			  					Username is required and it must be more than 6 and less than 16 character
			  				</div>
			  			</div>  
			  			<div class="table-row">
			  				<label for="validationUsername" class="form-label">Facebook</label>
			  				<input type="text" id="validationUsername" name="username" class="form-control" minlength="6" maxlength="16" placeholder="Username" value="" required>
			  				<div class="invalid-feedback">
			  					Username is required and it must be more than 6 and less than 16 character
			  				</div>
			  			</div>  
			  			<div class="table-row">
			  				<label for="validationUsername" class="form-label">Twiter</label>
			  				<input type="text" id="validationUsername" name="username" class="form-control" minlength="6" maxlength="16" placeholder="Username" value="" required>
			  				<div class="invalid-feedback">
			  					Username is required and it must be more than 6 and less than 16 character
			  				</div>
			  			</div>  

			  			<div class="table-row">
			  				<label for="validationEmail" class="form-label">Instagram</label>
			  				<input type="email" id="validationEmail" name="email" class="form-control" placeholder="Email" value="" required>
			  				<div class="invalid-feedback">
			  					It must be valid email
			  				</div>
			  			</div>  
			  			<div class="table-row">
			  				<label for="validationPhone" class="form-label">Tiktok</label>
			  				<input type="tel" id="validationPhone" name="phone" minlength="3" class="form-control" placeholder="Phone" value="" required>
			  				<div class="invalid-feedback">
			  					It must be valid phone
			  				</div>
			  			</div> 		
			  			<div class="table-row">
			  				<label for="validationWebsite" class="form-label">Youtube</label>
			  				<input type="url"  id="validationWebsite" name="website" class="form-control" placeholder="Website" value="" required>
			  				<div class="invalid-feedback">
			  					It must be valid website
			  				</div>
			  			</div> 
			  			<div class="table-row">
			  				<label for="validationImage" class="form-label">Image</label><br>
			  				<input id="validationImage" name="image" type="url" class="form-control" placeholder="Paste picture url here" value="" required>
			  			</div>
			  			<div class="table-row">
			  				<label for="validationImage" class="form-label">QR image</label><br>
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