<?php
include 'db.php'; // Include the database connection

$id = $_GET['id'];

$query = "DELETE FROM posts WHERE id=$id";
if (mysqli_query($conn, $query)) {
    header("Location: index.php"); // Redirect to post list after deleting
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
