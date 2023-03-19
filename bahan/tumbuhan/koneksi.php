<?php
// Koneksi ke MySQL
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'db_tumbuhan';
$koneksi = mysqli_connect($host, $user, $password, $database);

// Cek koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi ke MySQL gagal: " . mysqli_connect_error();
    exit();
}
?>