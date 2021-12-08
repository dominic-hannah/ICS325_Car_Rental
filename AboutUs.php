<!DOCTYPE html>
<html lang="en">
<head>
  <title>About Us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
	.bg-4 { 
    background-color: #2f2f2f; /* Black Gray */
    color: #fff;
  }
  .container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
  }
	</style>
</head>
<body>

<div class="jumbotron text-center">
  <h1>MN CAR SOLUTION</h1>
  <p>We are the leading brand in automotive rental service!</p> 
  <div class="col-xs-5 col-sm-3 pull-right">
	<?php
    session_start();
    if (!empty($_SESSION)) {
      echo "<span style='color:red'><em>Connected User:</em> <strong>".$_SESSION['user_fname']." ".$_SESSION['user_lname']."</strong></span>";
       ;
    }
	echo "  "."<a style='color:blue' href='signout.php'><u>Sign out</u></a>";	
    ?>
	</div>
</div>
 <div class="container">
  <h2>About Us</h2>
  <ul class="nav nav-tabs" role="tablist">
    <li><a href="index.php">Home</a></li>
     <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
      Products <span class="caret"></span></a>
      <ul class="dropdown-menu" role="menu">
        <li><a href="RentACar.php">Rent A car</a></li>
        <li><a href="RentYourCar.php">Rent your car</a></li>                       
      </ul>
    </li>
     <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
      Service <span class="caret"></span></a>
      <ul class="dropdown-menu" role="menu">
        <li><a href="login.php">Sign In</a></li>
        <li><a href="registration.php">Create account</a></li>                      
      </ul>
    </li>
    <li class="active"><a href="#">About Us & FAQs</a></li>
    <li><a href="ContactUs.php">Contact Us</a></li>   
			<div class="col-xs-5 col-sm-3 pull-right">
        	<form class="navbar-form" role="search">
			 <div class="input-group">
            <input type="text" class="form-control" width="300" placeholder="Search" name="srch-term" id="srch-term">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
            </div>
				 </form>
				</div>
  </ul>
</div>
  
<div class="container">
<div class="row">
<div class="col-md-8">
  <h3>About Us</h3>
  <p>Here at MN Car Solution we aim to provide each user with the highest quality car rental experience available. We are based out of Minneapolis which gives us the ability to cater towards members of the Minneapolis community by providing inexpensive cars with convenience. The goal of our application is to make renting a car at a reasonable price much more easy by providing community owned cars to others in the community.</p>
</div>
</div>
<div class="row">
  <div class="col-md-8">
    <h3>Our Community</h3>
    <p>We have a great community of rental owners who graciously have made their personal vehicles available to the renting community. Our catalog of great cars has been provided by many users over time in order to give each renter the ability to rent exactly what fulfills their needs.</p>
  </div>
  </div>
</div>

<br><br>
<footer class="container-fluid bg-4 text-center">
  <p>Copyright - All right Reserved. This is the intellectual property of ICS325- Group 3</p> 
</footer>
</body>
</html>
