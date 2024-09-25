<?php
// Database connection
$host = 'localhost:3308';  
$dbname = 'citizen_engagement';
$username = 'root';  
$password = '';  

try {
    // Establish database connection using PDO
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $poll_question = $_POST['poll_question'];
        $option1 = $_POST['option1'];  
        $option2 = $_POST['option2'];  
        $option3 = $_POST['option3'];  

        // Prepare the SQL query to insert the poll into the database
        $stmt = $conn->prepare("INSERT INTO polltally (poll_question, option1, option2, option3) VALUES (:poll_question, :option1, :option2, :option3)");
        $stmt->bindParam(':poll_question', $poll_question);
        $stmt->bindParam(':option1', $option1);
        $stmt->bindParam(':option2', $option2);
        $stmt->bindParam(':option3', $option3);

       
        $stmt->execute();

        // Redirect or show a success message
        header("Location: petitions.php");
        exit(); 
    
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

