<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	body{
		overflow-x: hidden;

	}
	#centered1{
		position: absolute;
		font-size: 10vw;
		top: 30%;
		left: 30%;
		transform: translate(-50%, -50%);
	}
	#centered2{
		position: absolute;
		font-size: 10vw;
		top: 50%;
		left: 40%;
		transform: translate(-50%, -50%);
	}

	#centered3{
		position: absolute;
		font-size: 10vw;
		top: 70%;
		left: 30%;
		transform: translate(-50%, -50%);
	}

	#signup{
		width: 60%;
		border-radius: 30px; 	
	}

	#login{
		width: 60%;
		background-color: #fff;
		border: 1px solid #1da1f2;
		color: #1da1f2;
		border-radius: 30px;
	}

	#login:hover{
		width: 60%;
		background-color: #fff;
		border: 2px solid #1da1f2;
		color: #1da1f2;
		border-radius: 30px;
	} 
	.well{
		background-color: #187FAB;
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
		<div class="col-sm-6" style="left: 0.5%;">
			<img src="images/img1.jpg" class="img-rounded" title="My Social" width="650px" height="565px">
			<div id="centered1" class="centered"><h3 style="color: white;"><span class=" glyphicon glyphicon-search"></span><span> <strong>Follo Your Interests. </strong></span></h3>
				
			</div>

			<div id="centered2" class="centered"><h3 style="color: white;"><span class=" glyphicon glyphicon-search"></span><span> <strong>Here what people are talking about. </strong></span></h3>
			</div>

			<div id="centered3" class="centered"><h3 style="color: white;"><span class=" glyphicon glyphicon-search"></span><span> <strong>Join the Conversation. </strong></span></h3>
			</div>
		</div>


			<div class="col-sm-6" style="left: 8%;">
				<img src="images/logo.png" class="img-rounded" title="My Social" width="80px" height="80px">
				<h2><strong>See What's happening in<br>World right now</strong></h2><br><br>

				<h4><strong>Join My Social</strong></h4>

				<form method="POST" action="">
					<button id="signup" class="btn btn-info btn-lg" name="signup">Signup</button><br><br>
					<?php
						if (isset($_POST['signup'])) {
						 	echo "<script>window.open('signup.php','_self')</script";
						 } 
					?>

					<button id="login" class="btn btn-info btn-lg" name="login">Login</button><br><br>
					<?php
						if (isset($_POST['login'])) {
						 	echo "<script>window.open('signin.php','_self')</script";
						 } 
					?>
				</form>
			</div>
			
		</div>

</body>
</html>