<?php

$servername = "localhost";
$username = "root";
$password  = "";
$dbname  = "myfirstdatabase";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn){
    echo "Connected";
}
else{
    die("Connection Failed bcoz".mysqli_connect_error());
}


?>