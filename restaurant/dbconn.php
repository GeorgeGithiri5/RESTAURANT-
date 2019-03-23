<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename= "restruant";

// Create connection
$conn = mysqli_connect($servername, $username, $password) 
or die("Connection is incorrect");

$query_db= mysqli_select_db($conn,$databasename);

// Check connection
if (!$query_db) {
    die("Connection failed: ");
} 
echo "Connected successfully";
?>