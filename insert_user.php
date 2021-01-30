<?php

include("includes/connection.php");

if (isset($_POST['sign_up'])) 
{
	$first_name = $_POST['first_name']; 

	$last_name = $_POST['last_name'];

	$pass = $_POST['u_pass'];

	$email = $_POST['u_email'];

	$country = $_POST['u_country'];

	$gender = $_POST['u_gender'];

	$birthday = $_POST['u_birthday'];

	$status = "verified";

	$postes = "no";

	$newgid = sprintf('%05d' , rand(0 , 9999));

	$username = strtolower($first_name . "_" . $last_name . "_" . $newgid);

	$check_username_query = "select user_name from users where user_email='$email' ";
	$run_username = mysqli_query($con , $check_username_query);

	if (strlen($pass) < 9) {
		echo "<script>alert('Password must be minimum 9 characters!!');</script>";
		exit();
	}

	if (strlen($pass) < 9) {
		echo "<script>alert('Password must be minimum 9 characters!!');</script>";
		exit();
	}


	$check_email = "select * from users where user_email='$email'";
	$run_email = mysqli_query($con, $check_email);
	$check = mysqli_num_rows($run_email);

	if ($check == 1) {
		echo"<script>alert('Email Already Exsist!')</script>";
		echo "<script>window.open('signup.php','_self')</script>";
		exit();
	}

	$name_pattern = '/^[a-zA-Z ]*$/';
	preg_match($name_pattern, $first_name, $name_matches);
	if(!$name_matches[0])
	{	
		echo"<script>alert('Only alphabets and white space allowed');</script>";
		exit();
	}
	preg_match($name_pattern, $last_name, $name_matches);
	if(!$name_matches[0])
	{	
		echo"<script>alert('Only alphabets and white space allowed');</script>";
		exit();
	}


	$email_pattern = '/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/';
	preg_match($email_pattern, $email, $email_matches);
	if(!$name_matches[0])
	{	
		echo"<script>alert('Must be of valid email format');</script>";
		exit();
	}


	$check_email = "select * from users where user_email='$email'";
	$run_email = mysqli_query($con, $check_email);
	$check = mysqli_num_rows($run_email);

	if ($check == 1) {
		echo"<script>alert('Email Already Exsist!')</script>";
		echo "<script>window.open('signup.php','_self')</script>";
		exit();
	}

	$rand = rand(1, 3);

	if ($rand == 1) {
		$profile_pic = "images/ppic1.jpg";
	}
	else if ($rand == 2) {
		$profile_pic = "images/ppic2.jpg";
	}
	else if ($rand == 3) {
		$profile_pic = "images/ppic3.jpg";
	}

	$insert = "insert into users 
	(f_name,l_name,user_name,describe_user,Relationship,user_pass,user_email,user_country,user_gender,user_birthday,user_image,user_cover,user_reg_date,status,posts,recovery_account) values
	('$first_name','$last_name','$username','Default Status','....','$pass','$email','$country','$gender','$birthday','$profile_pic','cover/cover1.jpg',NOW(),'$status','$postes','Recovery')";

	$query = mysqli_query($con, $insert);

	if ($query) {
		echo"<script>alert('insert successfully!')</script>";
		echo "<script>window.open('signup.php','_self')</script>";
	}
	else{
		echo"<script>alert('Failed! Try again!!')</script>";
		echo "<script>window.open('signup.php','_self')</script>";
	}
}

?>