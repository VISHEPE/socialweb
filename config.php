<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "citizen_engagement";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['petition_id'])) {
    $petition_id = $_POST['petition_id'];
    
   
    $sql = "UPDATE petitions SET signatures = signatures + 1 WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $petition_id);
    $stmt->execute();
    
    echo json_encode(["success" => true]);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['poll_id']) && isset($_POST['option'])) {
    $poll_id = $_POST['poll_id'];
    $option = $_POST['option'];
    
    $sql = "INSERT INTO poll_votes (poll_id, option) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("is", $poll_id, $option);
    $stmt->execute();
    
    echo json_encode(["success" => true]);
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['feedback'])) {
    $feedback = $_POST['feedback'];
    
    $sql = "INSERT INTO feedback (content) VALUES (?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $feedback);
    $stmt->execute();
    
    echo json_encode(["success" => true]);
}

$conn->close();
?>