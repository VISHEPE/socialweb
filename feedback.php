
    <?php 
    include("header.php");
    
    // Database connection settings
    $host = 'localhost:3308';  
    $dbname = 'citizen_engagement'; 
    $username = 'root';  
    $password = '';  
    
    // submission message
    $feedbackMessage = '';

    try {
        //connection using PDO
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
       
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $feedback_text = $_POST['feedback_text'];
            // insert the feedback into the database
            $stmt = $conn->prepare("INSERT INTO feedback (feedback_text) VALUES (:feedback_text)");
            $stmt->bindParam(':feedback_text', $feedback_text);
            $stmt->execute();

            
            $feedbackMessage = "Thank you for your feedback!";
        }
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    ?>


   

<body>

<section id="feedback" class="content-section">
    <h2>Policy Feedback</h2>

    <?php if ($feedbackMessage): ?>
        <p class="feedback-success"><?= htmlspecialchars($feedbackMessage) ?></p>
    <?php endif; ?>

    <!-- Feedback form -->
    <form id="feedback-form" method="POST" action="">
        <textarea id="feedback-text" name="feedback_text" rows="4" placeholder="Share your thoughts on current policies..." required></textarea>
        <button type="submit" class="btn">Submit Feedback</button>
    </form>
</section>


</body>

</html>
