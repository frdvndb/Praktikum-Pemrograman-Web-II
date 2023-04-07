<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK305 - M. FARID PEBRIAN (2110817210015)</title>
</head>
<body>

    <!-- Penggunaan form pada HTML dengan metode POST-->
    <form  method="post" action="#">
        <input type="text" name="inputAwal">
        <input type="submit" name="submit" value="Submit">
    </form>    
</body>
</html>
<?php

    // Jika form disubmit, maka dieksekusi kode berikut.
    if ($_POST) {

        // Pembuatan variabel dan
        // pemberian nilai pada variabel
        $inputAwal=$_POST['inputAwal'];

        // Penggunaan strlen untuk:
        // menghitung panjang string
        $panjang = strlen($inputAwal);

        // Penggunaan str_split untuk:
        // Memisahkan string menjadi array
        $inputAkhir = str_split($inputAwal);
        $hurufPertama = 0;
        $indexArray = 0;

        // Menampilkan input dan output
        // Menggunakan fungsi echo
        echo "<h3>Input:</h3>";
        echo "$inputAwal";
        echo "<h3>Output:</h3>";

        // Penggunaan perulangan While
        while($hurufPertama < $panjang){

            // Penggunaan strtoupper untuk:
            // mengubah huruf menjadi huruf kapital
            echo strtoupper($inputAkhir[$indexArray]);

            // Penggunaan perulangan For
            for($i = 0; $i < $panjang-1; $i++){

                // Penggunaan strtolower untuk:
                // mengubah huruf menjadi huruf kecil
                echo strtolower($inputAkhir[$indexArray]);
            }
            $hurufPertama++;
            $indexArray++;
        }
    }
?>