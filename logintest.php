<?php
      $mysqli = new mysqli("localhost", "root", "","carrentalapp");
      if ($mysqli->connect_errno){
          echo "Failed";
      }

      
    if(isset($_POST['user_email'])){
        $email = $_POST['user_email'];
        
    }

    if(isset($_POST['user_password'])){
        $password = $_POST['user_password'];
        
    }


    $sql = "SELECT * from user WHERE User_Email = '".$email."' AND User_Pass = '".$password."'";
    

    
    
    $result = mysqli_query($mysqli,$sql);

          while($row = mysqli_fetch_array($result)){
            echo $row[1];
            echo $row[2];
          }

?>