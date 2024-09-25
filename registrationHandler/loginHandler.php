<?php
include("config.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve login form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Fetch the user from the database
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verify password
        if (password_verify($password, $row['password'])) {
            echo "Login successful!";
            // Redirect to a secure page, e.g., dashboard.php
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "No user found with that email!";
    }

    $conn->close();
}
?>
