<?php 
	require("code_lib.inc.php");
?>
<!doctype html>
<html lang="en"> 
  <head>
  	<title>Login Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css_login/style.css">
	</head>
	
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Welcome to NZ FASHION</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(images/customer_log_in.jpg);">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Sign In</h3>
			      		</div>
			      	</div>

			<form action="customer_log_in_2.php" class="signin-form">
			    <div class="form-group mb-3">
			    	<label class="label" for="">Username</label>
			      		<input type="text" name="cus_id" class="form-control" placeholder="Username" required>
			      	</div>
		         <div class="form-group mb-3">
		            <label class="label" for="">Password</label>
		         	<input type="password" name="access_code" class="form-control" placeholder="Password" id="myInput" required>
					 <input class="" type="checkbox" onclick="myFunction()"  id="flexCheckDefault">  Show   Password
		    	 </div>

		        <div class="form-group">
		            	<button type="submit" class="form-control btn btn-danger btn-md rounded submit ">Sign In</button>
                  <br>
                  <br>
                		<button type="reset" class="form-control btn btn-warning btn-md rounded submit ">cancle</button>
		    	</div>
	 		 </form>
		          <p class="text-center">Not a member? <a href="customer_sign_up_1.php">Sign Up</a>
				  <p class="text-center">sign in as employee <a href="employee_log_in_1.php">Log in</a>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>
