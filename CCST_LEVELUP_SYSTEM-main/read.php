<?php
include 'config.php';

$sql = "SELECT id, email, role FROM users";
$result = $conn->query($sql);
?>