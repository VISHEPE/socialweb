<?php
header('Content-Type: application/json');

include('config.php');
try {
    
    // Get POST data
    $description = $_POST['description'];
    $lat = $_POST['lat'];
    $lng = $_POST['lng'];

    // Insert the report into the database
    $stmt = $pdo->prepare("INSERT INTO reports (description, latitude, longitude) VALUES (?, ?, ?)");
    $stmt->execute([$description, $lat, $lng]);

    // Return success response
    echo json_encode(['success' => true]);
} catch (PDOException $e) {
    // Handle errors
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
}

