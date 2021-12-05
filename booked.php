<!DOCTYPE html>
<html lang="en">
<head>
  <title>MN Car Solution |Rent a car </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
      $mysqli = new mysqli("localhost", "root", "","carrentalapp");
      if ($mysqli->connect_errno){
          echo "Failed";
      }
?>

<div class="jumbotron text-center">
  <h1>MN CAR SOLUTION</h1>
  <p>We are the leading brand in automotive rental service!</p> 
</div>
 <div class="container">
  <h2>We are happy to help you get a rental</h2>
  <ul class="nav nav-tabs" role="tablist">
    <li><a href="index.php">Home</a></li>
     <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
      Products <span class="caret"></span></a>
      <ul class="dropdown-menu" role="menu">
        <li class="active"><a href="RentACar.php">Rent A car</a></li>
        <li><a href="RentYourCar.php">Rent your car</a></li>                       
      </ul>
    </li>
     <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
      Service <span class="caret"></span></a>
      <ul class="dropdown-menu" role="menu">
        <li><a href="login.php">Login</a></li>
        <li><a href="registration.php">Create account</a></li>                      
      </ul>
    </li>
    <li><a href="AboutUs.html">About Us & FAQs</a></li>
    <li><a href="ContactUs.html">Contact Us</a></li>   
	
    <div class="col-xs-5 col-sm-3 pull-right">
        	<form class="navbar-form" role="search">
			 <div class="input-group">
            <input type="text" name="search" class="form-control" width="300" placeholder="Search" name="srch-term" id="srch-term">
            <div class="input-group-btn">
              <button class="btn btn-default" name="submit" type="submit"><span class="glyphicon glyphicon-search"></span></button>
            </div>
				 </form>
				</div>
		 
  </ul>
</div>
  

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      
      </div>
          </div>
          <?php
          function dateDiffInDays($date1, $date2)  // 10:10:2021  15/10/2021 ==> 5 days
          {
              $diff = strtotime($date2) - strtotime($date1);
          
              // 1 day = 24 hours
              // 24 * 60 * 60 = 86400 seconds
              return abs(round($diff / 86400));
          }
        session_start();
        $car = $_SESSION['car'];
        echo $car[2];
         $start_date = $_POST['start_date'];
         $end_date = $_POST['end_date'];
         $days = dateDiffInDays($start_date, $end_date);
         $price = ((int)$days * (int)$car[3]);
				echo "You succesfully booked a car!<br> total price : ".$price."$<br>";
        echo "days : ".$days."<br>car id : ".$car[0]."<br>car price per day : ".$car[3]."$  <br>";
				echo "<a href=index.php>GO BACK TO HOME</a><br>";
          
          ?>
        </div>
</div>



</body>
</html> 
