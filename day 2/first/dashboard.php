<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit();
}

include 'db.php'; // Database connection

// Fetch the total number of users and posts
$post_count_query = "SELECT COUNT(*) AS post_count FROM posts";
$user_count_query = "SELECT COUNT(*) AS user_count FROM users";

$post_result = mysqli_query($conn, $post_count_query);
$user_result = mysqli_query($conn, $user_count_query);

$post_count = mysqli_fetch_assoc($post_result)['post_count'];
$user_count = mysqli_fetch_assoc($user_result)['user_count'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
    <h1>Welcome, Admin!</h1>
    <p>This is your dashboard.</p>

    <!-- Cards Section -->
    <div class="cards">
        <div class="card">
            <h3><?php echo $post_count; ?></h3>
            <p>Total Posts</p>
        </div>

        <div class="card">
            <h3><?php echo $user_count; ?></h3>
            <p>Total Users</p>
        </div>
    </div>

    <h2>Recent Activity</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Content</th>
            <th>Created At</th>
        </tr>
        <?php
        $posts_query = "SELECT id, title, content, created_at FROM posts ORDER BY created_at DESC LIMIT 5";
        $posts_result = mysqli_query($conn, $posts_query);

        while ($post = mysqli_fetch_assoc($posts_result)) {
            echo "<tr>
                    <td>{$post['id']}</td>
                    <td>{$post['title']}</td>
                    <td>{$post['content']}</td>
                    <td>{$post['created_at']}</td>
                  </tr>";
        }
        ?>
    </table>
</div>

</body>
</html>
