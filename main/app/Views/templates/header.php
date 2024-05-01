<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="images/favicon.ico">

    <link rel="stylesheet" href="/css/custom_bootstrap/bootstrap.css" type="text/css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" type="text/css" />

    <title><?= esc($title) ?></title>

</head>

<body class="bg-pattern">

    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white border-bottom">
        <div class="container">

            <a class="navbar-brand d-flex" href="/">
                <img src="images/ic_brand_square.png" alt="" width="48" height="48" class="d-inline-block align-text-top">

                <div class="d-flex flex-column ms-3 justify-content-center align-items-start">
                    <span class="text-dark fs-6 fw-bold">Yayasan</span>
                    <span class="text-secondary fs-7">Al-Falah DDI Angkona</span>
                </div>

            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse text-center" id="navbarNavDropdown">

                <ul class="navbar-nav ms-auto me-lg-5">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo base_url(); ?>">Beranda</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdownMenuProfil" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profil
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuProfil">
                            <li><a class="dropdown-item" href="<?php echo base_url(); ?>sejarah_singkat"><i class="fa fa-xs fa-hourglass-end me-3 text-secondary"></i>Sejarah Singkat</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url(); ?>visi_misi"><i class="fa fa-xs fa-binoculars me-3 text-secondary"></i>Visi dan Misi</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url(); ?>struktur_organisasi"><i class="fa fa-xs fa-diagram-project me-3 text-secondary"></i>Struktur Organisasi</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?php echo base_url(); ?>galeri">Galeri</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?php echo base_url(); ?>berita">Berita</a>
                    </li>

                </ul>

                <button class="btn btn-dark my-4 my-lg-auto">Login</button>

            </div>

        </div>
    </nav>