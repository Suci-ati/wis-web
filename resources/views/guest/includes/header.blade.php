<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>PWK Web page</title>

    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/aos/dist/aos.css/aos.css') }}" />
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <div class="container-scroller">
        <div class="main-panel">
            <!-- partial:partials/_navbar.html -->
            <header id="header">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="navbar-top">
                            <div class="d-flex justify-content-between align-items-center">
                                <ul></ul>
                                <ul class="navbar-top-right-menu">
                                    <li class="nav-item">
                                        <a href="/login" class="nav-link btn btn-warning px-5">Login</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="navbar-bottom">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <a class="navbar-brand" href="#">
                                        <h1 class="text-white">DEPT. PWK</h1>
                                    </a>
                                </div>
                                <div>
                                    <button class="navbar-toggler" type="button" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="navbar-collapse justify-content-center collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav d-lg-flex justify-content-between align-items-center">
                                            <li>
                                                <button class="navbar-close">
                                                    <i class="mdi mdi-close"></i>
                                                </button>
                                            </li>
                                            <li class="nav-item active">
                                                <a class="nav-link" href="/">Beranda</a>
                                            </li>
                                            <li class="nav-item">
                                                <div class="dropdown">
                                                    <a class="nav-link dropdown-toggle" href="#" role="button" id="submenu-profil" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Profil
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="submenu-profil">
                                                        <a class="dropdown-item" href="/views/vmts">VMTS Departemen</a>
                                                        <a class="dropdown-item" href="/views/sejarah-singkat">Sejarah Singkat</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <div class="dropdown">
                                                    <a class="nav-link dropdown-toggle" href="#" role="button" id="submenu-keanggotaan" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Keanggotaan
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="submenu-keanggotaan">
                                                        <a class="dropdown-item" href="/views/dosen">Dosen</a>
                                                        <a class="dropdown-item" href="/views/staff">Staff Administrasi dan Laboratorium</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="/views/berita">Berita</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="/views/kontak">Kontak</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>