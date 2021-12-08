<!DOCTYPE html>
<html lang="en">
<head>
  <title>MN Car solution| Rent your car</title>
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
    if (isset($_SESSION['user_fname']) AND isset($_SESSION['user_lname'])) {
      echo "<span style='color:red'><em>Connected User:</em> <strong>".$_SESSION['user_fname']." ".$_SESSION['user_lname']."</strong></span>";
       ;
       echo "  "."<a style='color:blue' href='signout.php'><u>Sign out</u></a>";	
    }
    ?>
	</div>
</div>
 <div class="container">
  <h2>Rent your car</h2>
  <ul class="nav nav-tabs" role="tablist">
    <li><a href="index.php">Home</a></li>
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
    <li><a href="AboutUs.php">About Us & FAQs</a></li>
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
  <form action="RentYourCar.php" method="POST">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword">Password</label>
        <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password">
      </div>
    </div>
    <div class="form-group col-md-12">
      <label for="CarDiscription">Give a Description of Your Car</label>
      <textarea class="form-control" id="carDiscription" name="carDiscription" rows="3"></textarea>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputMake">Car Make</label>
        <input type="text" class="form-control" name="inputMake" id="inputMake">
      </div>
      <div class="form-group col-md-6">
        <label for="inputModel">Car Model</label>
        <input type="text" class="form-control" name="inputModel" id="inputModel">
      </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputYear">Model Year</label>
          <input type="text" class="form-control" name="inputYear" id="inputYear">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPrice">Price Per Day</label>
          <input type="text" class="form-control" name="inputPrice" id="inputPrice">
        </div>
      </div>
      
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<?php
    $servername = 'localhost';
    $username = 'ics325fa2105';
    $pass = '5768';
    $databasename = 'ics325fa2105';

    $mysqli = new mysqli($servername, $username, $pass, $databasename);
   if ($mysqli->connect_errno){
        echo "Failed" .mysqli_connect_error();
    }
    
    if(isset($_POST['inputPassword']) AND isset($_POST['inputEmail'])){
      $password = $_POST['inputPassword'];
      $email = $_POST['inputEmail'];
      $sql = "SELECT * FROM user WHERE User_Email = '".$email."' AND User_Pass = '".$password."'";

      $result = mysqli_query($mysqli,$sql);
      if ($result == false){
        echo "<p> Your user name or password do not match our records. Please make sure you have an account with us first</p>";
      }else if($result == true){
        $description = $_POST['carDiscription'];
        $inputMake = $_POST['inputMake'];
        $inputModel = $_POST['inputModel'];
        $inputYear = $_POST['inputYear'];
        $inputPrice = $_POST['inputPrice'];
        $carPhoto = 'img/car.jpg';

          while ($row = mysqli_fetch_array($result)){
            $sql2 = "INSERT INTO car (User_ID, Brand_Name, Price_Per_Day, Car_Year, Car_Model, Car_Desc, Car_Image) VALUES 
                      ('".$row['User_ID']."', '".$inputMake."', '".$inputPrice."', '".$inputYear."', '".$inputModel."', '".$description."', '".$carPhoto."')";
                 
                 mysqli_query($mysqli,$sql2);
          }
          
      }
    }
    mysqli_close($mysqli);
?>

<br><br>
<footer class="container-fluid bg-4 text-center">
  <p>Copyright - All right Reserved. This is the intellectual property of ICS325- Group 3</p> 
</footer>
</body>
</html>
