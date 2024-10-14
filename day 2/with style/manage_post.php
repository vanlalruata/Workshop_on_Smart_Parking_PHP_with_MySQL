<?php
session_start();
include 'db.php';

if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit();
}

// Fetch posts
$result = mysqli_query($conn, "SELECT * FROM posts ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Posts</title>
</head>
<body>

<div class="content">
    <h1>Manage Posts</h1>
    <a href="create_post.php">Create New Post</a><br><br>

    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Content</th>
            <th>Created At</th>
            <th>Actions</th>
        </tr>

        <?php while ($post = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?php echo $post['id']; ?></td>
                <td><?php echo $post['title']; ?></td>
                <td><?php echo $post['content']; ?></td>
                <td><?php echo $post['created_at']; ?></td>
                <td>
                    <a href="edit_post.php?id=<?php echo $post['id']; ?>">Edit</a> |
                    <a href="delete_post.php?id=<?php echo $post['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>

</body>
</html>
