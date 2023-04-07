<?php
// Pembuatan variabel dan
// pemberian nilai pada variabel
$bintang = 0;

// Jika $_POST bintang diset
if(isset($_POST['bintang'])){
    $bintang = $_POST['bintang'];
}

// Jika $_POST tambah diset, maka:
// nilai bintang bertambah
if (isset($_POST['tambah'])){
    $bintang++;
}

// Jika $_POST kurang diset
// nilai bintang berkurang
if(isset($_POST['kurang'])){
    $bintang--;
}

// Fungsi pencetakan gambar bintang
function cetakBintang($bintang){ 

    // Pembuatan variabel dan
    // pemberian nilai pada variabel
    $gambarBintang='PRAK303Bintang.png';

    // Penggunaan perulangan For
    for ($i = 0; $i < $bintang; $i++){
        echo '<img src='.$gambarBintang.' width=75 height=75>';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK304 - M. FARID PEBRIAN (2110817210015)</title>
    
    <!-- Penggunaan CSS untuk pemberian inline-flex pada kelas flex -->
    <style>
            .flex {display: inline-flex;}
    </style>
</head>
<body>
<?php

// Jika nilai bintang sama dengan 0
if ($bintang == 0){
?>

    <!-- Penggunaan form pada HTML dengan metode POST-->
    <form  method="POST" action="#">
        Jumlah bintang <input type="text" name="bintang"></br>
        <input type="submit" name="submit" value="Submit">
    </form>  
    
<?php
}

// Jika nilai bintang tidak sama dengan 0
if ($bintang != 0){
?>

    <!-- Penggunaan form pada HTML dengan metode POST-->
    <form  method="POST" action="#">
        Jumlah bintang <?= $bintang ?><br><br><br>

        <!-- Penyimpanan nilai bintang -->
        <input type='hidden' name='bintang' value='<?= $bintang; ?>'/><br>

        <!-- Pemanggilan fungsi pencetakan gambar bintang -->
        <?= cetakBintang($bintang); ?><br>

        <!-- Penggunaan div kelas flex -->
        <!-- Untuk menghilangkan spasi antara tombol -->
        <div class=flex>
            <button name="tambah">Tambah</button>
            <button name="kurang">Kurang</button>
        </div>
    </form>  
<?php
}
?>
</body>
</html>