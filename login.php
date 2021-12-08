<!DOCTYPE html>
<html lang="en">
<head>
  <title>MN Car Solution|Sign In</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    button {
  padding: 10px 19px 10px 19px;
  color: #FFF;
  background-color: #4bc970;
  font-size: 18px;
  text-align: center;
  font-style: normal;
  border-radius: 5px;
  width: 50%;
  border: 1px solid #3ac162;
  border-width: 1px 1px 3px;
  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
  margin-bottom: 10px;
}

fieldset {
  margin-bottom: 30px;
  border: none;
}

legend {
  font-size: 1.4em;
  margin-bottom: 10px;
}

label {
  display: block;
  margin-bottom: 8px;
}

label.light {
  font-weight: 300;
  display: inline;
}
    .number {
  background-color: #5fcf80;
  color: #fff;
  height: 30px;
  width: 30px;
  display: inline-block;
  font-size: 0.8em;
  margin-right: 4px;
  line-height: 30px;
  text-align: center;
  text-shadow: 0 1px 0 rgba(255,255,255,0.2);
  border-radius: 100%;
}

@media screen and (min-width: 480px) {

  form {
    max-width: 480px;
  }
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
</div>
 <div class="container">
  <h2>Sign-In Portal</h2>
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
        <li class="active"><a href="#">Sign in</a></li>
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
  </div>
  <div class="container">
    <form action="login.php" method="POST" class="was-validated">
        <fieldset>
          <legend><span class="number">User</span>Connect to Profile</legend>
        <label for="mail">Email:</label>
          <input type="email" id="mail" name="user_email">
          <label for="password">Password:</label>
          <input type="password" id="password" name="user_password">
        </fieldset>
          <button type="submit">Sign-in</button> <br>
          <a href="reset.php" style="color:"blue">Reset password</a>
        
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



    if(isset($_POST['user_password']) AND isset($_POST['user_email'])){
        $password = $_POST['user_password'];
        $email = $_POST['user_email'];
        $sql = "SELECT * from user WHERE User_Email = '".$email."' AND User_Pass = '".$password."'";

        $result = mysqli_query($mysqli,$sql);

          while($row = mysqli_fetch_array($result)){

            echo "<div class='container'>
                  <div>";
            echo "<p> You are logged in under the name: ".$row['User_Fname']." ".$row['User_Lname']." </p>";
            
            echo "<p> With the Email address of: ".$row['User_Email']."";
            echo "</div>
            </div>";

            session_start();
         
            $_SESSION['user_fname'] = $row['User_Fname'];
            $_SESSION['user_lname'] = $row['User_Lname'];
            $_SESSION['user_id'] = $row['User_ID'];

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