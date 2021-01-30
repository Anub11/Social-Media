<!DOCTYPE html>
<html>
<head>
	<title>Signin</title>
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
	#login{
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
					<h3 style="text-align: center;"><strong>Log in to My Social</strong></h3><hr>
					
				</div>
				<div class="1-part">
					<form action="" method="post">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input type="email" id="email" class="form-control" placeholder="Email" name="email" required>
						</div><br>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<input type="password" id="password" class="form-control" placeholder="Password" name="pass" required>
						</div><br>
						
					
						<a style="text-decoration: none; float: right; color: #187FAB;" data-toggle="tooltip" title="Signin" href="forgot_password.php">Forgot Password?</a><br><br>


						<a style="text-decoration: none; float: right; color: #187FAB;" data-toggle="tooltip" title="Signup" href="signup.php">Don't have account?</a><br><br>

						<center><button id="login" class="btn btn-info btn-lg" name="log_in">Login </button></center>
							 <?php include("login.php"); ?>
					</form>
				</div>

				
			</div>
			
		</div>
		
	</div>


</body>
</html>