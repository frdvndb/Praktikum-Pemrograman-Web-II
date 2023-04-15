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
    <title>PRAK401 - M. FARID PEBRIAN (2110817210015)</title>

    <!-- Penggunaan CSS untuk pengaturan tabel-->
    <style>
        table, td {
            border: 1px solid;
            border-collapse: collapse;
            margin-top: 10px;
            padding: 5px;
        }
    </style>
</head>
<body>

    <!-- Penggunaan form pada HTML dengan metode POST-->
    <form method="post" action="#">
        Panjang: <input type = 'text' name = 'panjang' value='<?= ifFilled('panjang') ?>'><br>
        Lebar: <input type = 'text' name = 'lebar' value='<?= ifFilled('lebar') ?>'><br>
        Nilai: <input type = 'text' name = 'nilai' value='<?= ifFilled('nilai') ?>'><br>
        <input type="submit" name="cetak" value="Cetak">
    </form>

    <?php

        // Jika form disubmit, maka dieksekusi kode berikut.
        if ($_POST){
            echo "<br>";

            // Pembuatan variabel dan
            // pemberian nilai pada variabel
            $panjang = $_POST['panjang'];
            $lebar = $_POST['lebar'];
            $nilai = $_POST['nilai'];

            // Penggunaan fungsi explode() untuk:
            // membagi nilai dari setiap spasi
            // agar dimasukkan ke array.
            $nilaiArray = explode(" ", $nilai);

            // Pengkondisian jika panjang*lebar memiliki
            // nilai yang sama dengan jumlah array.
            // Fungsi count() digunakan untuk menentukan
            // jumlah array tersebut.
            if ($panjang * $lebar == count($nilaiArray)){
                $indeks = 0;

                // Perulangan for() untuk:
                // memasukkan nilai array 1 dimensi ke
                // array multi-dimensi.
                for ($i = 0; $i < $panjang; $i++) { 
                    for ($j = 0; $j < $lebar; $j++) { 
                        $matrik[$i][$j] = $nilaiArray[$indeks];
                        $indeks++;
                    }
                }

                // Pembuatan tabel
                echo "<table>";

                // Perulangan for() untuk:
                // menampilkan nilai array multi-dimensi
                // ke dalam tabel
                for ($i = 0; $i < $panjang; $i++) { 
                    echo "<tr>";
                    for ($j = 0; $j < $lebar; $j++) { 
                        echo "<td>".$matrik[$i][$j]."</td>";
                    }
                    echo "</tr>";
                }
            
            // Jika tidak sesuai pengkondisian, maka:
            } else {
                echo "Panjang nilai tidak sesuai dengan ukuran matriks";
            }
        }
    ?>
</body>
</html>