<?php
// Pemberian nilai variabel dan konversi suhu menggunakan rumusnya dan penggunaan echo
$Celcius = 37.841;
$Fahrenheit = (9/5 * $Celcius) + 32;
$Reamur =  4/5 * $Celcius;
$Kelvin = $Celcius + 273.15;

// Penggunaan echo untuk menampilkan data dan number_format untuk mengubah titik pada nilai menjadi koma
echo "Fahrenheit (F) = ", number_format($Fahrenheit, 4,",",".");
echo "<br>Reamur (R) = ", number_format($Reamur, 4,",",".");
echo "<br>Kelvin (K) = ", number_format($Kelvin, 4,",",".");
?>