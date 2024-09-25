<?php
// Database connection
$host = 'localhost:3308';  // Replace with your database host
$dbname = 'citizen_engagement';  // Database name
$username = 'root';  // Replace with your database username
$password = '';  // Replace with your database password

try {
    // Establish database connection using PDO
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get the poll data from the form
        $poll_question = $_POST['poll_question'];
        $option1 = $_POST['option1'];  // Value will be "Yes"
        $option2 = $_POST['option2'];  // Value will be "No"
        $option3 = $_POST['option3'];  // Value will be "Undecided"

        // Prepare the SQL query to insert the poll into the database
        $stmt = $conn->prepare("INSERT INTO polltally (poll_question, option1, option2, option3) VALUES (:poll_question, :option1, :option2, :option3)");
        $stmt->bindParam(':poll_question', $poll_question);
        $stmt->bindParam(':option1', $option1);
        $stmt->bindParam(':option2', $option2);
        $stmt->bindParam(':option3', $option3);

        // Execute the query
        $stmt->execute();

        // Redirect or show a success message
        echo "Poll posted successfully!";
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

