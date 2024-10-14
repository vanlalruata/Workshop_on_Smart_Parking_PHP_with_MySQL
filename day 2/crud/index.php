<?php
include 'db.php'; // Include the database connection

// Fetch all posts
$result = mysqli_query($conn, "SELECT * FROM posts ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post List</title>
</head>
<body>

    <h2>Post List</h2>
    <a href="create_post.php">Create New Post</a><br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Content</th>
            <th>Created At</th>
            <th>Actions</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['title']; ?></td>
                <td><?php echo $row['content']; ?></td>
                <td><?php echo $row['created_at']; ?></td>
                <td>
                    <a href="edit_post.php?id=<?php echo $row['id']; ?>">Edit</a> | 
                    <a href="delete_post.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>

</body>
</html>
