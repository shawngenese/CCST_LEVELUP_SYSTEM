<?php

$conn = new mysqli("localhost","root","","ccst_levelup_system");

if ($conn->connect_error) {
    die ("connection failed". $conn->connect_error);
}
echo "connected success";

?>