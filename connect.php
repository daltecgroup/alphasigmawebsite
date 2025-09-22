<?php
$servername = "localhost";
$username = "root";
$password = "LYC3MgijsVJX4IrQOydoqx6mwWcne4rTszsi2aokVyGEbaj8duAi0Hses1zCUdIt";
$dbname = "asdwebsite";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
// echo "Koneksi berhasil";
?>
