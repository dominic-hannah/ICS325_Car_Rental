<?php
        $mysqli = new mysqli("localhost", "root", "", "carrentalapp"))
        if ($mysqli->connect_errn0){
            echo "Failed";
        } 


        if(isset($_POST['mail'])){
            $email =$_POST['mail'];
        }

        if(isset($_POST['password'])){
            $password =$_POST['password'];
        }

        if (isset($_POST['name'])){
            $name =$_POST['name'];
        }

        if (isset($_POST['date'])){
            $date =$_date['date'];
        }

        if (isset($_POST['address'])){
            $address =$_address['address'];
        }

?>