<?php 

    // Fungsi untuk pengecekan dan menyimpan nilai
    // yang sudah dimasukkan sebelumnya pada form
    function ifFilled($name){
        echo isset($_POST[$name]) ? $_POST[$name] : '';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK302 - M. FARID PEBRIAN (2110817210015)</title>

    <!-- Penggunaan CSS untuk pengaturan ukuran font dan opacity -->
    <style>
            .real {width: 20px;}
            .tran {width: 20px; opacity: 0;}
    </style>
</head>
<body>

    <!-- Penggunaan form pada HTML dengan metode POST-->
    <form method="POST" action="#">
        Tinggi : <input type="text" name="tinggi" value='<?= ifFilled('tinggi') ?>'></br>
        Alamat Gambar : <input type="text" name="alamat" value='<?= ifFilled('alamat') ?>'></br>
        <input type="submit" name="cetak" value="Cetak">
    </form>   
</body>
</html>

<?php

    // Jika form disubmit, maka dieksekusi kode berikut.
    if ($_POST){

        // Pembuatan variabel dan
        // pemberian nilai pada variabel
        $tinggi = $_POST['tinggi'];
        $alamat = $_POST['alamat'];
        $i = 0;
        echo "<br>";

        // Penggunaan perulangan While
        // Jika nilai i lebih kecil dari nilai tinggi
        while($i < $tinggi){
            $j = 0;

            // Penggunaan perulangan While
            // Jika nilai j lebih kecil dari nilai i
            while($j < $i){
                echo "<img class=tran src='$alamat'>";
                $j++;
            }
            $j = 0;

            // Penggunaan perulangan While
            // Jika nilai j lebih kecil dari 
            // nilai tinggi dikurangi nilai i
            while ($j < $tinggi-$i) {
                echo "<img class=real src='$alamat'>";
                $j++;
            }
            $i++;
            echo "<br>";
        }
    }
?>