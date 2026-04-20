<?php
session_start();

if (!isset($_SESSION['role'])) {
    header("Location: login.php");
    exit();    

}  
if ($_SESSION['role'] !== 'user') {
    header("Location: login.php");
    exit();  
}    
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>USER DASHBOARD - CCST LEVELUP</title>
</head>
<body style="width: 100%;">
    <div class="navbar px-5 py-3 bg-dark">
        <div class="nav-logo">
            <h1 class="text-light">USER</h1>
        </div>
        <div class="nav-button">
            <a class="btn btn-warning" href="logout.php">LOGOUT</a>
        </div>
    </div>
<div class="container-fluid p-5">
        <div class="col">
            <table class="table table-striped mb-5">
                <h1 class="bg-dark text-white p-4">All Students</h1>
                <thead class="">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>XP</th>
                        <th>LEVEL</th>
                        <th>BADGE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">Shawn</td>
                        <td>shawn@gmail.com</td>
                        <td>250 XP</td>
                        <td>2</td>
                        <td>NEWBIE</td>
                    </tr>
                    <tr>
                        <td scope="row">Shawn</td>
                        <td>shawn@gmail.com</td>
                        <td>250 XP</td>
                        <td>2</td>
                        <td>NEWBIE</td>
                    </tr>
                    <tr>
                        <td scope="row">Shawn</td>
                        <td>shawn@gmail.com</td>
                        <td>250 XP</td>
                        <td>2</td>
                        <td>NEWBIE</td>
                    </tr>
                    <tr>
                        <td scope="row">Shawn</td>
                        <td>shawn@gmail.com</td>
                        <td>250 XP</td>
                        <td>2</td>
                        <td>NEWBIE</td>
                    </tr>
                    <tr>
                        <td scope="row">Shawn</td>
                        <td>shawn@gmail.com</td>
                        <td>250 XP</td>
                        <td>2</td>
                        <td>NEWBIE</td>
                    </tr>
                    <tr>
                        <td scope="row">Shawn</td>
                        <td>shawn@gmail.com</td>
                        <td>250 XP</td>
                        <td>2</td>
                        <td>NEWBIE</td>
                    </tr>
                    <tr>
                        <td scope="row">Shawn</td>
                        <td>shawn@gmail.com</td>
                        <td>250 XP</td>
                        <td>2</td>
                        <td>NEWBIE</td>
                    </tr>
                    <tr>
                        <td scope="row">Shawn</td>
                        <td>shawn@gmail.com</td>
                        <td>250 XP</td>
                        <td>2</td>
                        <td>NEWBIE</td>
                    </tr>
                    <tr>
                        <td scope="row">Shawn</td>
                        <td>shawn@gmail.com</td>
                        <td>250 XP</td>
                        <td>2</td>
                        <td>NEWBIE</td>
                    </tr>
                    <tr>
                        <td scope="row">Shawn</td>
                        <td>shawn@gmail.com</td>
                        <td>250 XP</td>
                        <td>2</td>
                        <td>NEWBIE</td>
                    </tr>
                    <tr>
                        <td scope="row">Shawn</td>
                        <td>shawn@gmail.com</td>
                        <td>250 XP</td>
                        <td>2</td>
                        <td>NEWBIE</td>
                    </tr>
                    <tr>
                        <td scope="row">Shawn</td>
                        <td>shawn@gmail.com</td>
                        <td>250 XP</td>
                        <td>2</td>
                        <td>NEWBIE</td>
                    </tr>
                    <tr>
                        <td scope="row">Shawn</td>
                        <td>shawn@gmail.com</td>
                        <td>250 XP</td>
                        <td>2</td>
                        <td>NEWBIE</td>
                    </tr>
                    <tr>
                        <td scope="row">Shawn</td>
                        <td>shawn@gmail.com</td>
                        <td>250 XP</td>
                        <td>2</td>
                        <td>NEWBIE</td>
                    </tr>
                    <tr>
                        <td scope="row">Shawn</td>
                        <td>shawn@gmail.com</td>
                        <td>250 XP</td>
                        <td>2</td>
                        <td>NEWBIE</td>
                    </tr>
                    <tr>
                        <td scope="row">Shawn</td>
                        <td>shawn@gmail.com</td>
                        <td>250 XP</td>
                        <td>2</td>
                        <td>NEWBIE</td>
                    </tr>
                </tbody>
            </table>
        </div>
  
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>