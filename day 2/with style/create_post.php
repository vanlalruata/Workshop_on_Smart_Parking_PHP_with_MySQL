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
</head>
<body>

<h2>Create Post</h2>
<form method="POST">
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" required><br><br>

    <label for="content">Content:</label><br>
    <textarea id="content" name="content" rows="5" cols="50" required></textarea><br><br>

    <button type="submit">Create</button>
</form>

</body>
</html>
