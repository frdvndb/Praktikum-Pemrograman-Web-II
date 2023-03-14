<?php
// Dengan angka NIM akhir 5, maka digunakan bangun ruang bola
// Kalkulasi volume bola menggunakan rumusnya
$jari2 = 4.2;
$VolumeBola = 4/3 * 3.14 * 4.2 * 4.2 * 4.2;

// penggunaan echo untuk menampilkan data dan fungsi number_format untuk mengubah titik pada nilai menjadi koma
echo number_format($VolumeBola, 3,",","."),  " m3"; 
?>