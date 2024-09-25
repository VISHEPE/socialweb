<?php
// config.php

$servername = "localhost:3308";
$username = "root";  // Adjust if necessary
$password = "";      // Adjust if necessary
$dbname = "citizen_engagement"; // Adjust to your actual database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
