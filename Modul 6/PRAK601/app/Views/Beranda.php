<!DOCTYPE html>
<html>
<head>
    <title>Beranda</title>

    <!-- Penggunaan tautan dan script untuk mengimpor gaya dan ikon eksternal -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Penggunaan CSS -->
    <style>
        .sidebar {
            font-family: "Saira Extra Condensed", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #bd5d38;            
            padding: 20px;
            font-size: 1.5rem;
            text-align: center;
        }

        .sidebar a {
            color: #f8c6ac;
        }

        .sidebar a:hover {
            color: #eed6cd;
        }

        .content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: left;
            height: 100vh;
            padding: 20px;
            background-image: url(<?= $gambarBackground ?>);
            background-size: cover;
            background-position: center;
            text-shadow: 4px 4px 8px rgba(0, 0, 0, 0.5);
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
        }

        .text-primary {
            --bs-primary-rgb: 189, 93, 56;
            --bs-text-opacity: 1;
            color: rgba(var(--bs-primary-rgb), var(--bs-text-opacity)) !important;
        }

        .img-profile {
            border: 10px solid #ca7d60;
            border-radius: 50%;
            width: 150px;
            height: 150px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Bagian sidebar -->
            <div class="col-md-2 sidebar">
            <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?= $gambarProfil ?>" alt="..." /></span>
                <ul class="nav flex-column mt-4">
                <li class="nav-item"><a class="nav-link" href="<?= base_url('beranda'); ?>">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('profil'); ?>">Profil</a></li>
                </ul>
            </div>
            <!-- Bagian konten -->
            <div class="col-md-10 content">
                <h1>Selamat <span class="text-primary">Datang!</span></h1>
                <?php
                    echo "<p>$nama<br>NIM. $nim</p>";
                ?>
                <div class="d-flex gap-2 mb-3">
                    <a href="<?= $github ?>" class="btn btn-dark" role="button">
                        <i class="bi bi-github"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>