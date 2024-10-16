<?php
$host = 'localhost';
$username = 'root';
$password = ''; // Use your MySQL password
$database = 'admin_dashboard';

// Establish MySQLi connection
$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
