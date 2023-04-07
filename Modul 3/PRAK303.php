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
    <title>PRAK303 - M. FARID PEBRIAN (2110817210015)</title>

    <!-- Penggunaan CSS untuk pemberian spasi setelah kelas spaces -->
    <style>
            .spaces::after {content:" ";}
    </style>
</head>
<body>

    <!-- Penggunaan form pada HTML dengan metode POST-->
    <form  method="POST" action="#">
        Batas Bawah : <input type="text" name="bawah" value='<?= ifFilled('bawah') ?>'></br>
        Batas Atas : <input type="text" name="atas" value='<?= ifFilled('atas') ?>'></br>
        <input type="submit" name="cetak" value="Cetak">
    </form>
</body>
</html>

<?php

    // Jika form disubmit, maka dieksekusi kode berikut.
    if ($_POST){
        echo "<br>";

        // Pembuatan variabel dan
        // pemberian nilai pada variabel
        $bawah = $_POST['bawah'];
        $atas = $_POST['atas'];
        $i = $bawah;

        // Penggunaan perulangan Do-While
        do {

            // Jika nilai i+7 habis dibagi 5
            if (($i + 7)%5 == 0){
                echo "<img src='Bintang.png' width='15px' height='15px'> ";

            // Jika tidak
            } else {
                echo $i;
            }
            
            // Penggunaan span
            echo "<span class=spaces></span>";
            $i++;
        } while($i <= $atas);
    }
?>