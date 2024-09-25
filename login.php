<?php
require_once 'header.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>

    <h2>Login Form</h2>
    <form id="loginForm" action="registrationHandler/loginHandler.php" method="POST">
        <label for="loginEmail">Email:</label>
        <input type="email" id="loginEmail" required>
        <span id="loginEmailError" class="error"></span><br><br>

        <label for="loginPassword">Password:</label>
        <input type="password" id="loginPassword" required>
        <span id="loginPasswordError" class="error"></span><br><br>

        <button type="submit">Login</button>
        <a href="reg.php">You do not have an account account?Register</a>
    </form>

    <script src="loginvalidate.js"></script>

</body>
</html>
