<?php 
// Mengakses fungsi dan data  
require "Koneksi.php";
require 'Model.php';
if (isset($_GET['id'])){
    $hasil = getMemberByID($conn, $_GET['id']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Member</title>
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
    input[type="text"], input[type="date"], input[type="datetime-local"] {
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
        <button class="btn btn-danger" onclick="window.location.href='Member.php';">
            Daftar Member
        </button>
    </div>
    <div class="container">
    <!-- Form Edit atau Tambah Member -->
    <form action="" method="post">
        <div class="h2-container bg-primary">
            <h2><?php echo isset($_GET['id']) ? "Update Member" : "Tambah Member"; ?></h2>
        </div>
        <?php if (isset($_GET['id'])){ ?>
            <input type="hidden" name="id_member" value="<?= $hasil[0]['id_member']?>">
        <?php } ?>

        <label for="nama_member">Nama</label><br>
        <input  type="text" name="nama_member" value="<?php echo isset($_GET['id']) ? $hasil[0]['nama_member'] : ""; ?>">
        <br>
        <label for="nomor_member">Nomor</label><br>
        <input type="text" name="nomor_member" value="<?php echo isset($_GET['id']) ? $hasil[0]['nomor_member'] : ""; ?>">
        <br>
        <label for="alamat">Alamat</label><br>
        <input type="text" name="alamat" value="<?php echo isset($_GET['id']) ? $hasil[0]['alamat'] : ""; ?>">
        <br>
        <label for="tgl_mendaftar">Tanggal Mendaftar</label><br>
        <input type="datetime-local" name="tgl_mendaftar" value="<?php echo isset($_GET['id']) ? $hasil[0]['tgl_mendaftar'] : ""; ?>">
        <br>
        <label for="tgl_terakhir_bayar">Tanggal Terakhir Bayar</label><br>
        <input type="date" name="tgl_terakhir_bayar"value="<?php echo isset($_GET['id']) ? $hasil[0]['tgl_terakhir_bayar'] : ""; ?>">
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
        $nama_member = $_POST["nama_member"];
        $nomor_member = $_POST["nomor_member"];
        $alamat = $_POST["alamat"];
        $tgl_mendaftar = $_POST["tgl_mendaftar"];
        $tgl_terakhir_bayar	 = $_POST["tgl_terakhir_bayar"];
        insertMember($nama_member, $nomor_member, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar);
    }

    if (isset($_POST['update'])) {
        $id_member = $_POST["id_member"];
        $nama_member = $_POST["nama_member"];
        $nomor_member = $_POST["nomor_member"];
        $alamat = $_POST["alamat"];
        $tgl_mendaftar = $_POST["tgl_mendaftar"];
        $tgl_terakhir_bayar	 = $_POST["tgl_terakhir_bayar"];
        updateMember($id_member, $nama_member, $nomor_member, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar);
    }
?>