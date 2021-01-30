<?php
session_start();

include("includes/connection.php");

if (isset($_POST['log_in'])) 
{
	
	$email = $_POST['email'];

	$password = $_POST['pass'];

	$select_user = "select * from users where user_email='$email' and user_pass='$password' AND status='verified'";

	$query = mysqli_query($con , $select_user);
	$check_user = mysqli_num_rows($query);

	if ($check_user==1)
	{
		$_SESSION['user_email']=$email;
		echo "<script>window.open('home.php','_self');</script>";
	}
	else
	{
		echo "<script>alert('incorrect Email and Password!');</script>";
	}
}

?>