<?php

include "config.php";

if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);
    
    $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $hashed_pass);

    if ($stmt->execute()) {
        // echo '<script>alert("Account Created")</script>';
        header("Location: login.php");
    } else {
        echo "Error: Email might already exist.";
    }
}
?>
