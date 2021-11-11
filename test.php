<?php
$mysqli = new mysqli("localhost", "root", "","carrentalapp");
if ($mysqli->connect_errno){
    echo "Failed";
}

$sql = "SELECT * FROM car";
$result = mysqli_query($mysqli,$sql);



while($row = $result->fetch_row()){
    echo $row[0];
    echo $row[1];
    echo $row[2];
    echo $row[3];
    echo $row[4];
    echo $row[5];
    echo $row[6];
    echo $row[7];
    echo "<br>";
}