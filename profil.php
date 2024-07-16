<?php 
session_start();
if (empty($_SESSION['username']) || empty($_SESSION['level']) || empty($_SESSION['area_tugas'])) {
    echo "<script>alert('Maaf, Silahkan Login terlebih dahulu.');</script>";
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil | <?= htmlspecialchars($_SESSION['level']) ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="icon" type="image/jpg/png" href="icon/slrt.jpg">
</head>
<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="home_fasilitator.php" class="nav__logo">
                <img src="icon/slrt.jpg" style="width: 50px; height: 50px; position: relative; top: 2px;">
            </a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="home_fasilitator.php?page=home_fasilitator" class="nav__link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="home_fasilitator.php?page=about_us" class="nav__link">About Us</a>
                    </li>
                    <li class="nav__item">
                        <a href="home_fasilitator.php?page=services" class="nav__link">Services</a>
                    </li>
                </ul>
                <!-- Close button -->
                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>
            <div class="nav__actions" style="position: relative; top: 1px;">
                <!-- User Info -->
                <div class="name">
                  <b class="text-primary" style="position: relative; right: -15px; bottom: -8px;"><?= htmlspecialchars($_SESSION['nama_lengkap']) ?></b> <br>
                  <span class="text-danger" style="position: relative; right: -15px; bottom: -3px;"><?= htmlspecialchars($_SESSION['level']) ?></span>
                </div>
                <!-- Login button -->
                <i class="ri-user-line nav__login" id="login-btn" style="font-size: 30px;"></i>
                <!-- Toggle button -->
                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line" style="font-size: 30px;"></i>
                </div>
            </div>
        </nav>
    </header>

    <!--==================== SEARCH ====================-->
    <!-- <div class="search" id="search">
        <form action="" class="search__form">
            <i class="ri-search-line search__icon"></i>
            <input type="search" placeholder="What are you looking for?" class="search__input">
        </form>
        <i class="ri-close-line search__close" id="search-close"></i>
    </div> -->

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

  

    <!--==================== PAGE PROFIL ====================-->
    
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="icon/slrt.jpg"
              class="rounded-circle img-fluid" style="width: 200px;">
            <h5 class="my-3">John Smith</h5>
            <p class="text-muted mb-1">Full Stack Developer</p>
            <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
            <div class="d-flex justify-content-center mb-2">
              <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary">Follow</button>
              <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-primary ms-1">Message</button>
            </div>
          </div>
        </div>
       


        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Johnatan Smith</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">example@example.com</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">(097) 234-5678</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Mobile</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">(098) 765-4321</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Bay Area, San Francisco, CA</p>
              </div>
            </div>
          </div>
        </div>
    



    
    
    <div class="card-body mt-5">
        <div class="container" style="background-color: red; width: 100px; height: 100px; color:white;">PROFIL</div>
        <div class="container" style="background-color: yellow; width: 100px; height: 100px; color:white;">PROFIL</div>
        <div class="container" style="background-color: green; width: 100px; height: 100px; color:white;">PROFIL</div>
        <div class="container" style="background-color: orange; width: 100px; height: 100px; color:white;">PROFIL</div>
        <div class="container" style="background-color: purple; width: 100px; height: 100px; color:white;">PROFIL</div>
        <div class="container" style="background-color: blue; width: 100px; height: 100px; color:white;">PROFIL</div>
        <div class="container" style="background-color: white; width: 100px; height: 100px; color:white;">PROFIL</div>
        <div class="container" style="background-color: gray; width: 100px; height: 100px; color:white;">PROFIL</div>
        <div class="container" style="background-color: red; width: 100px; height: 100px; color:white;">PROFIL</div>
        <div class="container" style="background-color: red; width: 100px; height: 100px; color:white;">PROFIL</div>
    </div>

    <nav class="navbar navbar-light bg-primary shadow-lg navbar-expand fixed-bottom d-md-none d-lg-none d-xl-none" style="bottom: -25px;">
        <ul class="navbar-nav nav-justified w-100">
            <li class="nav-item" style="position: relative; top: -10px;">
                <a href="home_fasilitator.php?page=home_fasilitator" class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="bi bi-house-fill text-white" viewBox="0 0 16 16">
                        <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"/>
                        <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z"/>
                    </svg>
                </a>
                <span class="text-white" style="position: relative; top: -5px; font-weight: bold;">HOME</span>
            </li>
            <li class="nav-item" style="position: relative; top: -10px;">
                <a href="layanan.php?page=layanan" class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="bi bi-pen-fill text-white" viewBox="0 0 16 16">
                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001"/>
                    </svg>
                </a>
                <span class="text-white" style="position: relative; top: -5px; font-weight: bold;">LAYANAN</span>
            </li>
            <li class="nav-item" style="position: relative; top: -10px;">
                <a href="laporan.php?page=laporan" class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="bi bi-file-text-fill text-white" viewBox="0 0 16 16">
                        <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1m-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5M5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1m0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1"/>
                    </svg>
                </a>
                <span class="text-white" style="position: relative; top: -5px; font-weight: bold;">LAPORAN</span>
            </li>
            <li class="nav-item" style="position: relative; top: -10px;">
                <a href="profil.php?page=profil" class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="bi bi-person-fill text-white" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                    </svg>
                </a>
                <span class="text-white" style="position: relative; top: -5px; font-weight: bold;">PROFIL</span>
            </li>
        </ul>
    </nav>

    <!-- PAGE CONTENT -->
    

    <!-- PINDAH HALAMAN -->

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
