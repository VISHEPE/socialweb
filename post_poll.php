

    <?php include('header.php')
?>


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

            <button type="submit" class="search-button" >Post Poll</button>
        </form>
    </div>
  
</body>
</html>
