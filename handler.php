<?php
// Include the header file
include('config.php');



// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data and sanitize inputs
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirmPassword = mysqli_real_escape_string($conn, $_POST['ConfirmPassword']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    
    // Basic password validation
    if ($password !== $confirmPassword) {
        echo "Passwords do not match!";
    } else {
        // Hash the password for security
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert query
        $sql = "INSERT INTO users (name, email, password, country) VALUES ('$name', '$email', '$hashed_password', '$country')";

        if ($conn->query($sql) === TRUE) {
            // Redirect to the login page after successful registration
            header('Location: login.php');
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

// Close the database connection
$conn->close();
?>


