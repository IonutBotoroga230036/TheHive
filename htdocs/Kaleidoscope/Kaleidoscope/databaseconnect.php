<?php
$servername = "localhost";
$database = "kaleidoscope";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {die("Database Connection Failed:" . mysqli_connect_error());}
//Console

?>