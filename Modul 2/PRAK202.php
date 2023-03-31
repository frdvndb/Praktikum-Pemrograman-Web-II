<?php 
    // Pemberian nilai awal untuk variabel
    $identitas = [NULL,NULL,NULL];
    $namaError = $nimError = $kelaminError = '';

    // Jika form disubmit, maka akan dieksekusi:
    if (isset($_POST['submit'])){         
        // Jika form kosong, maka ditampilkan pemberitahuan di layar
        // dengan menggunakan fungsi echo            
        if (empty($_POST['nama'])){$namaError = 'nama tidak boleh kosong';} else {$identitas[0] = $_POST['nama'];}
        if (empty($_POST['nim'])){$nimError = 'nim tidak boleh kosong';} else {$identitas[1] = $_POST['nim'];}
        if (empty($_POST['kelamin'])){$kelaminError = 'jenis kelamin tidak boleh kosong';} else {$identitas[2] = $_POST['kelamin'];}
    }
    
    // Fungsi untuk pengecekan dan menyimpan nilai text
    // yang sudah dimasukkan sebelumnya pada form
    function ifFilled($name){
        echo isset($_POST[$name]) ? $_POST[$name] : '';
    }

    // Fungsi untuk pengecekan dan menyimpan nilai radio
    // yang sudah dimasukkan sebelumnya pada form
    function ifChecked($name, $value){
        if (isset($_POST[$name]) && $_POST[$name]==$value) echo "checked";
}
?>
<html>
    <head>

        <!-- Dibuat oleh: -->
	    <title>PRAK202 - M. Farid Pebrian (2110817210015)</title>

        <!-- Penggunaan CSS untuk mengatur ukuran font <b> -->
        <!-- dan mengatur warna font <asterisk> -->
        <style>
            b {font-size:25px;}
            .asterisk {color: red;}
        </style>
    </head>
    <body>

	    <!-- Penggunaan form pada HTML dengan metode POST-->
        <form method='post' action='#'>
            Nama: <input type='text' name='nama' 
            value='<?= ifFilled('nama') ?>'>
            <span class="asterisk">*<?= $namaError;?></span><br>
            NIM: <input type='text' name='nim' 
            value='<?= ifFilled('nim') ?>'>
            <span class="asterisk">*<?= $nimError;?></span><br>
            Jenis Kelamin:<span class="asterisk">*<?= $kelaminError;?></span><br> 
            <input type='radio' name='kelamin' 
            <?= ifChecked('kelamin', 'Laki-laki');?> 
            value = 'Laki-laki'> Laki-Laki<br>
            <input type='radio' name='kelamin' 
            <?= ifChecked('kelamin', 'Perempuan');?> 
            value = 'Perempuan'> Perempuan<br>
            <input type='submit' name='submit' value='Submit'><br>
        </form>
        <?php

            // Pengkondisian jika nilai array tidak sama dengan nol
            if  ($identitas[0] != NULL && $identitas[1] != NULL && $identitas[2] != NULL ){
                
                // Penggunaan fungsi echo untuk menampilkan nilai pada layar
                // dan fungsi foreach untuk perulangan nilai array
                echo "<b>Output:</b><br><br>";
                foreach($identitas as $value){
                    echo "$value<br>";
                } 
            }        
        ?>
    </body>
</html>