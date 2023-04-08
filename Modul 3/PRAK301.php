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
    <title>PRAK301 - M. FARID PEBRIAN (2110817210015)</title>

    <!-- Penggunaan CSS untuk pengaturan warna font -->
    <style>
            .red {color: red;}
            .green {color: green;}
    </style>
</head>
<body>

    <!-- Penggunaan form pada HTML dengan metode POST-->
    <form method="POST" action="#" >
        Jumlah Peserta : <input type="text" name="nilai" value='<?= ifFilled('nilai') ?>'></br>
        <input type="submit" name="cetak" value="Cetak">
    </form>    
</body>
</html>

<?php

    // Jika form disubmit, maka dieksekusi kode berikut.
    if ($_POST){

        // Pembuatan variabel dan
        // pemberian nilai pada variabel
        $nilai = $_POST['nilai'];
        $i = 1;
        
        // Penggunaan perulangan While
        // Jika nilai i lebih kecil atau
        // sama dengan nilai dari
        // variabel nilai
        while ($i <= $nilai){

            // Jika nilai tidak habis dibagi 2
            if ($i % 2 != 0){
                echo "<h2 class=red>Peserta ke-$i</br>";

            // Jika tidak
            } else {
                echo "<h2 class=green>Peserta ke-$i</br>";
            }
            $i++;
        }
    }
?>
