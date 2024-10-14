<?php
include 'db.php'; // Include the database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $query = "INSERT INTO posts (title, content) VALUES ('$title', '$content')";
    if (mysqli_query($conn, $query)) {
        header("Location: index.php"); // Redirect to post list after creating
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
</head>
<body>

    <h2>Create a New Post</h2>
    <form action="create_post.php" method="POST">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required><br><br>

        <label for="content">Content:</label><br>
        <textarea id="content" name="content" rows="5" cols="50" required></textarea><br><br>

        <button type="submit">Create Post</button>
    </form>

</body>
</html>
