<?php
// Konfigurasi koneksi database
$host = "localhost";
$username = "root";
$password = "";
$database = "db_portofolio";

// Membuat koneksi
$conn = mysqli_connect($host, $username, $password, $database);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
