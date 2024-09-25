<?php
// Database connection
include ("config.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Encrypt password
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];

    // Insert user data into the database
    $sql = "INSERT INTO user_management (name, email, password, age, gender, country) VALUES ('$name', '$email', '$password', $age, '$gender', '$country')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

