<?php
// config.php

$servername = "localhost:3308";  // Change to localhost:3308 if you need a different port
$username = "root";         // Adjust if necessary
$password = "";             // Adjust if necessary
$dbname = "citizen_engagement"; 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";  // For debugging (remove in production)
}


