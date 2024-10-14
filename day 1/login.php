<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Basic validation
    if (empty($username) || empty($password)) {
        echo "Username and password are required.";
    } else {
        // Example of hardcoded credentials for demonstration
        if ($username == 'admin' && $password == 'password') {
            echo "Login successful!";
        } else {
            echo "Invalid username or password.";
        }
    }
}
?>