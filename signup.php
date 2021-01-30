<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	body{
		overflow-x: hidden;
		background-color: #B7B7B7;
	}
	.main-content{
		width: 50%;
		height: 40%;
		margin: 10px auto;
		background-color: #E1E0E0;
		border: 2px solid #e6e6e6;
		padding: 40px 50px;
	}
	.header{
		border: 0px solid #000;
			margin-bottom: 5px;
	}
	.well{
		background-color: #187FAB;
	}
	#signup{
		width: 60%;
		border-radius: 30px;

	}
</style>
<body>
	<div class="row">
		<div class="col-sm-12">
			<div class="well">
				<center><h1 style="color: white;">My Social Side</h1></center>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12">
			<div class="main-content">
				<div class="header">
					<h3 style="text-align: center;"><strong>Join My Social</strong></h3><hr>
					
				</div>
				<div class="1-part">
					<form action="" method="post">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
							<input type="text" class="form-control" placeholder="First Name" name="first_name" required>
						</div><br>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
							<input type="text" class="form-control" placeholder="Last Name" name="last_name" required>
						</div><br>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<input type="password" id="password" class="form-control" placeholder="Password" name="u_pass" required>
						</div><br>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input type="email" id="email" class="form-control" placeholder="Email" name="u_email" required>
						</div><br>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
							<select class="form-control" name="u_country" required="">
								<option>Select your country</option>
								<option>India</option>
								<option>Bengladesh</option>
								<option>Pakistan</option>
								<option>US</option>
								<option>Nepal</option>
								<option>South Africa</option>

								
							</select>
							
						</div><br>

						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
							<select class="form-control input-md" name="u_gender" required="">
								<option>Select your gender</option>
								<option>Male</option>
								<option>Fale</option>
								<option>Others</option>
							</select>
							
						</div><br>

						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
							<input type="date" class="form-control input-md" name="u_birthday" required>
						</div><br>
						<a style="text-decoration: none; float: right; color: #187FAB;" data-toggle="tooltip" title="Signin" href="signin.php">Already have an account ?</a><br><br>
						<center><button id="signup" class="btn btn-info btn-lg" name="sign_up">Signup</button></center>
							 <?php include("insert_user.php"); ?>
					</form>
				</div>

				
			</div>
			
		</div>
		
	</div>

</body>
</html>