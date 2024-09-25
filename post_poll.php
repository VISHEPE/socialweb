<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post a Poll - Citizen Engagement Platform</title>
   

    <?php include('header.php')
?>

</head>
<body>
    <div class="container">
        <h2>Post a New Poll</h2>

        <!-- Poll Form -->
        <form method="POST" action="submit.php">
            <label for="poll_question">Poll Question:</label>
            <input type="text" id="poll_question" name="poll_question" required>

            <!-- Hidden Inputs for Predefined Poll Options -->
            <input type="hidden" id="option1" name="option1" value="Yes">
            <input type="hidden" id="option2" name="option2" value="No">
            <input type="hidden" id="option3" name="option3" value="Undecided">

            <!-- Displaying the Poll Options -->
            <p>Option 1: Yes</p>
            <p>Option 2: No</p>
            <p>Option 3: Undecided</p>

            <button type="submit" class="btn">Post Poll</button>
        </form>
    </div>
    <?php
include("footer.php")
?>
</body>
</html>
