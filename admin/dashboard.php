<?php
session_start();
include "read.php";

if (!isset($_SESSION['role'])) {
    header("Location: login.php");
    exit();    

}  
if ($_SESSION['role'] !== 'admin') {
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
    <title>ADMIN DASHBOARD - CCST LEVELUP</title>
</head>

<body style="width: 100%;">
    <div class="navbar px-5 py-3 bg-dark">
        <div class="nav-logo">
            <h1 class="text-light">ADMIN</h1>
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
                    <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row['name'] . "</td>";
                                echo "<td>" . $row['email'] . "</td>";
                                echo "<td>" . $row['role'] . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='3'>No data found</td></tr>";
                        }
                    ?>
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
        <div class="row">
            <form class="sticky-top form-group bg-light d-flex flex-column p-5 w-50 rounded h-75 " style="box-shadow: 0px 5px 10px 1px rgba(0,0,0,0.2); top: 5%;">
                <h2>Create Quest</h2>
                <label for="">
                    Title
                    <input class="form-control" type="text">
                </label>
                <label for="">
                    Description
                    <input class="form-control" type="text">
                </label>
                <label for="">
                    XP
                    <input class="form-control" type="number">
                </label>
                <button class="btn btn-info mt-4 btn-lg">Add Quest</button>
            </form>

            <div class="f-flex w-50 px-4">
                <table class="table table-striped mb-5 text-center">
                    <h2 class="bg-dark p-4 text-light">Pending Submissions</h2>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>XP</th>
                            <th>Badge</th>
                            <th>Level</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Shawn</td>
                            <td>540 XP</td>
                            <td>1</td>
                            <td>NEWBIE</td>
                            <td>
                                <a class="btn btn-success" href="">APPROVE</a>
                                <a class="btn btn-danger" href="">REJECT</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Shawn</td>
                            <td>540 XP</td>
                            <td>1</td>
                            <td>NEWBIE</td>
                            <td>
                                <a class="btn btn-success" href="">APPROVE</a>
                                <a class="btn btn-danger" href="">REJECT</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Shawn</td>
                            <td>540 XP</td>
                            <td>1</td>
                            <td>NEWBIE</td>
                            <td>
                                <a class="btn btn-success" href="">APPROVE</a>
                                <a class="btn btn-danger" href="">REJECT</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Shawn</td>
                            <td>540 XP</td>
                            <td>1</td>
                            <td>NEWBIE</td>
                            <td>
                                <a class="btn btn-success" href="">APPROVE</a>
                                <a class="btn btn-danger" href="">REJECT</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Shawn</td>
                            <td>540 XP</td>
                            <td>1</td>
                            <td>NEWBIE</td>
                            <td>
                                <a class="btn btn-success" href="">APPROVE</a>
                                <a class="btn btn-danger" href="">REJECT</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Shawn</td>
                            <td>540 XP</td>
                            <td>1</td>
                            <td>NEWBIE</td>
                            <td>
                                <a class="btn btn-success" href="">APPROVE</a>
                                <a class="btn btn-danger" href="">REJECT</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Shawn</td>
                            <td>540 XP</td>
                            <td>1</td>
                            <td>NEWBIE</td>
                            <td>
                                <a class="btn btn-success" href="">APPROVE</a>
                                <a class="btn btn-danger" href="">REJECT</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Shawn</td>
                            <td>540 XP</td>
                            <td>1</td>
                            <td>NEWBIE</td>
                            <td>
                                <a class="btn btn-success" href="">APPROVE</a>
                                <a class="btn btn-danger" href="">REJECT</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Shawn</td>
                            <td>540 XP</td>
                            <td>1</td>
                            <td>NEWBIE</td>
                            <td>
                                <a class="btn btn-success" href="">APPROVE</a>
                                <a class="btn btn-danger" href="">REJECT</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Shawn</td>
                            <td>540 XP</td>
                            <td>1</td>
                            <td>NEWBIE</td>
                            <td>
                                <a class="btn btn-success" href="">APPROVE</a>
                                <a class="btn btn-danger" href="">REJECT</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Shawn</td>
                            <td>540 XP</td>
                            <td>1</td>
                            <td>NEWBIE</td>
                            <td>
                                <a class="btn btn-success" href="">APPROVE</a>
                                <a class="btn btn-danger" href="">REJECT</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-striped text-center">
                    <h2 class="bg-dark p-4 text-light">Manage Students</h2>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Level</th>
                            <th>Badge</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Shawn</td>
                            <td>shawn@gmail.com</td>
                            <td>1</td>
                            <td>NEWBIE</td>
                            <td>
                                <a class="btn btn-info" href="">DETAILS</a>
                                <a class="btn btn-danger" href="">REMOVE</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Shawn</td>
                            <td>shawn@gmail.com</td>
                            <td>1</td>
                            <td>NEWBIE</td>
                            <td>
                                <a class="btn btn-info" href="">DETAILS</a>
                                <a class="btn btn-danger" href="">REMVOE</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container">
        <form class="form-group" action="">

        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>