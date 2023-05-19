<!DOCTYPE html>
<html>
<head>
    <title>Profil</title>

    <!-- Penggunaan tautan dan script untuk mengimpor gaya dan ikon eksternal -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Penggunaan CSS -->
    <style>
        :root {
            --bs-primary-rgb: 189, 93, 56;
        }

        body {
            background-image: url(<?= $gambarBackground ?>);
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            width: 40%;
        }

        .sidebar {
            font-family: "Saira Extra Condensed", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            background-color: #bd5d38;
            padding: 20px;
            font-size: 1.5rem;
            text-align: center;
            width: 200px;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
        }

        .sidebar a {
            color: #f8c6ac;
            margin-top: -10px;
        }

        .sidebar a:hover {
            color: #eed6cd;
        }

        .sidebar span {
            margin-bottom: -10px;
        }

        .content {
            padding: 20px;
            flex-grow: 1;
            background-color: #eed6cd;
            border-radius: 10px;
            font-family: "Saira Extra Condensed", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            text-transform: uppercase;
            font-weight: 500;
            font-size: 1.5rem;
        }

        h1 {
            margin-top: 0;
            margin-bottom: 0.5rem;
            font-weight: 700;
            line-height: 1.2;
            color: #343a40;
            font-size: calc(1.725rem + 5.7vw);
            text-align: center;
        }

        .text-primary {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-primary-rgb), var(--bs-text-opacity)) !important;
        }

        .img-profile {
            border: 10px solid #ca7d60;
            border-radius: 50%;
            width: 150px;
            height: 150px; 
        }
        table {
            margin-bottom: 20px;
            margin-left: auto; 
            margin-right: auto;
        }
        table td:first-child {
            width: 40%;
            font-weight: bold;
            color: #343a40;
        }
        table td:nth-child(2){
            border-bottom:1px solid #bd5d38;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Bagian sidebar -->
        <div class="sidebar">
            <span class="d-none d-lg-block">
                <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?= $gambarProfil ?>" alt="..." />
            </span>
            <ul class="nav flex-column mt-4">
                <li class="nav-item"><a class="nav-link" href="<?= base_url('beranda'); ?>">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('profil'); ?>">Profil</a></li>
            </ul>
        </div>

        <!-- Bagian konten -->
        <div class="content">
            <h1>Bio<span class="text-primary">data</span></h1>
            <!-- Penggunaan tabel -->
            <table>
                <tr>
                    <td>Nama</td>
                    <td><?= $nama ?></td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td><?= $nim ?></td>
                </tr>
                <tr>
                    <td>Prodi</td>
                    <td><?= $prodi ?></td>
                </tr>
                <tr>
                    <td>Hobi</td>
                    <td><?= $hobi ?></td>
                </tr>
                <tr>
                    <td>Skill</td>
                    <td><?= $skill ?></td>
                </tr>
            </table>
            <div class="d-flex gap-2 mb-3 justify-content-center">
                <a href="<?= $github ?>" class="btn btn-dark" role="button">
                    <i class="bi bi-github"></i>
                </a>
            </div>
        </div>
    </div>
</body>
</html>