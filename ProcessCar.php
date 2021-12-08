<?php
    $servername = 'localhost';
    $username = 'ics325fa2105';
    $pass = '5768';
    $databasename = 'ics325fa2105';

    $mysqli = new mysqli($servername, $username, $pass, $databasename);
   if ($mysqli->connect_errno){
        echo "Failed" .mysqli_connect_error();
    }
    
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
        $inputYear = $_POST['inputModel'];
        $inputPrice = $_POST['inputModel'];
        $carPhoto = 'img/car.jpg';

          while ($row = mysqli_fetch_array($result)){
            $sql = "INSERT INTO car (User_ID, Brand_Name, Price_Per_Day, Car_Year, Car_Model, Car_Desc, Car_Image) VALUES 
                      ('".$row['User_ID']."', '".$inputMake."', '".$inputPrice."', '".$inputYear."', '".$inputModel."', '".$description."', '".$carPhoto."')";
                      echo "<p> got here</p>";
          }
          
      }
      mysqli_close($mysqli);
?>