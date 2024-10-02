<?php


include('config.php'); 

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $petition_id = intval($_POST['petition_id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $comment = mysqli_real_escape_string($conn, $_POST['comment']);
    $agreement = mysqli_real_escape_string($conn, $_POST['agreement']);

    // execute the insert query
    $sql = "INSERT INTO petition_signatures (petition_id, name, comment, agreement)
            VALUES ('$petition_id', '$name', '$comment', '$agreement')";

    if (mysqli_query($conn, $sql)) {
        echo "Thank you for signing the petition!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}

