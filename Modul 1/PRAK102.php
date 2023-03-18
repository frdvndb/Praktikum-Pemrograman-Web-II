<?php
// Dengan angka NIM akhir 5, 
// Maka digunakan bangun ruang bola
// Pembuatan variabel dan kalkulasi volume bola
$jari2 = 4.2;
$phi = 3.14;
$VolumeBola = 4/3 * $phi * $jari2 * $jari2 * $jari2;

// Penggunaan echo untuk menampilkan volume bola
// Fungsi number_format untuk mengubah titik menjadi koma
echo number_format($VolumeBola, 3,",","."),  " m3"; 
?>