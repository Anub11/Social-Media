
<!DOCTYPE html>
<?php
session_start();
include("includes/connection.php");
if (!isset($_SESSION['user_email'])) {
  	header("location : index.php");
  }  
?>
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
					<h3 style="text-align: center;"><strong>Change your Password</strong></h3><hr>
					
				</div>

				<div class="l_pass">
					<form action="" method="post">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>

							<input type="password" class="form-control" name="pass"  id="password" placeholder="new password" required="">


							
						</div> <br>


						<div class="input-group">

							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>

							<input id="password" type="password" class="form-control" placeholder="Re-enter password" name="pass1" required="">

						</div>
						<br> 

							<center><button id="signin" class="btn btn-info btn-lg" name="change">Change password </button></center>

						</div>
					</form>
				</div>
				
			</div>
			
		</div>
		
	</div>

</body>
</html>

<?php

	if (isset($_POST['change'])) 
	{

		$user = $_SESSION['user_email'];
		$get_user = "select * from users where user_email = '$user'";

		$run_user = mysqli_query($con, $get_user);

		$row = mysqli_fetch_array($run_user);
		$user_id = $row['user_id'];

		$pass = $_POST['pass'];
		$pass1 = $_POST['pass1'];


		if($pass == $pass1)
		{
			if(strlen($pass) >=6 && strlen($pass) <= 60)
			{
				$update = "update users set user_pass = '$pass' where user_id = '$user_id'";

				$run = mysqli_query($con, $update);
	
				echo "<script>alert('Password changed!!');</script>";
				echo "<script>window.open('home.php','_self');</script>";
			}

			else
			{
				
				echo "<script>alert('Password should be greater then 6 words!');</script>";
			}
		}
			
		else
		{
	
			echo "<script>alert('Your Password did not match !');</script>";

			echo "<script>window.open('change_password.php','_self');</script>";
		}
		
	}
?>

