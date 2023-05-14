<?php 
// Mengakses fungsi dan data  
require "Koneksi.php";
require 'Model.php';
$hasil = getMember($conn);

// Jika ID diset, maka memanggil deleteMember()
if (isset($_GET['id'])){
    deleteMember($_GET["id"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Member Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- Penggunaan CSS -->
    <style>
        h2 {text-align: center;}
        .window1 {padding: 20px;}
    </style>
</head>
<body>
    <div class="window1">
    <h2> Daftar Member Perpustakaan </h2>
    <button class="btn btn-success" onclick="window.location.href='Beranda.php';">
        Beranda
    </button>
    <button class="btn btn-primary" onclick="window.location.href='FormMember.php';">
        Tambah Data
    </button> 
    <p></p>
    <table class="table">
         <tr class="table-primary">
            <th>Nama</th>
            <th>Nomor</th>
            <th>Alamat</th>
            <th>Tanggal Daftar</th>
            <th>Tanggal Terakhir Bayar</th>
            <th>Aksi</th>
        </tr>
        <?php  
        // Foreach() menampilkan data pada tabel 
        foreach($hasil as $baris){
            echo "<tr>";
            echo "<td>".$baris['nama_member']."</td>";
            echo "<td>".$baris['nomor_member']."</td>";
            echo "<td>".$baris['alamat']."</td>";
            echo "<td>".$baris['tgl_mendaftar']."</td>";
            echo "<td>".$baris['tgl_terakhir_bayar']."</td>";
            ?>
            <td>
                <!-- Tombol menuju halaman edit -->
                <button class="btn btn-success" onclick="location.href='FormMember.php?id=<?php echo $baris['id_member'] ?>'">Edit</button>
                |
                <!-- Tombol menghapus data -->
                <button class="btn btn-danger" onclick="if(confirm('Yakin Dihapus?')) { location.href='Member.php?id=<?php echo $baris['id_member'] ?>' }">Hapus</button>
            </td><?php
        }
        ?>
    </table>
    </div>
</body>
</html>