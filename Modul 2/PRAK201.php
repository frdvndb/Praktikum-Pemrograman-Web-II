<?php 
    // Fungsi untuk pengecekan dan menyimpan nilai text
    // yang sudah dimasukkan sebelumnya pada form
    function ifFilled($name){
        echo isset($_POST[$name]) ? $_POST[$name] : '';
    }
?>

<html>
    <head>
        <!-- Dibuat oleh: -->
	    <title>PRAK201 - M. Farid Pebrian (2110817210015)</title>
        
        <!-- Penggunaan CSS untuk mengatur ukuran font <b> -->
        <style>
            b {font-size:25px;}
        </style>
    </head>
    <body>
        
	    <!-- Penggunaan form pada HTML dengan metode POST-->
        <form method='post' action='#'>
            Nama: 1 <input type='text' name='nama1' 
            value='<?= ifFilled('nama1') ?>'><br>
            Nama: 2 <input type='text' name='nama2' 
            value='<?= ifFilled('nama2') ?>'><br>
            Nama: 3 <input type='text' name='nama3' 
            value='<?= ifFilled('nama3') ?>'><br>
            <input type='submit' name='urutkan' value='Urutkan'><br>
        </form>
        <?php

        // Jika form disubmit, maka dieksekusi kode berikut.
        if ($_POST){  

            // Pembuatan array sebelum dan sesudah diurutkan       
            $awal = [$_POST['nama1'], $_POST['nama2'], $_POST['nama3']];
            $akhir = [];

            // Pengkondisian untuk mengurutkan nilai array
            if ($awal[0] < $awal[1] && $awal[0] < $awal[2]) {
                if ($awal[1] < $awal[2]) 
                {$akhir = $awal;} 
                else 
                {$akhir = [$awal[0], $awal[2], $awal[1]];}
            } else if ($awal[1] < $awal[0] && $awal[1] < $awal[2]) {
                if ($awal[0] < $awal[2]) 
                {$akhir = [$awal[1], $awal[0], $awal[2]];} 
                else 
                {$akhir = [$awal[1], $awal[2], $awal[0]];}
            } else {
                if ($awal[0] < $awal[1]) 
                {$akhir = [$awal[2], $awal[0], $awal[1]];} 
                else 
                {$akhir = [$awal[2], $awal[1], $awal[0]];}
            }

            // Penggunaan fungsi echo untuk menampilkan nilai
            // pada layar
            // dan fungsi foreach untuk perulangan nilai array
            echo "<b>Output:</b><br><br>";
            foreach($akhir as $value){
                echo "$value<br>";
            }
        }
        ?>
    </body>
</html>