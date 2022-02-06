<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>

    <!-- get Boostrap 5 -->
    <link href="<?= BASEURL; ?>/css/bootstrap.css" rel="stylesheet" />

    <!-- style -->
    <link href="<?= BASEURL; ?>/css/app.css" rel="stylesheet" />
</head>

<body>
    <!-- nav -->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= BASEURL; ?>/home">PHP MVC </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>/home">Home</a>
                    <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
                    <a class="nav-link" href="<?= BASEURL; ?>/mahasiswa">Data Mahasiswa</a>
                </div>
            </div>
        </div>
    </nav>