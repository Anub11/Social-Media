
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
	
	<title>Find People</title>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
	  <link rel="stylesheet" type="text/css" href="style/home_style2.css">
</head>
<style type="text/css">
	
	form.search_form input[type=text]
	{
		padding: 10px;
		font-size: 17px;
		border-radius: 4px;
		border : 1px solid grey;
		float: left;
		width: 80%;
		background : #f1f1f1;
	}

	form.search_form button {
		float: left;
		width: 20%;
		padding: 10px;
		font-size: 17px;
		border: 1px solid grey;
		border-left: none;
		cursor: pointer;
	}

	form.search_form button:hover {
		background :#0b7dda;
	}

	form.search_form:after{
		content: "";
		clear: both;
		display: table;
	}


</style>
<body>
	


<div class="row">
	<div class="col-sm-12">
		<center><h2><strong>Find People</strong></h2></center><br><br>
		 <div class="row">
		 	<div class="col-sm-4">
		 		
		 	</div>
		 	<div class="col-sm-4">
		 		<form class="search_form" action="">
		 			<input type="text" placeholder="Search Friend" name="search_user">
		 			<button class="btn btn-info" type="submit" name="search_user_btn">Search</button>
		 			
		 		</form>

		 	</div>
		 	<div class="col-sm-4">

		 		
		 	</div>
		 </div><br><br>
		 <?php
		 search_user();
		 ?>
	</div>
	
</div>

</body>
</html>