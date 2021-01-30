<!DOCTYPE html>

<html>
<head>
	<style type="text/css">
		body{
			overflow-x: hidden;
		}
		.main-content{
			width: 50%;
			height: 40%;
			margin: 10px auto;
			background-color: #fff;
			border :2px solid #e6e6e6;
			padding: 40px 50px;
		}
		.header{
			border : 0px solid #000;
			margin-left: 5px;
		}
		
		#signin{
			width: 60%;
			border-radius: 30px;
		}
	</style>
	
	<title>Forgotten Password</title>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
	  <link rel="stylesheet" type="text/css" href="style/home_style2.css">
</head>
<body>
	<div class="row">
		<div class="col-sm-12">
			<div class="well" style="background-color: #187FAB;">

				<center><h2 style="color: white;"><strong>My Social</strong></h2></center>
				
			</div>
			
		</div>
	
	</div>

	<div class="row">
		<div class="col-sm-12">
			<div class="main-content">
				<div class="header">
					<h3 style="text-align: center;"><strong>Forgotten Password</strong></h3><hr>
					
				</div>

				<div class="l_pass">
					<form action="" method="post">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

							<input type="email" class="form-control" name="email" placeholder="Enter your Email" id="email" required="">


							
						</div> <br>

						<hr>

						<pre class="text">Enter your Bestfriend name down below ? </pre>

						<div class="input-group">

							<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>

							<input id="msg" type="text" class="form-control" placeholder="Someone" name="recovery_account" required="">

						</div> 

							<a href="signin.php" style="text-decoration: none; float: right; color: #187FAB;" data-toggle="tooltip" title="Signin">Back to signin?</a><br><br>

							<center><button id="signin" class="btn btn-info btn-lg" name="submit">Submit</button></center>

						</div>
					</form>
				</div>
				
			</div>
			
		</div>
		
	</div>

</body>
</html>

<?php

session_start();

include("includes/connection.php");

if (isset($_POST['submit'])) 
{
	
	$email = $_POST['email'];

	$recovery_account = $_POST['recovery_account'];

	$select_user = "select * from users where user_email='$email' and recovery_account='$recovery_account'";

	$query = mysqli_query($con , $select_user);
	$check_user = mysqli_num_rows($query);

	if ($check_user==1)
	{
		$_SESSION['user_email']=$email;
		echo "<script>window.open('change_password.php','_self');</script>";
	}
	else
	{
		echo "<script>alert('incorrect Email and Bestfriend Name is not correct!');</script>";
	}
}

?>