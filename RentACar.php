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
        <li class="active"><a href="#">Rent A car</a></li>
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

          session_start();
          $sql = "SELECT * FROM car";
          
          $result = mysqli_query($mysqli,$sql);

          while($row = $result->fetch_row()){
              $carName = $row[5];
              
              $_SESSION["$carName"] = $row;
              
              
              echo "<div class='col-sm-4'>";
              echo '<input type="hidden" name="car_price" value="'.$row[3].'">';
              echo '<img src="'.$row[7].'" class="img-thumbnail">';
              echo "<p>$row[2] || $row[5] || $row[4] || $row[3]</p>";
              echo "<p>$row[6] </p>";

              if (isset($_SESSION['user_id'])){
                echo "<form action='booked.php' method='POST'>
                <input type='date' id='start' name='start_date' value=''>
                <input type='date' id='start' name='end_date' value=''><br><br>
                <input type='hidden' name='carName' value='$carName'/>
                <button type='submit'>Book This Car</button></form><br>";
              }
              if (empty($_SESSION['user_id'])){
                echo "Log in to rent a car!";
              }
              echo "</div>";
             
          }
          mysqli_close($mysqli);
          ?>
        </div>
</div>

</body>
</html>
