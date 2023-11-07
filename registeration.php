<?php
require_once('config.php');
?>
<html>
<head>
	<title>User Registration | PHP</title>
	 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
	 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div>
    <?php
   
    ?>
</div>
<div>
	<form action="registration.php" method="post">
		
		<div class="container">
			
			<div class="row">
				<div class="col-sm-3">
					<h1>Registration</h1>
					<p>Fill up the form with correct values.</p>
					<hr class="mb-3">
					<label for="voterid"><b>Voter ID</b></label>
                    <input type="text" class="form-control" id="voterid" placeholder="Enter Voter Id" name="voterid" required>

					<label for="firstname"><b>First Name</b></label>
					<input class="form-control" id="firstname" type="text" placeholder="Enter First Name" name="firstname" required>


					<label for="lastname"><b>Last Name</b></label>
					<input class="form-control" id="lastname"  type="text" placeholder="Enter Last Name" name="lastname" required>


					<label for="gender"><b>Gender</b></label>
<br>
					<!-- <input class="form-control" id=""  type="age" placeholder="Enter Email-ID" name="email" required> -->
                    <select id="gender">
						<option>Choose Your Gender</option>
						<option value="male">Male</option>
						<option value="female">Female</option>
					</select>
<br>
					<label for="age"><b>Age</b></label>
					
					<input class="form-control" id="age"  type="number" placeholder="Enter Age" name="age" required>
                   
				
					<label for="password"><b>Password</b></label>
					<input class="form-control" id="password"  type="password" placeholder="Enter Password" name="password" required>
                    
					
					<label for="choice"><b>Political Party</b></label>
<br>
					<!-- <input class="form-control" id=""  type="age" placeholder="Enter Email-ID" name="email" required> -->
                    <select id="choice">
						<option><strong>Vote For Party</strong></option>
						<option value="1">Libertarian Party</option>
						<option value="2">Republic Party</option>
						<option value="3">Democratic Party</option>
						<option value="4">Green Party</option>
						<option value="5">Constitution Party</option>
					</select>
<br>

					<hr class="mb-3">
					<input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up">
				</div>
			</div>
		</div>
		
	</form>
</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		//alert('Hello');
	 	$('#register').click(function(e){

	 		var valid = this.form.checkValidity();

	 		if(valid){
                
				var voterid=$('#voterid').val();
				var firstname 	= $('#firstname').val();
			var lastname	= $('#lastname').val();
			var gender 		= $('#gender').val();
			var age = $('#age').val();
			var password 	= $('#password').val();
            var choice = $('#choice').val();
            e.preventDefault();
			$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {voterid: voterid,firstname: firstname,lastname: lastname,gender: gender,age: age,password: password,choice: choice},
					success: function(data){
	 				Swal.fire({
	 							'title': 'Successful',
	 							'text': data,
	 							'type': 'success'
							})
							
					},
					error: function(data){
						Swal.fire({
								'title': 'Error',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});
alert('True');
			}
			else{
				
			}
			
			
	});
	
	});
	
</script> 
</body>
</html>