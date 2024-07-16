<?php 
session_start();
if (empty($_SESSION['username']) || empty($_SESSION['level']) ) {
    echo "<script>alert('Maaf, Silahkan Login terlebih dahulu.');</script>";
    header("Location: index.php");
    exit();
}
include "koneksi.php";
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lAPORAN | <?= htmlspecialchars($_SESSION['level']) ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="icon" type="image/jpg/png" href="icon/slrt.jpg">

    <link rel="stylesheet" href="assets5/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets5/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="assets5/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="assets5/dist/css/adminlte.min.css">


    <link rel="stylesheet" href="assets5/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="assets5/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="assets5/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets5/dist/css/adminlte.min.css">

    
    <!--==================== PAGE CONTENT ====================-->
    <style>


/* Import Google font - Poppins */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

/* Desktop Devices */
@media only screen and (min-width: 1025px) {
    form {
        top: 150px; /* Default position for desktop */
        padding: 15px; /* Default padding for desktop */
        margin-bottom: 200px; /* Default margin bottom for desktop */
    }

    .input-field input {
        width: 445px; /* Default width for desktop */
    }

    .input-field label {
        position: absolute;
        top: 50%;
        left: 15px;
        transform: translateY(-50%);
        color: #000;
        font-size: 16px;
        font-weight: bold;
        pointer-events: none;
        transition: all 0.3s ease; /* Ensure smooth transition */
    }

    .input-field input:focus ~ label,
    .input-field input:valid ~ label {
        top: 0;
        left: 15px;
        font-size: 12px;
        background: #fff;
        padding: 0 2px;
        transform: translateY(-100%); /* Moves the label above the input field */
    }
}

form {
    position: relative;
    top: 150px;
    border: 1px solid #000;
    border-radius: 15px;
    padding: 15px;
    margin: 10px 10px auto;
    margin-bottom: 200px;
    align-items: center;
    justify-content: center;
}

.input-field input {
    min-width: 300px;
    height: 40px;
    border-radius: 6px;
    font-size: 16px;
    border: 1px solid #000;
    background: transparent;
    color: #000;
    outline: none;
    position: relative;
    align-items: center;
    justify-content: center;
}

.input-field {
    position: relative;
    align-items: center;
    justify-content: center;
}

.input-field label {
    position: absolute;
    top: 50%;
    left: 15px;
    transform: translateY(-50%);
    color: #000;
    font-size: 16px;
    pointer-events: none;
    transition: all 0.3s ease; /* Ensure smooth transition */
}

.input-field input:focus ~ label,
.input-field input:valid ~ label {
    top: 0;
    left: 15px;
    font-size: 18px;
    background: #fff;
    padding: 0 2px;
    transform: translateY(-50%); /* Moves the label above the input field */
}

input:focus {
    border: 2px solid #000;
}

header nav .nav__menu .nav__list .nav__item a {
  text-decoration: none;
  color: black;
  font-size: 25px;
}

</style>


 

</head>
<body>





    <!--==================== HEADER ====================-->
    <header class="header shadow" id="header">
        <nav class="nav container" style="left:20px;">
            
        <a href="layout/header.php" class="nav__logo" style="left: 20px;">
                <img src="icon/slrt.jpg" style="width: 50px; height: 50px; position: relative; top: 2px;">
            </a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="home_fasilitator.php?page=about_us" class="nav__link">About Us</a>
                    </li>
                    <li class="nav__item">
                        <a href="home_fasilitator.php?page=services" class="nav__link">Services</a>
                    </li>
                    <li class="nav__item">
                        <a href="backup_laporan.php?page=backup_laporan" class="nav__link">Backup Laporan</a>
                    </li>
                </ul>
                
                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>
            <div class="nav__actions" style="position: relative; left: 15px;">
                <!-- User Info -->
                <div class="name">
                  <b class="text-primary" style="position: relative; right: -15px; bottom: -8px;"><?= htmlspecialchars($_SESSION['nama_lengkap']) ?></b> <br>
                  <span class="text-danger" style="position: relative; right: -15px; bottom: -3px;"><?= htmlspecialchars($_SESSION['level']) ?></span>
                </div>
                <!-- Login button -->
                <i class="ri-user-line nav__login" id="login-btn" style="position : relative;font-size: 40px; top:5px;"></i>
                <!-- Toggle button -->
                <div class="nav__toggle" id="nav-toggle" style="position: relative; right: 15px; top:5px;">
                    <i class="ri-menu-line" style="font-size: 30px;"></i>
                </div>
            </div>
        </nav>


        <!-- <nav class="bg-white navbar-expand fixed-bottom kolom mx-1 text-dark" style="position: relative; top:5px;">
            <ul class="navbar-nav nav-justified w-100">
                <li class="nav-item" style="position: relative; top:3px;">
                    <a href="daftar_laporan.php?page=daftar_laporan" class="nav-link">LAPORAN</a>
                </li>
                <li class="nav-item" style="position: relative; top:3px;">
                    <a href="laporan_layanan.php?page=laporan_layanan" class="nav-link">LAYANAN</a>
                </li>
                <li class="nav-item" style="position: relative; top:3px;">
                    <a href="bbl.php?page=bbl" class="nav-link">BBL</a>
                </li>
                <li class="nav-item" style="position: relative; top:3px;">
                    <a href="tambahan.php?page=tambahan" class="nav-link">TAMBAHAN</a>
                </li>
            </ul>
        </nav> -->
    </header>

 
 

    <!--==================== LOGIN ====================-->
    <div class="login" id="login">
        <form action="" class="login__form">
            <h2 class="login__title">Ubah Password</h2>
            <div class="login__group">
                <div>
                    <input type="password" placeholder="Password Lama" name="pass_lama" class="login__input">
                </div>
                <div>
                    <input type="password" placeholder="Password Baru" name="pass_baru" class="login__input">
                </div>
                <div>
                    <input type="password" placeholder="Konfirmasi Password" name="konfirmasi_password" class="login__input">
                </div>
            </div>
            <div>
                <button type="submit" class="login__button btn btn-primary">Simpan</button>
                <a href="logout.php" class="btn btn-danger text-white">Keluar</a>
            </div>
        </form>
        <i class="ri-close-line login__close" id="login-close"></i>
    </div>


