<?php include('header.php'); ?>
<div class="container">
    
    <h2>Register</h2>
    <form action="handler.php" method="POST">
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="name">Password:</label>
        <input type="text" id="name" name="password" required>
        <label for="name">Confirm Password:</label>
        <input type="text" id="name" name="ConfirmPassword" required>
 

        
        <label for="country">Country:</label>
        <select id="country" name="country">
            <option value="uganda">uganda</option>
            <option value="Kenya">Kenya</option>
            <option value="Tanzania">Tanzania</option>
            <option value="Ethiopia">Ethiopia</option>
           
        </select>

        <input type="submit" value="register">
        <a href="login.php">Have account?Login</a>

        
    </form>
    
</div>

<?php include('footer.php'); ?>
