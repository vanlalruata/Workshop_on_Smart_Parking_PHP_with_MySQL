<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $query = "INSERT INTO posts (title, content) VALUES ('$title', '$content')";
    mysqli_query($conn, $query);
    header('Location: manage_posts.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f0f2f5;
        }

        /* Sidebar Styling */
        .sidebar {
            width: 200px;
            height: 100vh;
            background: #333;
            color: white;
            position: fixed;
            padding-top: 20px;
        }

        .sidebar a {
            display: block;
            padding: 10px;
            color: white;
            text-decoration: none;
        }

        .sidebar a:hover {
            background: #444;
        }

        /* Content Section */
        .content {
            margin-left: 200px;
            padding: 20px;
        }

        /* Cards Layout */
        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 20px;
        }

        .card {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .card h3 {
            margin: 0;
            font-size: 24px;
            color: #333;
        }

        .card p {
            margin: 8px 0 0;
            font-size: 18px;
            color: #555;
        }

        /* Table Styling */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background: #f4f4f4;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .content {
                margin-left: 0;
            }
        }
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
        <h2>Create Post</h2>
        <form method="POST">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required><br><br>

            <label for="content">Content:</label><br>
            <textarea id="content" name="content" rows="5" cols="50" required></textarea><br><br>

            <button type="submit">Create</button>
        </form>
    </div>
</body>
</html>
