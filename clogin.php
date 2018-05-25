<!DOCTYPE html>
<html>
<head>
	<title>cliient_log_in</title>
	
<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">	
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">


</head>
<body>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Luck Z Communication</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">client log in</a></li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign-up</a></li>
      <li><a href="contact.php"><span class="glyphicon glyphicon-log-in"></span>Contact us.</a></li>
    </ul>
  </div>
</nav>
	<div class="row">
  		<div class="col-sm-4">
  			<div class="alert alert-danger">
  			
  				<marquee><h2><p>Welcome Clients.</h2> <br></p></marquee>
  		
  			</div>
  			<div class="progress">
 					 <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="100"
  							aria-valuemin="0" aria-valuemax="100" style="width:100%">
    							Input your Name and password to log in.
  					 </div>
			</div>

		</div>
  		<div class="col-sm-4">
  			<form action="clogin.php" method="_POST" class="ft">
  				<fieldset>
  					<legend>Log in to your Account.</legend>
                                            
              <div class="form-group">
                     <input type="text" class="form-control" name="username" placeholder="User name" required="">
              </div>

              <div class="form-group">
                     <input type="password" class="form-control" name="pass" placeholder="password" required="">
              </div>

              

              <div class="">
                    <input type="submit" name="submit" value="Log in." class="btn btn-primary">
              </div>

               </fieldset>                          
    		 </form>
    		 	Dont have an account?<a href="signup.php"><button class="btn btn-warning btn-lg">Sign Up</button></a>


  		</div>
  		<div class="col-sm-4">




  		</div>
    </div>
    <hr><hr>
<p class="ae">Powered by Sir.Engo Technologies. || &copy Luck Z Communications. </p>
	</p>
	

<?php 
if (isset($_POST['submit'])) {
	
}










 ?>



	 
</body>
</html>