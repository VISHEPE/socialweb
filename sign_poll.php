<?php
include("config.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $poll_id = $_POST['poll_id'];
    $vote = $_POST['vote'];  

    // Update the corresponding option's count
    if ($vote == 'yes') {
        $sql = "UPDATE polltally SET option1 = option1 + 1 WHERE id = ?";
    } elseif ($vote == 'no') {
        $sql = "UPDATE polltally SET option2 = option2 + 1 WHERE id = ?";
    } elseif ($vote == 'undecided') {
        $sql = "UPDATE polltally SET option3 = option3 + 1 WHERE id = ?";
    }

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $poll_id);
    $stmt->execute();

    // Redirect back to the poll page or show a success message
    header("Location: petitions.php");
    exit();
}
?>
