<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "comments";
$conn = mysqli_connect($server, $user, $password, $database);
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>