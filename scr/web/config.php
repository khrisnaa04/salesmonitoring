<?php
//config.php

$host = "localhost";
$username = "root";
$password = "";
$database = "xyz";

$koneksi = mysqli_connect($host, $username, $password, $database);

if (!$koneksi) {
    die("Connection to the database failed: " . mysqli_connect_error());
}
?>
