<?php
// database configuration
include 'config.php'; 


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect and sanitize form data
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';
    $confirmPassword = isset($_POST['confirmPassword']) ? trim($_POST['confirmPassword']) : '';
    $age = isset($_POST['age']) ? (int)$_POST['age'] : 0; // Default to 0 if not set
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $country = isset($_POST['country']) ? $_POST['country'] : '';

    // Check for empty fields
    if (empty($name) || empty($email) || empty($password) || empty($confirmPassword) || empty($age) || empty($gender) || empty($country)) {
        echo "All fields are required!";
        exit;
    }

    // Password matching validation
    if ($password !== $confirmPassword) {
        echo "Passwords do not match!";
        exit; 
    }

    // Password complexity validation
    $passwordPattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/';
    if (!preg_match($passwordPattern, $password)) {
        echo "Password must be at least 8 characters long and include at least one uppercase letter, one lowercase letter, one number, and one special character.";
        exit; // Stop further execution
    }

    // Hashing the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    
    $stmt = $conn->prepare("INSERT INTO user_management (name, email, password, age, gender, country) VALUES (?, ?, ?, ?, ?, ?)");
    if ($stmt) {
        // Bind parameters
        $stmt->bind_param("ssisis", $name, $email, $hashedPassword, $age, $gender, $country);
        if ($stmt->execute()) {
            header("Location: dashboard.php?username=" . urlencode($name));
            exit(); 
        } else {
            echo "Error executing statement: " . $stmt->error; 
        }
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error; 
    }
}

// Close the database connection
$conn->close();

