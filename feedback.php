<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citizen Engagement Platform</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <?php 
    include("header.php");
    
    // Database connection settings
    $host = 'localhost:3308';  
    $dbname = 'citizen_engagement'; 
    $username = 'root';  
    $password = '';  
    
    // Feedback submission message
    $feedbackMessage = '';

    try {
        // Establish database connection using PDO
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
       
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $feedback_text = $_POST['feedback_text'];
            // Prepare the SQL query to insert the feedback into the database
            $stmt = $conn->prepare("INSERT INTO feedback (feedback_text) VALUES (:feedback_text)");
            $stmt->bindParam(':feedback_text', $feedback_text);
            $stmt->execute();

            
            $feedbackMessage = "Thank you for your feedback!";
        }
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    ?>
    <style>
        .feedback-success {
    color: green;
    font-weight: bold;
    margin-top: 10px;
}

    </style>
</head>
<body>

<section id="feedback" class="content-section">
    <h2>Policy Feedback</h2>

    <!-- Display the feedback success message, if available -->
    <?php if ($feedbackMessage): ?>
        <p class="feedback-success"><?= htmlspecialchars($feedbackMessage) ?></p>
    <?php endif; ?>

    <!-- Feedback form -->
    <form id="feedback-form" method="POST" action="">
        <textarea id="feedback-text" name="feedback_text" rows="4" placeholder="Share your thoughts on current policies..." required></textarea>
        <button type="submit" class="btn">Submit Feedback</button>
    </form>
</section>

<?php include("footer.php"); ?>

</body>
</html>
