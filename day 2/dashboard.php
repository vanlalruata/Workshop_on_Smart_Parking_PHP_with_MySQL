<?php
session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php");  // Redirect to login if not authenticated
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>

    <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
    <p>You are now logged in.</p>

    <a href="logout.php">Logout</a>

</body>
</html>
