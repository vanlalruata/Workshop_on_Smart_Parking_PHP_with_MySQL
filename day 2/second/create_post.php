<?php
session_start();
include 'db.php';

if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_SESSION['user_id']; // Use logged-in user's ID
    $title = $_POST['title'];
    $content = $_POST['content'];

    $query = "INSERT INTO posts (user_id, title, content) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 'iss', $user_id, $title, $content);

    if (mysqli_stmt_execute($stmt)) {
        header('Location: manage_posts.php');
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
