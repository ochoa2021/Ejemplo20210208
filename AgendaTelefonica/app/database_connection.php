<?php
$servername = "localhost";
$database = "agenda_telefonica";
$username = "root";
$password = "";


// Create connection
$connect = new mysqli($servername, $username, $password, $database);

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
if (!$connect->set_charset("utf8")) {
    die("Error loading character set: " . $connect->error);
}
?>
