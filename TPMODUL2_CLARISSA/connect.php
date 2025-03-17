<?php
// ==================1==================
// Definisikan variabel2 yang akan digunakan untuk melakukan koneksi ke database
$host       = "localhost";
$username   = "root";
$password   = "";
$db         = "ead_library";
$port       = 3308;

// ==================2==================
// Definisikan $conn untuk melakukan koneksi ke database 
$conn = mysqli_connect($host, $username, $password, $db, $port);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>