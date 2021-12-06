<!DOCTYPE html>
<html lang="en">
<head>
  <title>MN Car Solution |Rent a car </title>
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
<?php
      $servername = 'localhost';
      $username = 'ics325fa2105';
      $pass = '5768';
      $databasename = 'ics325fa2105';

      $mysqli = new mysqli($servername, $username, $pass, $databasename);
     if ($mysqli->connect_errno){
          echo "Failed" .mysqli_connect_error();
      }
?>

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
    <li><a href="AboutUs.php">About Us & FAQs</a></li>
    <li><a href="ContactUs.php">Contact Us</a></li>   
	
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

          $carName = $_POST['carName']; 
        
          $car = $_SESSION["$carName"];

         $start_date = $_POST['start_date'];
         $end_date = $_POST['end_date'];
         $interval = new DateInterval('P1D');
         $days = dateDiffInDays($start_date, $end_date);
         $price = ((int)$days * (int)$car[3]);

          echo "You succesfully booked: ".$car[2]." ".$car[5]."<br>";
          echo "Rental length: ".$days." days<br>";
          echo "Price per day: $".$car[3]."<br>";
          echo "Total Price: $".$price."<br>";
          echo "<a href=index.php>GO BACK TO HOME</a><br>";

          $sql = "INSERT INTO rental_agreement (User_ID, Car_ID, Rental_Start, Rental_End, Total_Price) VALUES 
                      ('".$_SESSION['user_id']."', '".$car[0]."', '".$start_date."', '".$end_date."', '".$price."')";
                 
                 mysqli_query($mysqli,$sql);

          
          $begin_date = new DateTime($start_date);
          $final_date = new DateTime($end_date);
          
          $daterange = new DatePeriod($begin_date, $interval, $final_date);
          foreach ($daterange as $date){
              $new_date = $date->format('d-m-y');
              $sql2 = "INSERT INTO availability (Car_ID, Date_Unavailible) VALUES ('".$car[0]."', '".$new_date."')";
              mysqli_query($mysqli,$sql2);
          }

          mysqli_close($mysqli);
          
          ?>
        </div>
</div>

<br><br>
<footer class="container-fluid bg-4 text-center">
  <p>Copyright - All right Reserved. This is the intellectual property of ICS325- Group 3</p> 
</footer>


</body>
</html> 
