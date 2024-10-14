<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    // Basic validation
    if (empty($name) || empty($email) || empty($password)) {
        echo "All fields are required.";
    } else {
        // For demo purposes, we will output the data (in a real scenario, you would save this in a database)
        echo "Thank you for registering, $name!";
    }
}
?>
