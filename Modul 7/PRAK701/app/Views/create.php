<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />

    <!-- Penggunaan CSS. -->
    <style>
    body {
        background-image: url('<?= base_url(); ?>bg.jpg');
        background-color: #bd5d38;
        font-family: "Saira Extra Condensed", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        color: white;
        display: grid;
        place-items: center;
        min-height: 100vh;
    }

    .backBtn {
        margin-top: 10px;
    }
    </style>
</head>

<body>
    <div class="container">

        <div class="col-12">
            <h2>Tambah Data Buku</h2>
        </div>

        <!-- Validasi data yang dimasukkan
        untuk menentukan apakah sudah sesuai 
        aturan atau tidak. -->
        <?php if (validation_list_errors()) : ?>
        <div class="alert alert-danger" style="width: fit-content;">
            <p><?= validation_list_errors(); ?></p>
        </div>
        <?php endif; ?>

        <!-- Formulir penambahan data. -->
        <div class="col-3">
            <form action="<?= base_url('tambahdata') ?>" method="post">
                <div class="mb-3">
                    <label for="nama" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul">
                </div>
                <div class="mb-3">
                    <label for="nim" class="form-label">Penulis</label>
                    <input type="text" class="form-control" id="penulis" name="penulis">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Penerbit</label>
                    <input type="text" class="form-control" id="penerbit" name="penerbit">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Tahun Terbit</label>
                    <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit">
                </div>
                <button type="submit" class="w-100 btn btn-primary">Tambah</button>
                <a href="<?= base_url('/') ?>" class="w-100 btn btn-danger backBtn">Kembali</a>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>
</body>

</html>