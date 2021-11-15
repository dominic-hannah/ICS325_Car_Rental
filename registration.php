<!DOCTYPE html>
<html lang="en">
<head>
  <title>MN Car Solution|Create Account</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
     *, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font-family: 'Nunito', sans-serif;
  color: #384047;
}

form {
  max-width: 300px;
  margin: 10px auto;
  padding: 10px 20px;
  background: #f4f7f8;
  border-radius: 8px;
}

h1 {
  margin: 0 0 30px 0;
  text-align: center;
}

input[type="text"],
input[type="password"],
input[type="date"],
input[type="datetime"],
input[type="email"],
input[type="phone"],
input[type="number"],
input[type="search"],
input[type="tel"],
input[type="time"],
input[type="url"],
textarea,
select {
  background: rgba(255,255,255,0.1);
  border: none;
  font-size: 16px;
  height: auto;
  margin: 0;
  outline: 0;
  padding: 15px;
  width: 100%;
  background-color: #e8eeef;
  color: #8a97a0;
  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  margin-bottom: 30px;
}

input[type="radio"],
input[type="checkbox"] {
  margin: 0 4px 8px 0;
}

select {
  padding: 6px;
  height: 32px;
  border-radius: 2px;
}

button {
  padding: 19px 39px 18px 39px;
  color: #FFF;
  background-color: #4bc970;
  font-size: 18px;
  text-align: center;
  font-style: normal;
  border-radius: 5px;
  width: 100%;
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

}
icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

</style>
</head>
<body>

<div class="jumbotron text-center">
  <h1>MN CAR SOLUTION</h1>
  <p>We are the leading brand in automotive rental service!</p> 
</div>
 <div class="container">
  <h2>Create Account</h2>

  <ul class="nav nav-tabs" role="tablist">
    <li><a href="index.html">Home</a></li>
     <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
      Products <span class="caret"></span></a>
      <ul class="dropdown-menu" role="menu">
        <li><a href="RentACar.php">Rent A car</a></li>
        <li><a href="RentYourCar.html">Rent your car</a></li>                       
      </ul>
    </li>
     <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
      Service <span class="caret"></span></a>
      <ul class="dropdown-menu" role="menu">
        <li><a href="login.php">Sign in</a></li>
        <li class="active"><a href="#">Create account</a></li>                      
      </ul>
    </li>
    <li><a href="AboutUs.html">About Us & FAQs</a></li>
    <li><a href="ContactUs.html">Contact Us</a></li>   
  </ul>
</div>
  
<div class="container">
  <form action="registration.php" method="post">
      
        <h1>USER PROFILE SET-UP</h1>
        

        <fieldset>
          <legend><span class="number">1</span>Personal information</legend>
          <label for="name">First Name:</label>
          <input type="text" id="name" name="user_fname">

          <label for="name">Last Name:</label>
          <input type="text" id="name" name="user_lname">

          <label for="mail">Email:</label>
          <input type="email" id="mail" name="user_email">

          <label for="phone">Phone #:</label>
          <input type="phone" id="phone" name="user_phone">

          <label for="password">Create Password:</label>
          <input type="password" id="password" name="user_password1">

          <label for="password">Confirm Password:</label>
          <input type="password" id="password" name="user_password2">

          <label for="date">Date of Birth:</label>
          <input type="date" id="date" name="user_dob">

          <label for="text">Place of Birth:</label>
          <input type="text" id="place" name="user_pob">

          <label>Gender:</label>
          <input type="radio" id="sex" value="sex" name="user_sex"><label for="male" class="light">Male</label><br>
          <input type="radio" id="isMale" value="isMale" name="user_sex"><label for="female" class="light">Female</label>
          <label>Are you an admin:</label>
          <input type="radio" id="choice" value="choice1" name="choice"><label for="Yes" class="light">Yes</label><br>
          <input type="radio" id="choice2" value="choice2" name="choice"><label for="No" class="light">No</label>
          <label for="address">Address 1:</label>
          <input type="text" id="add1" name="user_add1">
          <label for="address">Address 2:</label>
          <input type="text" id="add2" name="user_add2">
          <label for="address">Postal/ Zip Code:</label>
          <input type="number" id="zip" name="user_zip">
          <label for="city">City:</label>
          <input type="text" id="add2" name="user_add2">

          <label for="state">State:</label>
          <select id="state" name="yourState">
            <option value="alabama">Alabama</option>
            <option value="minnesota">Minnesota</option>
            <option value="maine">Maine</option>
            <option value="maryland"> Maryland</option>
            <option value="california">California</option>
            <option value="connectincut">Connecticut</option>
            <option value="oregon">Oregon</option>
            <option value="illinois">Illinois</option>
            <option value="indiana">Indiana</option>
            <option value="arizona">Arizona</option>
            <option value="newyork">New York</option>
            <option value="texas">Texas</option>
            <option value="florida">Florida</option>
            <option value="newjersey">New Jersey</option>
            <option value="newmexico">New Mexico</option>
            <option value="misouri">Missouri</option>
            <option value="mississipi">Mississipi</option>
            <option value="washington">Washington</option>
          </select>
        </fieldset>
        

        <fieldset>
          <legend><span class="number">2</span>Seller Account</legend>
          <label for="bio">Describe your account rental service:</label>
          <textarea id="bio" name="user_bio"></textarea>
          <label for="picture">Upload profile picture:</label>
          <input type="file" id="picture" name="yourpicture">
           <label for="routingnumber">Routine number:</label>
          <input type="number" id="routine" name="routine">
           <label for="routinenumber">Account number:</label>
          <input type="number" id="acctnum" name="acctnum">
          <label for="bank">Bank or financial institution:</label>
          <input type="text" id="bankinfo" name="bankinfo">
        </fieldset>
        <legend><span class="number">3</span>Buyer billing information</legend>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>

        <fieldset>
        
        </fieldset>
        <button type="submit" onclick="alert('Thank you!!! for creating your user account')">Create Your Account</button>
    <a href="registration.html"><button  type="button"style="background-color:orange">Clear</button></a>
    <a href="index.html"><button type="button" style="background-color:red" >Home Page</button></a>
      </form>

</div>
<?php
        
        if(isset($_POST['user_email']) AND isset($_POST['user_fname']) AND 
          isset($_POST['user_lname']) AND isset($_POST['user_password1']) AND isset($_POST['user_password2']) AND isset($_POST['user_phone'])){
            $email = $_POST['user_email'];

            $fname = $_POST['user_fname'];

            $lname = $_POST['user_lname'];

            $user_phone = $_POST['user_phone'];

            if( $_POST['user_password1'] == $_POST['user_password2']){

              $password = $_POST['user_password1'];
            }else {

                echo "Passwords do NOT match! Please Try Again";
            }

            $mysqli = new mysqli("localhost", "root", "","carrentalapp");
            if ($mysqli->connect_errno){

              echo "Failed";
            }

            if ($email == "" || $fname == "" || $lname == "" || $user_phone == "" || $password == ""){
              echo "<p> Fill Out all necessary forms </p>";
            }else{
              $sql = "INSERT INTO user (User_Fname, User_Lname, User_Phone, User_Email, User_Pass) VALUES ('".$fname."', '".$lname."', '".$user_phone."', '".$email."', '".$password."')";
          
              $result = mysqli_query($mysqli,$sql);
            }   
        }
        

        


?>

</body>
</html>