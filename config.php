<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "rental_mobil";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
