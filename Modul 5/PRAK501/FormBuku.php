<?php
// Mengakses fungsi dan data  
require "Koneksi.php";
require 'Model.php';
if (isset($_GET['id'])){
    $hasil = getBukuByID($conn, $_GET['id']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Buku</title>
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
        border-radius: 5px;
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
    input[type="text"], input[type="number"] {
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
    <button class="btn btn-danger" onclick="window.location.href='Buku.php';">
        Daftar Buku
    </button>
    </div>
    <div class="container">
    <!-- Form Edit atau Tambah Buku -->
    <form action="" method="post">
        <div class="h2-container bg-primary">
        <h2><?php echo isset($_GET['id']) ? "Update Buku" : "Tambah Buku"; ?></h2>
        </div>
        
        <?php if (isset($_GET['id'])){ ?>
            <input type="hidden" name="id_buku" value="<?= $hasil[0]['id_buku']?>">
        <?php } ?>
        <label for="judul_buku">Judul Buku</label><br>
        <input  type="text" name="judul_buku" value="<?php echo isset($_GET['id']) ? $hasil[0]['judul_buku'] : ""; ?>">
        <br>
        <label for="penulis">Penulis</label><br>
        <input type="text" name="penulis" value="<?php echo isset($_GET['id']) ? $hasil[0]['penulis'] : ""; ?>">
        <br>
        <label for="penerbit">Penerbit</label><br>
        <input type="text" name="penerbit" value="<?php echo isset($_GET['id']) ? $hasil[0]['penerbit'] : ""; ?>">
        <br>
        <label for="tahun_terbit">Tahun Terbit</label><br>
        <input type="number" name="tahun_terbit" value="<?php echo isset($_GET['id']) ? $hasil[0]['tahun_terbit'] : ""; ?>">
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
        insertBuku(
            $_POST["judul_buku"], 
            $_POST["penulis"], 
            $_POST["penerbit"], 
            $_POST["tahun_terbit"]);
    }

    if (isset($_POST['update'])) {
        updateBuku(
            $_POST["id_buku"],
            $_POST["judul_buku"], 
            $_POST["penulis"], 
            $_POST["penerbit"], 
            $_POST["tahun_terbit"]);
    }
?>