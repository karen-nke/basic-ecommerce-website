<?php //Connecting to the database

$servername = "localhost";
$username = "root";
$password = "";
$database = "PopHolic";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die ("Connection failed".mysqli_connect_error());
}


?>