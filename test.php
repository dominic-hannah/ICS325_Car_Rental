<?php
        
        if(isset($_POST['user_email'])){
            $email = $_POST['user_email'];
            echo $email;
        }
        if(isset($_POST['user_fname'])){
            $fname = $_POST['user_fname'];
            echo $fname;
        }
        if(isset($_POST['user_lname'])){
            $lname = $_POST['user_lname'];
            echo $lname;
        }

        if( $_POST['user_password1'] == $_POST['user_password2']){
                $password = $_POST['user_password1'];
                echo $password;
        }else {
            echo "oops";
        }

        echo "".$_POST['user_password1']." <br>";
        echo $_POST['user_password2'];

        if (isset($_POST['user_phone'])){
            $user_phone = $_POST['user_phone'];
            echo $user_phone;
        }
        

        $mysqli = new mysqli("localhost", "root", "","carrentalapp");
        if ($mysqli->connect_errno){
          echo "Failed";
        }

        if ($email == "" || $fname == "" || $lname == "" || $user_phone == "" || $password == ""){
            echo "<p> Try Again Please </p>";
        }else{
            $sql = "INSERT INTO user (User_Fname, User_Lname, User_Phone, User_Email, User_Pass) VALUES ('".$fname."', '".$lname."', '".$user_phone."', '".$email."', '".$password."')";
        
            $result = mysqli_query($mysqli,$sql);
        }

        

?>