<?php include('header.php') ?>

<div class="container">
    <section id="petitions" class="content-section">
        <h2>Active Petitions</h2>

        <?php
        include("config.php");

        // Retrieve the poll data from the database
        $sql = "SELECT * FROM polltally";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            $poll_question = $row['poll_question'];
            $yes_count = $row['option1'];
            $no_count = $row['option2'];
            $undecided_count = $row['option3'];
            $slug = $row['slug'];  

            // poll item disply
            echo "<div class='petition-item'>";
            echo "<h3>$poll_question</h3>";
            echo "<p>Yes: $yes_count</p>";
            echo "<p>No: $no_count</p>";
            echo "<p>Undecided: $undecided_count</p>";

            
            echo "<form method='POST' action='sign_poll.php'>";
            echo "<input type='hidden' name='poll_id' value='".$row['id']."'>";
            echo "<button class='btn' name='vote' value='yes' type='submit'>Yes</button>";
            echo "<button class='btn' name='vote' value='no' type='submit'>No</button>";
            echo "<button class='btn' name='vote' value='undecided' type='submit'>Undecided</button>";
            echo "</form>";

            // Generate shareable link
            $poll_link = "http://yourwebsite.com/poll_vote.php?poll=".$slug;
            echo "<p>Share this poll: <a href='$poll_link'>$poll_link</a></p>";

            echo "</div>";
        }
        ?>
    </section>
</div>

<?php include("footer.php") ?>
</body>
</html>
