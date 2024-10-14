<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Basic validation
    if (empty($name) || empty($email) || empty($message)) {
        echo "All fields are required.";
    } else {
        // For demo purposes, we will just output the data
        echo "Thank you, $name! We received your message:<br>";
        echo nl2br($message);
    }
}
?>
