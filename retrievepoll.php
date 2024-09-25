<?php
// submit.php

include("config.php");

// Retrieve the form data
$poll_question = $_POST['poll_question'];
$option1 = $_POST['option1'];
$option2 = $_POST['option2'];
$option3 = $_POST['option3'];

// Insert the data into the database
$sql = "INSERT INTO polls (poll_question, option1, option2, option3) VALUES ('$poll_question', '$option1', '$option2', '$option3')";
if (mysqli_query($conn, $sql)) {
    echo "Poll inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>


<?php
// Retrieve the poll data from the database
$sql = "SELECT * FROM polls";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    $poll_question = $row['poll_question'];
    $option1 = $row['option1'];
    $option2 = $row['option2'];
    $option3 = $row['option3'];

    // Display the poll item
    echo "<div class='petition-item'>";
    echo "<h3>$poll_question</h3>";
    echo "<p>Option 1: $option1</p>";
    echo "<p>Option 2: $option2</p>";
    echo "<p>Option 3: $option3</p>";
    echo "<form method='POST' action='sign_poll.php'>";
    echo "<input type='hidden' name='poll_id' value='".$row['id']."'>";
    echo "<button class='btn' type='submit'>Vote</button>";
    echo "</form>";
    echo "</div>";
}

// Close the database connection
mysqli_close($conn);
?>