<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; }
        .sidebar { width: 200px; height: 100vh; background: #333; color: white; position: fixed; }
        .sidebar a { display: block; padding: 10px; color: white; text-decoration: none; }
        .sidebar a:hover { background: #444; }
        .content { margin-left: 200px; padding: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background: #f4f4f4; }
    </style>
</head>
<body>

<div class="sidebar">
    <h2>Admin Panel</h2>
    <a href="dashboard.php">Dashboard</a>
    <a href="manage_posts.php">Manage Posts</a>
    <a href="logout.php">Logout</a>
</div>

<div class="content">
    <h1>Welcome, Admin!</h1>
    <p>This is your dashboard.</p>
</div>

</body>
</html>
