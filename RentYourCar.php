<!DOCTYPE html>
<html lang="en">
<head>
  <title>MN Car solution| Rent your car</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>MN CAR SOLUTION</h1>
  <p>We are the leading brand in automotive rental service!</p> 
</div>
 <div class="container">
  <h2>Rent your car</h2>
  <ul class="nav nav-tabs" role="tablist">
    <li><a href="index.html">Home</a></li>
     <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
      Products <span class="caret"></span></a>
      <ul class="dropdown-menu" role="menu">
        <li><a href="RentACar.php">Rent A car</a></li>
        <li class="active"><a href="#">Rent your car</a></li>                       
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
  </ul>
</div>
  
<div class="container">
  <form action="RentYourCar.php" method="POST" class="was-validated">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword">Password</label>
        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
      </div>
    </div>
    <div class="form-group col-md-12">
      <label for="CarDiscription">Give a Description of Your Car</label>
      <textarea class="form-control" id="carDiscription" rows="3"></textarea>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputMake">Car Make</label>
        <input type="text" class="form-control" id="inputMake">
      </div>
      <div class="form-group col-md-6">
        <label for="inputModel">Car Model</label>
        <input type="text" class="form-control" id="inputModel">
      </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputYear">Model Year</label>
          <input type="text" class="form-control" id="inputYear">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPrice">Price Per Day</label>
          <input type="text" class="form-control" id="inputPrice">
        </div>
      </div>
      <div class="form-group col-md-12">
        <label for="CarPhoto">Add Photos</label>
        <input type="file" class="form-control-file" id="carPhoto">
      </div>
      
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<?php

    $mysqli = new mysqli("localhost", "root", "","carrentalapp");
    if ($mysqli->connect_errno){
        echo "Failed";
    }

    if(isset($_POST['user_password']) AND isset($_POST['user_email'])){
      $password = $_POST['user_password'];
      $email = $_POST['user_email'];
      $sql = "SELECT * from user WHERE User_Email = '".$email."' AND User_Pass = '".$password."'";

      $result = mysqli_query($mysqli,$sql);
      if ($result == false){
        echo "<p> Your user name or password do not match our records. Please make sure you have an account with us first</p>";
      }else if($result == true){
        $description = $_POST['carDiscription'];
        $inputMake = $_POST['inputMake'];
        $inputModel = $_POST['inputModel'];
        $inputYear = $_POST['inputModel'];
        $inputPrice = $_POST['inputModel'];
        $carPhoto = $_POST['carPhoto'];

          while ($row = mysqli_fetch_array($result)){
            $sql = "INSERT INTO car (User_ID, Brand_Name, Price_Per_Day, Car_Year, Car_Model, Car_Desc, Car_Image) VALUES 
                      ('".$row['User_ID']."', '".$inputMake."', '".$inputPrice."', '".$inputYear."', '".$inputModel."', '".$description."', '".$carPhoto."')";
          }
          
      }
      
      









    }









?>

</body>
</html>
