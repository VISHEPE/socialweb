<?php


include("header.php");
include('config.php');


// Default query to fetch all governors
$query = "SELECT * FROM governance";

// Check if a search query is provided
if (isset($_GET['search']) && !empty($_GET['search'])) {
    $search = mysqli_real_escape_string($conn, $_GET['search']);
    // Modify the query to filter by county
    $query = "SELECT * FROM governance WHERE county LIKE '%$search%'";
}

$result = mysqli_query($conn, $query);

// Check if the query was successful
if (!$result) {
    die("Query failed: " . mysqli_error($conn));  // Output the MySQL error
}

$governors = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>



<body>
    <!-- Header Section -->
    <h1 class="header">
        <h1>Kenya Governors and President Ratings</h1>
    </h1>

    <!-- Search Bar -->
    <section class="search-bar">
        <form method="GET" action="">
            <input type="text" name="search" placeholder="Search by county" class="search-input" value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
            <button type="submit" class="search-button">Search</button>
        </form>
    </section>

    <!-- Check if governors are found -->
    <?php if (count($governors) > 0): ?>
        <?php foreach ($governors as $governor): ?>
        <!-- Leader Card -->
        <section class="leader-card">
            <!-- Display Governor Image -->
            <img src="image/<?php echo $governor['image']; ?>" alt="Governor Image" class="governor-image">
            <h2><?php echo $governor['name']; ?> - Governor of <?php echo $governor['county']; ?></h2>
            <p class="rating">Current Rating: <?php echo $governor['rating']; ?> / 5</p>

            <!-- Rating Form -->
            <form class="rating-form">
                <select>
                    <option>Select Rating</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <button type="submit" class="submit-rating">Submit Rating</button>
            </form>

            <!-- Comment Form -->
            <form class="comment-form">
                <textarea placeholder="Leave a comment"></textarea>
                <button type="submit" class="submit-comment">Submit Comment</button>
            </form>

            <!-- County Projects -->
            <div class="county-projects">
                <h3>County Projects:</h3>
                <ul>
                    <?php 
                    $projects = explode(',', $governor['projects']); // Assuming projects are stored as a comma-separated string
                    foreach ($projects as $project): ?>
                        <li><?php echo $project; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </section>
        <?php endforeach; ?>
    <?php else: ?>
        <!-- Display message if no governors found -->
        <p>No governors found for this county.</p>
    <?php endif; ?>

    <!-- Next Card Indicator -->
    <div class="next-card">
        <p>Next Governor Card</p>
    </div>
   <?php
    include("footer.php");
    ?>
</body>
</html>
