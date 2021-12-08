<!DOCTYPE html>
<html lang="en">
<head>
  <title>MN Car Solution |Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta http-equiv="refresh" content="4; url='http://sp-cfsics.metrostate.edu/~ics325fa2105/index.php'" />
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
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

      echo "<span> <em style='color:red'>Connected User:</em> <strong>None</strong></span>";
  ?>
</div>
 <div class="container">
    <ul class="nav nav-tabs" role="tablist">
    <li class="active"><a href="index.php">Home</a></li>
  
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
    <li><a href="AboutUs.php">About Us & FAQs</a></li>
    <li><a href="ContactUs.php">Contact Us</a></li>
			<div class="col-xs-5 col-sm-3 pull-right">
        	<form class="navbar-form" role="search" action="" method="post">
          <div class="input-group">
                <input type="text" name="search" class="form-control" width="300" placeholder="Search" name="srch-term" id="srch-term">
                <div class="input-group-btn">
                  <button class="btn btn-default" name="submit" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                </div>
            </div>        
				 </form>
		 
  </ul>
</div>
  
<div class="container">
        <h1>See you again!!!</h1>
  <?php
      session_start();
      session_destroy();
    ?>
</div>

<br><br>
<footer class="container-fluid bg-4 text-center">
  <p>Copyright - All right Reserved. This is the intellectual property of ICS325- Group 3</p> 
</footer>
</body>
</html>

