<?php
include 'db.php'; // Include the database connection

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM posts WHERE id=$id");
$post = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $query = "UPDATE posts SET title='$title', content='$content' WHERE id=$id";
    if (mysqli_query($conn, $query)) {
        header("Location: index.php"); // Redirect to post list after updating
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
    <title>Edit Post</title>
</head>
<body>

    <h2>Edit Post</h2>
    <form action="" method="POST">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="<?php echo $post['title']; ?>" required><br><br>

        <label for="content">Content:</label><br>
        <textarea id="content" name="content" rows="5" cols="50" required><?php echo $post['content']; ?></textarea><br><br>

        <button type="submit">Update Post</button>
    </form>

</body>
</html>
