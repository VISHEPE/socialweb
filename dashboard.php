<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}
include('header.php');

// Database connection
include('config.php');

//event submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $user_id = $_SESSION['user']['id']; // Fetch the user's ID from the session
    //event into the database
    $sql = "INSERT INTO events (user_id, title, event_date, description) VALUES ('$user_id', '$title', '$date', '$description')";
    if ($conn->query($sql) === TRUE) {
        echo "<p>Event successfully submitted!</p>";
    } else {
        echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
    }
}
?>

<div class="container">
    <h2>Dashboard</h2>
    <p>Welcome, <?php echo $_SESSION['user']['name']; ?>!</p>
    <p>Email: <?php echo $_SESSION['user']['email']; ?></p>
    <p>Country: <?php echo $_SESSION['user']['country']; ?></p>

    <!-- Event Submission Form -->
    <h3>Submit a New Event</h3>
    <form action="dashboard.php" method="POST">
        <label for="title">Event Title:</label>
        <input type="text" id="title" name="title" required>

        <label for="date">Event Date:</label>
        <input type="date" id="date" name="date" required>

        <label for="description">Event Description:</label>
        <textarea id="description" name="description" required></textarea>

        <input type="submit" value="Submit Event">
    </form>

    <!-- Logout Form -->
    <form action="logout.php" method="POST">
        <input type="submit" value="Logout">
    </form>
</div>

<?php
// Include the footer file
include('footer.php');

// Close the database connection
$conn->close();
?>
