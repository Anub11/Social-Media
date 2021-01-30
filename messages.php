<!DOCTYPE html>
<?php
session_start();
include("includes/header.php");
if (!isset($_SESSION['user_email'])) 
  {
  	header("location : index.php");
  }  
?>
<html>
<head>
	<title>Messages</title>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
	  <link rel="stylesheet" type="text/css" href="style/home_style2.css">
</head>
<style type="text/css">
		
		#scroll_messages{
			max-width: 800px;
			overflow: scroll;
			height: 500px;

		}

		#btn-msg{
			width: 20%;
			height: 28px;
			border-radius: 5px;
			margin: 5px;
			border : none;
			color: #fff;
			float: right;
			background-color: #2ecc71;

		}

		#select_user{
			max-height: 500px;
			overflow: scroll;
			height: 500px;

		}
		#green{
			width: 49%;
			padding: 2.5%;
			font-size: 16px;
			border-radius: 5px;
			margin-bottom: 5px;
			float: left;
			background-color: #DBDADA;
			border-color: #27ae60;
		}

		#blue{
			width: 49%;
			padding: 1.9%;
			font-size: 16px;
			border-radius: 5px;
			margin-bottom: 5px;
			float: right;
			margin-right: 9px;
			background-color: #ACFEAE;
			border-color: #2980b9;
		}



</style>
<body>
	<div class="row">
		<?php   
			if (isset($_GET['u_id'])) 
			{
				global $con;

				$get_id = $_GET['u_id'];
			

				$get_user = "select * from users where user_id = '$get_id' ";
				$run_user = mysqli_query($con, $get_user);

				$row_user = mysqli_fetch_array($run_user);

				$user_to_msg = $row_user['user_id'];
			   	$user_to_name = $row_user['user_name'];
			
			}

			$user = $_SESSION['user_email'];
			$get_user = "select * from users where user_email='$user'";
			$run_user = mysqli_query($con, $get_user);

			$row = mysqli_fetch_array($run_user);

			$user_to_msg = $row_user['user_id'];
			   	$user_to_name = $row_user['user_name'];
			$user_from_msg = $row['user_id'];
			   	$user_from_name = $row['user_name'];
			
			?>

		<div class="col-sm-3" id="select_user">
			<?php  
			
				$user = "select * from users";
				$run_user = mysqli_query($con, $user);

				while ($row_user = mysqli_fetch_array($run_user)) {

					$user_id = $row_user['user_id'];

					$user_id = $row_user['user_id'];
					$user_name = $row_user['user_name'];
					$first_name = $row_user['f_name'];
					$last_name = $row_user['l_name'];
					$user_image = $row_user['user_image'];


					echo "
						<div class='container-fluid'>
							<a href='messages.php?u_id=$user_id' style='text-ecoratuin : none; cursor: pointer;color: #3897f0'>
							<img class='img-circle' src='$user_image' width='90px' height='80px' title='$user_name'><strong>&nbsp $first_name $last_name</strong></a><br><br> 
						</div>


					";



					
				}


			?>
		</div>
		<div class="col-sm-6">
			<div class="load_msg" id="scroll_messages">
				<?php

					$sel_msg = "select * from user_messages where (user_to='$user_to_msg' AND user_from='$user_from_msg') OR (user_from='$user_to_msg' AND user_to='$user_from_msg') ORDER by 1 ASC";
					 $run_msg = mysqli_query($con, $sel_msg);

			

					while ($row_user = mysqli_fetch_array($run_msg)) 
					{

						$user_to = $row_user['user_to'];	
						$user_from = $row_user['user_from'];	
						$msg_body = $row_user['msg_body'];	
						$msg_date = $row_user['date'];

				?>

						<div id="loaded_msg">
							
						<p>

						<?php 

							if ($user_to==$user_to_msg AND $user_from==$user_from_msg) 
							{

								echo "<div class='message' id='blue' data-toggle='tooltip' title='$msg_date'>$msg_body</div><br><br><br>";
							}

							else if($user_from == $user_to_msg AND $user_to==$user_from_msg)
								{
									echo "<div class='message' id='green' data-toggle='tooltip' title='$msg_date'>$msg_body</div><br><br><br> ";
								}

								 ?></p>
						</div>	

						<?php

					}


				?>

				
			</div>
			<?php  
				if (isset($_GET['u_id'])) {
					$u_id = $_GET['u_id'];
					if ($u_id == 'new') {
						echo "
							<form>
								<center><h3>Select someone to start conversation</h3></center>

								<textarea disabled class='form-control' placeholder='Enter your message'></textarea>

								<input type='text' class='btn btn-default' disabled value='send'>
							</form>


						";
					}

					else{


						echo '

						<form action="" method="POST"> 

							<textarea class="form-control" placeholder="Enter your Message" name="msg_box" id="message_textarea"></textarea> 
							<input type="submit" name="send_msg" id="btn-msg" value="Send">

						</form><br><br>


							
						';

					}
				}

			?>

			<?php  
				if (isset($_POST['send_msg'])) {
					
					$msg =  $_POST['msg_box'];

					if ($msg == "") {
						echo "<h4 style='color:red; text-align : center; '> messege was unable to send !</h4>";
					}
					else{

						$insert = "insert into user_messages 
						(user_to, user_from, msg_body, date, msg_seen) 
						values ('$user_to_msg', '$user_from_msg', '$msg', NOW() , 'no')";

						$run_insert = mysqli_query($con, $insert);


					}


				}

			?>
		</div>
		<div class="col-sm-3">
			<?php 
			if (isset($_GET['u_id'])) 
			{
				global $con;

				$get_id = $_GET['u_id'];
			

				$get_user = "select * from users where user_id = '$get_id' "; 

				$run_user = mysqli_query($con, $get_user);

				$row_user = mysqli_fetch_array($run_user);

				$user_id = $row_user['user_id'];

				$user_image = $row_user['user_image'];
				$name = $row_user['user_name'];
				$f_name = $row_user['f_name'];
				$l_name = $row_user['l_name'];
				$describe_user = $row_user['describe_user'];
				$country = $row_user['user_country'];
				$gender = $row_user['user_gender'];
				$register_date = $row_user['user_reg_date'];

				
			}

			if ($get_id == 'new') {
				
			}
			else {
				echo "

				<div class='row'>
					<div class='col-sm-2'>
					</div>
					<center>
						<div style='background-color : #e6e6e6;' class='col-sm-9'>
						<h2>Information About</h2>
						<img src='$user_image' class='img-circle' width='150' height='150'>
						<br><br>
						<ul class='list-group'>
						<li class='list-group-item' title='Username'><strong>$f_name $l_name</strong></li>

								<li class='list-group-item' title='User Status'><strong style='color: grey;'>$describe_user</strong></li>

								<li class='list-group-item' title='Gender'><strong>$gender</strong></li>

								<li class='list-group-item' title='Country'><strong>$country</strong></li>

								<li class='list-group-item' title='User Register Date'><strong>$register_date</strong></li>

						</ul>
 						</div>
					</center>
				</div>


				";}

				?>
		
		

			
		</div>
	</div>

	
</body>
</html>



