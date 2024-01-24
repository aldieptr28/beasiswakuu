<?php
// Informasi koneksi database
$host = "localhost"; // Ganti dengan nama host database Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$database = "beasiswaku"; // Ganti dengan nama database Anda

// Membuat koneksi
$koneksi = new mysqli($host, $username, $password, $database);

// Menangani kesalahan koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Set karakter encoding ke UTF-8
$koneksi->set_charset("utf8");
?>
