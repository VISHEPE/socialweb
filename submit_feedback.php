<?php
// Database connection
$host = 'localhost:3308';  
$dbname = 'citizen_engagement';  
$username = 'root';  
$password = '';  

try {
    // connection using PDO
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $feedback_text = $_POST['feedback_text'];

        // Prepare the SQL query to insert the feedback into the database
        $stmt = $conn->prepare("INSERT INTO feedback (feedback_text) VALUES (:feedback_text)");
        $stmt->bindParam(':feedback_text', $feedback_text);

        
        $stmt->execute();

        echo "Thank you for your feedback!";
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

