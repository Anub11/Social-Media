
<!DOCTYPE html>
<?php
session_start();
include("includes/header.php");
if (!isset($_SESSION['user_email'])) {
  	header("location : index.php");
  }  
?>
<html>
<head>
	
	<title>Edit Profile</title>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
	  <link rel="stylesheet" type="text/css" href="style/home_style2.css">
</head>
<body>
<div class="row">
	<div class="col-sm-2">
		
	</div>
	<div class="col-sm-8">
		<form action="" method="post" enctype="multipart/form-data">
			<table class="table table-border table-hover">
				<tr align="content">
					<td colspan="6" class="active"><h2>Edit Your profile</h2></td>
				</tr>
				<tr>
					<td style="font-weight: bold;">Change your first name</td>
					<td>
						<input class="form-control" type="text" name="f_name" required="" value="<?php echo $first_name; ?>">
					</td>
				</tr>

				<tr>
					<td style="font-weight: bold;">Change your last name</td>
					<td>
						<input class="form-control" type="text" name="l_name" required="" value="<?php echo $last_name; ?>">
					</td>
				</tr>

				<tr>
					<td style="font-weight: bold;">Change your user name</td>
					<td>
						<input class="form-control" type="text" name="u_name" required="" value="<?php echo $user_name; ?>">
					</td>
				</tr>

				<tr>
					<td style="font-weight: bold;">Description</td>
					<td>
						<input class="form-control" type="text" name="describe_user" required="" value="<?php echo $describe_user; ?>">
					</td>
				</tr>

				<tr>
					<td style="font-weight: bold;">Relationship status</td>
					<td>
						<select class="form-control" name="Relationship">
							<option> <?php echo $Relationship; ?> </option>
							<option>Engaged</option>
							<option>Married</option>
							<option>Single</option>
							<option>In a Relationship</option>
							<option>Complicated</option> 
							
						</select>
					</td>
				</tr>


				<tr>
					<td style="font-weight: bold;">Password</td>
					<td>
						<input class="form-control" type="password" id="mypass" name="u_pass" required="" value="<?php echo $user_pass; ?>">
						<input type="checkbox" name="" onclick="show_password()">Show Password
					</td>
				</tr>

				<tr>
					<td style="font-weight: bold;">Email</td>
					<td>
						<input class="form-control" type="text" name="u_email" required="" value="<?php echo $user_email; ?>">
					</td>
				</tr>

				<tr>
					<td style="font-weight: bold;">country</td>
					<td>
						<select class="form-control" name="u_country">
							<option> <?php echo $user_country; ?> </option>
							<?php include("country.php"); ?>
							
						</select>
					</td>
				</tr>

				<tr>
					<td style="font-weight: bold;">Gender</td>
					<td>
						<select class="form-control" name="u_gender">
							<option> <?php echo $user_gender; ?> </option>
							<option>Male</option>
							<option>female</option>
							<option>Others</option>
							
						</select>
					</td>
				</tr>

				<tr>
					<td style="font-weight: bold;">Birthday</td>
					<td>
						<input class="form-control input-md" type="date" name="u_birthday" required="" value="<?php echo $user_birthday; ?>">
					</td>
				</tr>

				<!-- recovery password -->
				<tr>
					<td style="font-weight: bold;">Forgotten password</td>
					<td>
						<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Turn on</button>

						<div id="myModal" class="modal" role="dialog"> 
							<div class="modal-dialog"> 
								<div class="modal-content"> 
									<div class="modal-header"> 
										<button type="button" class="close" data-dismiss="modal">&times;</button> 
										<h4 class="modal-title">Modal Header</h4> 
									</div> 
									<div class="modal-body"> 
										<form action="recovery.php?id=<?php echo $user_id;?>" 
											method="post" id="f"> 
											<strong>What is your School Best Friend Name?</strong> 
											<textarea class="form-control" cols="83" rows="4" name=" content" placeholder="Someone"></textarea><br> 
											<input class="btn btn-default" type="submit" name="sub" value="Submit" style="width: 100px;"><br><br> 
											<pre>Answer the above question we will ask this question if you forgot your <br>password.</pre> <br><br> 		 
										</form>

										<?php

											if(isset($_POST['sub']))
											{
												
												$bfn = $_POST['content'];

												if($bfn == "")
											    {

												echo"<script>alert('please Enter Something!');</script>";

												echo"<script>window.open('edit_profile.php?u_id=$user_id','_self');</script>";

												exit();

												} 
												else
												{
													$update = "update users set recovery_account='$bfn' where user_id='$user_id'";

													$run = mysqli_query($con, $update); 

													if($run)
													{ 
														echo"<script>alert('Working...');</script>"; 
														echo"<script>window.open('edit_profile.php?u_id=$user_id','_self');</script>";
													} 
													else
													{
														echo"<script>alert('Error...');</script>";

														echo "<script>window.open('edit profile.php?u_id=$user_id','_self');</script>";
													}

												}
										}
										?>
									</div> 
									<div class="modal-footer"> 
										<button type="button" class="btn btn-default" data-disaiss= "modal">Close</button> 
									</div>
								</div>
							</div>
						</div>

					</td>
				</tr>
	
				<tr align="center">
					<td colspan="6">
						<input type="submit" name="update" class="btn btn-info"  style="width: 250px;" value="update">
					</td>
					
				</tr>

			</table>
		</form>
	</div>
	
</div>


</body>
</html>

<?php 
	if(isset($_POST['update']))
	{
		$f_name = $_POST['f_name'];
		$l_name = $_POST['l_name'];
		$u_name = $_POST['u_name'];
		$describe_user = $_POST['describe_user'];
		$Relationship_status = $_POST['Relationship'];
		$u_pass = $_POST['u_pass'];

		$u_email = $_POST['u_email'];

		$u_country = $_POST['u_country'];

		$u_gender = $_POST['u_gender'];

		$u_birthday = $_POST['u_birthday'];

		$update = "update users set f_name = '$f_name', l_name = '$l_name',user_name = '$u_name',describe_user = '$describe_user',Relationship = '$Relationship_status',user_pass = '$u_pass',user_email = '$u_email',user_country = '$u_country',user_gender = '$u_gender',user_birthday = '$u_birthday' where user_id = '$user_id' ";

		$run = mysqli_query($con, $update); 

		if($run)
		{ 
			echo"<script>alert('Updated.');</script>"; 
			echo"<script>window.open('edit_profile.php?u_id=$user_id','_self');</script>";
		} 

	}

?>