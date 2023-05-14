<?php
// Data untuk koneksi database
$DBHOST = "localhost";
$DBNAME = "perpustakaan";
$USERNAME = "root";
$PASSWORD = "";

// Melakukan koneksi ke database
try {
    $conn = new PDO("mysql:host=$DBHOST;dbname=$DBNAME", $USERNAME, $PASSWORD);
} catch (\Throwable $e) {
    echo "Koneksi Gagal, " . $e->getMessage();
}

?>