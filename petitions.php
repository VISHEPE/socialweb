



<?php include('header.php')
?>

    <div class="container">
        <section id="petitions" class="content-section">
            <h2>Active Petitions</h2>

            <!-- Petition Item 1 -->
            <div class="petition-item">
                <h3>Improve Public Transportation in Naivasha County</h3>
                <p>Signatures: <span id="signatures1">1500</span></p>
                <form method="POST" action="petition_form.php">
                    <input type="hidden" name="petition_id" value="1">
                    <button class="btn"  href='petition_form.php' type="submit">Sign Petition</button>
                </form>
            </div>

            <!-- Petition Item 2 -->
            <div class="petition-item">
                <h3>Increase CDF Funding for Education IN Viwandani</h3>
                <p>Signatures: <span id="signatures2">2000</span></p>
                <form method="POST" action="sign_petition.php">
                    <input type="hidden" name="petition_id" value="2">
                    <button class="btn" href='petition_form.php' type="submit">Sign Petition</button>
                </form>
            </div>
        </section>
    </div>
    <?php include("footer.php")
    ?>
</body>
</html>
