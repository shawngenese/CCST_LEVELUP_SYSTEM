<?php

include "controllers/register.php";

if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (email,password) VALUES(?, ?)");
    $stmt ->bind_param("ss", $email, $password);
    $stmt->execute();

    echo "register success";
    $stmt->close();
    
}

?>