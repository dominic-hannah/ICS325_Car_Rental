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
    <li><a href="index.html">Home</a></li>
     <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
      Products <span class="caret"></span></a>
      <ul class="dropdown-menu" role="menu">
        <li class="active"><a href="#">Rent A car</a></li>
        <li><a href="RentYourCar.html">Rent your car</a></li>                       
      </ul>
    </li>
     <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
      Service <span class="caret"></span></a>
      <ul class="dropdown-menu" role="menu">
        <li><a href="login.html">Login</a></li>
        <li><a href="registration.html">Create account</a></li>                      
      </ul>
    </li>
    <li><a href="AboutUs.html">About Us & FAQs</a></li>
    <li><a href="ContactUs.html">Contact Us</a></li>   
  </ul>
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      
      </div>
          </div>
          <?php
          $sql = "SELECT * FROM car";
          
          $result = mysqli_query($mysqli,$sql);

          while($row = $result->fetch_row()){
            echo "<div class='col-sm-4'>";
            echo "<img src='$row[7]' class='img-thumbnail'>";
            echo "<p>$row[2] || $row[5] || $row[4] || $$row[3]</p>";
            echo "<p>$row[6] </p>";
            echo "</div>";
          }
          ?>
        </div>
</div>



</body>
</html>
