<?php
define('CURRENCY', 'Rs');

$servername = "localhost";
$username = "root";
$password = "";

$databaseName = "elekstore";

// Create connection
$con = mysqli_connect($servername, $username, $password,$databaseName);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
    echo "Connected";
}

?>