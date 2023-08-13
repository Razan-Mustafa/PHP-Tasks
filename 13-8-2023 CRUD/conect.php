<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "Product";


$connection = mysqli_connect($hostname, $username, $password, $database);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>