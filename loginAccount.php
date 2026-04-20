<?php


include "config.php";

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM users WHERE email = $email");
    if ($result->num_rows > 0){
        $user = $result->fetch_assoc();
    
        if(password_verify($password,$user['password'])){
            $_SESSION['email'] = $user['email'];
            $_SESSION['password'] = $user['password'];
            

            if ($role === 'admin') {
                header("Location: admin/dashboard.php");
                echo "Login successful";
            }
            else {
                header("Location: index.php");
                echo "user login success";
            }

            exit();
        }
        else {
            echo "incorrect password";
        }

    }
    
    exit();
}