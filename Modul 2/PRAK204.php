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
	    <title>PRAK204 - M. Farid Pebrian (2110817210015)</title>

        <!-- Penggunaan CSS untuk mengatur ukuran font <b> -->
        <style>
            b {font-size:25px;}
        </style>
    </head>
    <body>

	    <!-- Penggunaan form pada HTML dengan metode POST-->
        <form method='post' action='#'>
            Nilai: <input type='text' name='nilai' value='<?= ifFilled('nilai') ?>'><br>
            <input type='submit' name='konversi' value='Konversi'><br>
        </form>
        <?php

            // Jika form disubmit, maka dilakukan:
            // Pengkondisian nilai yang akan digunakan
            if ($_POST){            
                $nilai= $_POST['nilai'];    
                if ($nilai == 0)
                {echo '<b> Hasil: Nol';}
                else if ($nilai > 0 && $nilai < 10)
                {echo '<b> Hasil: Satuan';}
                else if ($nilai >= 11 && $nilai < 20)
                {echo '<b> Hasil: Belasan';}
                else if ($nilai >= 10 && $nilai < 100)
                {echo '<b> Hasil: Puluhan';}
                else if ($nilai >= 100 && $nilai < 1000)
                {echo '<b> Hasil: Ratusan';}
                else if ($nilai >= 1000)
                {echo '<b> Hasil: Anda Menginput Melebihi Limit Bilangan';}
            }
        ?>
    </body>
</html>