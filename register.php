<?php
session_start();
include "createAccount.php";

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Register - CCST LEVELUP</title>
  </head>
  <body class="bg-light">
    <div class="container d-flex align-items-center justify-content-center flex-column" style="min-height: 100dvh;">
        <h1 class="mb-4">CCST LEVELUP SYSTEM</h1>
        <form class="form-group d-flex flex-column w-50 bg-white p-4 rounded" action="" method="POST">
            <h2 class="text-center font-weight-bold">CREATE ACCOUNT</h2>
            <p class="text-danger text-center font-weight-bold" id="errorMessage"></p>
            <label class="form-label" for="">
                Name
                <input class="form-control" type="text" name="name" id="name" placeholder="Name">
            </label>
            <label class="form-label" for="">
                Email
                <input class="form-control" type="email" name="email" id="email" placeholder="Email">
            </label>
            <label class="form-label" for="">
                Password
                <input class="form-control" type="password" name="password" id="password" placeholder="Password">
            </label>
            <label class="form-label" for="">
                Confirm Password
                <input class="form-control" type="password" name="password" id="confirmPassword" placeholder="Password">
            </label>
            <button class="btn btn-primary mt-3" type="submit" name="register">CREATE ACCOUNT</button>
        </form>
        <p>Already have an account? <a href="login.php">Login</a></p>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
        const form = document.querySelector("form");
        const errorMessage = document.querySelector("#errorMessage");

        form.addEventListener("submit", (e) => {
            const name = document.querySelector("#name").value;
            const email = document.querySelector("#email").value;
            const password = document.querySelector("#password").value;
            const confirmPassword = document.querySelector("#confirmPassword").value;

            if (name === "" || email === "" || password === "" || confirmPassword === "") {
                e.preventDefault();
                errorMessage.innerHTML = "Please fill all fields.";
                return;
            }

            if (confirmPassword !== password) {
                e.preventDefault();
                errorMessage.innerHTML = "Passwords do not match.";
                console.log("error");
            }
        });
    </script>
  </body>
</html>