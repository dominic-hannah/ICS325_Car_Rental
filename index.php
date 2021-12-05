<!DOCTYPE html>
<html lang="en">
<head>
  <title>MN Car Solution |Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  
</head>
<body>

<div class="jumbotron text-center">
  <h1>MN CAR SOLUTION</h1>
  <p>We are the leading brand in automotive rental service!</p> 
</div>
 <div class="container">
  <h2>Home Page</h2>
    <ul class="nav nav-tabs" role="tablist">
    <li class="active"><a href="#">Home</a></li>
  
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
    <li><a href="AboutUs.html">About Us & FAQs</a></li>
    <li><a href="ContactUs.html">Contact Us</a></li> 
		
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
  <div class="row">

  <?php

    $result = null;

    if (isset($_POST['submit'])) {
        
        $searchValue = $_POST['search'];
        $mysqli = new mysqli("localhost", "root", "","carrentalapp");
        if ($mysqli->connect_error) {
            echo "connection Failed: " . $con->connect_error;
        } else {
            if($searchValue != null){
              $sql = "SELECT * FROM car WHERE Brand_Name like '%$searchValue%'";

              $result = $mysqli->query($sql);
              
              while ($row = $result->fetch_assoc()) {
                echo "<div class='col-sm-4'>";
                echo "<h3> ".$row['Brand_Name']." ".$row['Car_Model']." ".$row['Car_Year']." </h3>";
                echo "<img src='data:image/jpeg;base64,".base64_encode($row['Car_Image'])."' width='300px' height='200px'/>";
                echo "<p>".$row['Car_Desc']."</p>";
                echo "</div>";
              }
              
            }        
        }   
    }
    if($result == null){
    ?>
    <div class="col-sm-4">
      <h3>BMW I8 (2021)</h3>
      <img src="img\bm.jpeg" width="300px" height="200px"/>
      <p>We have an exciting collections of exotic car rented at very offordable price</p>
      <p>You would like to check this nice BMW I8 for $250 a month join us!!!</p>
    </div>
    <div class="col-sm-4">
      <h3>Range Rover SVR (2019)</h3>
      <img src="img\svr.jpeg" width="300px" height="200px"/>
      <p>We associate praticability to performance and luxury.</p>
      <p>Visit our product portal and see what we have for you...</p>
    </div>
    <div class="col-sm-4">
      <h3>We help you rent your car</h3>
      <img src="img\helpu.jpeg" width="300px" height="200px"/>   
      <p>You want to make money with your nice car?</p>
      <p>We are here to help. Join us by creating your profile and add your car.</p>
    </div>
    <?php 
    }
    ?>
  </div>
</div>
</div>
<?php
if (!empty($_SESSION)) {
session_start();
echo $_SESSION['user_fname'];
echo $_SESSION['user_lname'];}
?>
</body>
</html>

