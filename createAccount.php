<?php

include "config.php";

if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    

    // $hashed_pass = password_hash($password, PASSWORD_DEFAULT);
    
    $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $password);

    if ($stmt->execute()) {
        // echo '<script>alert("Account Created")</script>';
        header("Location: login.php");
    } else {
        echo "Error: Email might already exist.";
    }
}
?>
