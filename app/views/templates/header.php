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

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- <nav class="navbar navbar-expand-lg bg-dark text-uppercase fixed-top" id="Navbar">
        <div class="container">
            <a class="navbar-brand" href="<?= BASEURL; ?>/home">MY MVC</a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1">></li>
                    <li class="nav-item mx-0 mx-lg-1">></li>
                    <li class="nav-item mx-0 mx-lg-1">></li>
                    <li class="nav-item mx-0 mx-lg-1">></li>
                </ul>
            </div>
        </div>
    </nav> -->

    <nav class="navbar navbar-expand-lg bg-dark text-uppercase fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= BASEURL; ?>/home">PHP MVC</a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?= BASEURL; ?>/home">Home</a>
                    <a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?= BASEURL; ?>/about">About</a>
                    <a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?= BASEURL; ?>/mahasiswa">Mahasiswa</a>
                    <a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?= BASEURL; ?>/contact">Contact</a>
                </div>
            </div>
        </div>
    </nav>