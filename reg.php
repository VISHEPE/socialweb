<?php
require_once 'header.php'; 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>

    <h2>Registration Form</h2>
    <form id="registrationForm" action="handler.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" required>
        <span id="nameError" class="error"></span><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" required>
        <span id="emailError" class="error"></span><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" required>
        <span id="passwordError" class="error"></span><br><br>

        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" required>
        <span id="confirmPasswordError" class="error"></span><br><br>

        <label for="age">Age:</label>
        <input type="number" id="age" required>
        <span id="ageError" class="error"></span><br><br>

        <label for="gender">Gender:</label>
        <input type="radio" name="gender" value="male" required> Male
        <input type="radio" name="gender" value="female" required> Female
        <span id="genderError" class="error"></span><br><br>

        <label for="country">Country:</label>
        <select id="country" required>
            <option value="">Select Country</option>
            <option value="USA">Kenya</option>
            <option value="Canada">Uganda</option>
        </select>
        <span id="countryError" class="error"></span><br><br>

        <label>
            <input type="checkbox" id="terms" required> I accept the terms and conditions
        </label>
        <span id="termsError" class="error"></span><br><br>

        <button type="submit">Submit</button>
        <a href="login.php">Have an account?Login</a>

    </form>

    <script src="validate.js"></script>

</body>
</html>
