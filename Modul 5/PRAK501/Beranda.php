<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- Penggunaan CSS -->
    <style>
        .container {           
            align-items: center;
            height: 100vh;
            background-color: gainsboro;
        }
        h2 {
            text-align: center;
            padding-top: 40px;
            margin-bottom: 30px;
        }
        .button-box {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color:coral;
            border-radius: 5px;
            padding: 10px;
            width: fit-content;
            margin: 10px auto;
            margin-top: 10px;
        }
        .custom-btn {
            background-color: green;
            color: white;
            border: none;
        }

        .custom-btn:hover {
            background-color: darkgreen;
        }
        .btn-width {
            width: 180px;
        }

    </style>
</head>
<!-- Tombol menuju berbagai halaman -->
<body>
    <div class="container">
        <h2>Sistem Informasi Perpustakaan</h2>
        <div class="button-box">
            <div class="d-grid gap-2 mx-auto">
                <a href="Member.php"><button class="btn btn-primary custom-btn btn-width" type="button">Daftar Member</button></a>
                <a href="Buku.php"><button class="btn btn-primary custom-btn btn-width" type="button">Daftar Buku</button></a>
                <a href="Peminjaman.php"><button class="btn btn-primary custom-btn btn-width" type="button">Daftar Peminjaman</button></a>
            </div>    
        </div>
        <div class="button-box">
            <div class="d-grid gap-2 mx-auto">
                <a href="FormMember.php"><button class="btn btn-primary custom-btn btn-width" type="button">Tambah Member</button></a>
                <a href="FormBuku.php"><button class="btn btn-primary custom-btn btn-width" type="button">Tambah Buku</button></a>
                <a href="FormPeminjaman.php"><button class="btn btn-primary custom-btn btn-width" type="button">Tambah Peminjaman</button></a>
            </div>    
        </div>
    </div>
</body>
</html>