<?php
$servername = "localhost";
$username = "u239327882_asd";
$password = "AlphaSD22";
$dbname = "u239327882_asd";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
// echo "Koneksi berhasil";
?>