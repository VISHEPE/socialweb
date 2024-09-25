<?php include('header.php')
?>

<body>



    <h2>Current Opinion Polls</h2>
    <div class="poll-item">
        <h3>Should the city invest in more green spaces?</h3>
        <label><input type="radio" name="poll_1" value="Yes"> Yes</label>
        <label><input type="radio" name="poll_1" value="No"> No</label>
        <label><input type="radio" name="poll_1" value="Undecided"> Undecided</label>
        <button class="btn">Submit Vote</button>
    </div>
    <?php include("footer.php")
    ?>
</body>
</html>