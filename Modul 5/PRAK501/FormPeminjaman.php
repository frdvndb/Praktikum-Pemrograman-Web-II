<?php 
// Mengakses fungsi dan data  
require "Koneksi.php";
require 'Model.php';
if (isset($_GET['id'])){
    $hasil = getPeminjamanByID($conn, $_GET['id']);
}
$dataMember = getMember($conn);
$dataBuku = getBuku($conn);
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Peminjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<!-- Penggunaan CSS -->
<style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: fit-content;
        width: fit-content;
        margin-top: 40px;
        margin-bottom: 40px;
        background-color: lightgray;
        padding: 10px;
    }
    .h2-container{
        padding: 5px;
        border-radius: 5px;
        color: white;
        margin-bottom: 15px;
    }
    .custom-btn {
        margin-top: 5px;
    }
    .custom-btn2 {
        margin: 10px;
    }
    input[type="date"], select {
        width: 100%;
        box-sizing: border-box;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
</style>
</head>
<body>
    <div class= "custom-btn2">
        <button class="btn btn-success" onclick="window.location.href='Beranda.php';">
            Beranda
        </button>
        <button class="btn btn-danger" onclick="window.location.href='Peminjaman.php';">
            Daftar Peminjaman
        </button>
    </div>
    <div class="container">
    <form action="" method="post">
        <div class="h2-container bg-primary">
            <h2><?php echo isset($_GET['id']) ? "Update Peminjaman" : "Tambah Peminjaman"; ?></h2>
        </div>
        <?php if (isset($_GET['id'])){ ?>
            <input type="hidden" name="id_peminjaman" value="<?= $hasil[0]['id_peminjaman']?>">
        <?php } ?>
        
        <label for="tgl_pinjam">Tanggal Peminjaman</label><br>
        <input  type="date" name="tgl_pinjam" value="<?php echo isset($_GET['id']) ? $hasil[0]['tgl_pinjam'] : ""; ?>">
        <br>
        <label for="tgl_kembali">Tanggal Pengembalian</label><br>
        <input type="date" name="tgl_kembali" value="<?php echo isset($_GET['id']) ? $hasil[0]['tgl_kembali'] : ""; ?>">
        <br>
        
        <label for="id_buku">Judul Buku</label><br>
        <select id="id_buku" name="id_buku">
        <?php 
            if (!isset($_GET['id'])) {?>
                <option disabled selected></option> <?php
            }
            foreach ($dataBuku as $barisBuku) {
            $selected = '';
            if (isset($_GET['id']) && $hasil[0]['id_buku'] == $barisBuku['id_buku']) {
                $selected = 'selected';
            } 
        ?>
        <option value="<?php echo $barisBuku['id_buku']; ?>" <?php echo $selected; ?>><?php echo $barisBuku['judul_buku'];?></option>
        <?php } ?>
        </select>
        <br>

        <label for="id_member">Nama Peminjam</label><br>
        <select id="id_member" name="id_member">
        <?php 
            if (!isset($_GET['id'])) {?>
                <option disabled selected></option> <?php
            }
            foreach ($dataMember as $barisMember) {
            $selected = '';
            if (isset($_GET['id']) && $hasil[0]['id_member'] == $barisMember['id_member']) {
                $selected = 'selected';
            }
        ?>
        <option value="<?php echo $barisMember['id_member']; ?>" <?php echo $selected; ?>><?php echo $barisMember['nama_member'];?></option>
        <?php } ?>
        </select>

        <br>
        <div class="d-grid gap-2 mx-auto">
        <?php if (isset($_GET['id'])){ ?>
            <button class="btn btn-primary" type="submit" name="update">Update</button>
        <?php } ?>

        <?php if (!isset($_GET['id'])){ ?>
                <button class="btn btn-primary custom-btn" type="submit" name="buat">Buat</button>
        <?php } ?>
        </div>
        
    </form>
    </div>
</body>
</html>

<!-- Pengkondisian untuk memilih -->
<!-- apakah data akan ditambah -->
<!-- atau diupdate. -->
<?php   
    if (isset($_POST['buat'])) {
        insertPeminjaman(
            $_POST["tgl_pinjam"], 
            $_POST["tgl_kembali"], 
            $_POST["id_buku"], 
            $_POST["id_member"]);
    }

    if (isset($_POST['update'])) {
        updatePeminjaman(
            $_POST["id_peminjaman"],
            $_POST["tgl_pinjam"], 
            $_POST["tgl_kembali"], 
            $_POST["id_buku"], 
            $_POST["id_member"]);
    }
?>