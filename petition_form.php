

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Petition</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
    <div class="container">
        <h2>Petition Form</h2>
        <p>Current Signatures: </p>
        
        <!-- Sign Petition Form -->
        <form method="POST" action="sign_petition.php">
            <input type="hidden" name="petition_id" value="1"> <!-- Assuming a petition_id of 1 -->

            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="comment">Your Comment:</label>
            <input type="text" id="comment" name="comment" required>

            <label for="agreement">Do you agree with this petition:</label>
            <select id="agreement" name="agreement" required>
                <option value="">--Please choose an option--</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>

            <button type="submit" class="btn">Sign Petition</button>
        </form>
    </div>
</body>
</html>


