<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />

    <!-- Penggunaan CSS. -->
    <style>
    body {
        background-image: url('<?= base_url(); ?>bg.jpg');
        background-size: cover;
        font-family: "Saira Extra Condensed", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    }

    table {
        background-color: rgba(189, 93, 56, 0.8);
        border-radius: 10px;
        margin-top: 10px;
        padding-bottom: 5px;
    }

    table th,
    td {
        color: white;
    }

    table tbody tr:last-child td {
        border-bottom: none;
    }

    .userStyle {
        color: #bd5d38;
        text-transform: capitalize;
    }

    h2 {
        color: white;
    }

    .flex-container {
        display: flex;
        align-items: center;
    }

    .flex-container>* {
        margin-right: 10px;
    }

    .header-title {
        text-decoration: none;
        color: #bd5d38;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="pt-5 d-flex justify-content-between">
            <div class="col">
     
                    <!-- pemanggilan $username di session ini.  -->
                    <h1>Selamat Datang <span class="userStyle"><?= $username ?></span> di Website

                     <!-- Link untuk kembali/refresh beranda. -->
                    <a href="<?= base_url('/') ?>" class="header-title"> MyMangaList</h1></a>

                <p>Halaman ini berisi daftar buku komik. </p>
            </div>

            <!-- Tombol Logout. -->
            <div class="">
                <a href="<?= base_url('logout') ?>" class="btn btn-danger">Logout</a>
            </div>
        </div>

        <!-- Membuat daftar buku. -->
        <div class="col-12">
            <h2>Daftar Buku</h2>
            <div class="flex-container">
                <a class="btn btn-success" href="<?= base_url('tambahdata') ?>">Tambah Data</a>
                <form action="<?= base_url('search') ?>" method="GET" class="d-flex">
                    <div class="input-group" style="width: 300px;">
                        <input name="query" type="text" class="form-control"
                            placeholder="Judul/Penulis/Penerbit/Tahun Terbit">
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Perulangan foreach()
                    untuk memanggil memanggil
                    semua data yang diperlukan. -->
                    <?php $i = 0; ?>
                    <?php foreach ($data as $book) : ?>
                    <tr>
                        <td><?= $i+=1; ?></td>
                        <td><?= $book['judul'] ?></td>
                        <td><?= $book['penulis'] ?></td>
                        <td><?= $book['penerbit'] ?></td>
                        <td><?= $book['tahun_terbit'] ?></td>
                        <td>
                            <!-- Tombol edit data. -->
                            <a href="<?= base_url('editdata/'.$book['id']) ?>" class="btn btn-warning">Edit</a>

                            <!-- Tombol hapus data. -->
                            <form action="<?= base_url('/hapus/'.$book['id']) ?>" method="post"
                                style="display: inline-block;" onsubmit="return confirm('Yakin Hapus?')">
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger" type="submit">Hapus</button>
                            </form>

                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>
</body>

</html>