<?php
$host = 'localhost';
$username = 'root';  // Replace with your MySQL username
$password = '';      // Replace with your MySQL password
$database = 'my_blog';

// Create a connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
