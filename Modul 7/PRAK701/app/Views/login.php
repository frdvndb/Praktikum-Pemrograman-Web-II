<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    
    <!-- Penggunaan CSS. -->
    <style>
    body {
        background-image: url('<?= base_url(); ?>bg.jpg');
        background-color: #bd5d38;
        background-repeat: no-repeat;
        background-size: cover;
        font-family: "Saira Extra Condensed", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        display: grid;
        place-items: center;
        min-height: 100vh;
    }

    .textStyle {
        color: #bd5d38
    }

    .form-floating {
        margin-top: 10px;
    }

    .sign-upStyle {
        text-decoration: none;
        color: #bd5d38;
    }

    .brand-name {
        color: #198754;
    }
    </style>
</head>

<body>
    <div class="container w-50 ">
        <main class="form-signin w-100 m-auto text-center">
            <!-- Formulir Login. -->
            <form action="<?= base_url('login') ?>" method="POST">
                <h1 class="textStyle mb-3 fw-normal">Selamat Datang di Website <span
                        class="brand-name">MyMangaList!</span></h1>

                <!-- Validasi data yang dimasukkan
                untuk menentukan apakah sudah sesuai 
                aturan atau tidak. -->
                <?php if (session()->get('pesan')) : ?>
                    <p class="alert alert-danger"><?= session()->get('pesan'); ?></p>
                <?php endif;?>
                <?php if (session()->get('error')) : ?>
                    <p class="alert alert-danger"><?= session()->get('error'); ?></p>
                <?php endif;?>
                <?php if (validation_list_errors()) : ?>
                    <div class="alert alert-danger">
                        <p><?= validation_list_errors(); ?></p>
                    </div>
                <?php endif; ?>
                
                <div class="form-floating">
                    <input name="email" type="email" class="form-control" id="floatingInput"
                        placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input name="password" type="password" class="form-control" id="floatingPassword"
                        placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>

                <!-- Tombol Login. -->
                <button class="w-100 mt-2 btn btn-lg btn-primary" type="submit">Sign in</button>

                <!-- Link untuk Register. -->
                <p class="fw-bold" style="text-align: left;">Belum punya akun?
                    <a href="<?= base_url('register') ?>" class="sign-upStyle">Sign up</a>
                </p>
            </form>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>