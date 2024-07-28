<?php 



    include "layout/header.php";
    include "koneksi.php";

    //ambil data dari tabel laporan fasilitator
    $tampil = mysqli_query($koneksi, "SELECT * FROM percobaan  ORDER BY id DESC"); //where session_id disamping percobaan
    $total_data = mysqli_num_rows($tampil); // Hitung jumlah data

    //ambil data dari pelayanan
    $tampil = mysqli_query($koneksi, "SELECT * FROM pelayanan ORDER BY id DESC");
    $total_pelayanan = mysqli_num_rows($tampil);

     //ambil data dari bbl
     $tampil = mysqli_query($koneksi, "SELECT * FROM bbl ORDER BY id DESC");
     $total_bbl = mysqli_num_rows($tampil);

      //ambil data dari tambahan
      $tampil = mysqli_query($koneksi, "SELECT * FROM tambahan ORDER BY id DESC");
      $total_tambahan = mysqli_num_rows($tampil);
   
?>




<style>
  
</style>
 

  <!-- Content Wrapper. Contains page content -->
 <section class="content" style="position: relative; top:80px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">BULAN : <?= date('m', strtotime('-1 month')) ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row mx-3">
            
            <!-- DAFTAR LAPORAN ===============================-->
            <a href="daftar_laporan.php?page=daftar_laporan" class="card col-12 col-sm-6 col-md-3 border mt-2 sm-1 text-dark custom-margin">
                  <div class="info-box mb-3 mt-2">
                  <span class="info-box-icon bg-warning elevation-1 shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-list-check" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0m0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0m0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0"/>
                    </svg>
                  </span>
                  <div class="info-box-content">
                      <span class="info-box-text"><b>DAFTAR LAPORAN</b></span>
                      <!-- <span class="info-box-number">2,000</span> -->
                  </div>
                  <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
            </a>
            <!-- DAFTAR LAPORAN ===============================-->


              <a href="registrasi.php?page=registrasi" class="card col-12 col-sm-6 col-md-3 border mt-2 text-dark custom-margin">
                  <div class="info-box mb-3 mt-2">
                      <span class="info-box-icon bg-light elevation-1 shadow-lg">
                      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                      <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001"/>
                      </svg>
                      </span>

          
                      <div class="info-box-content">
                          <span class="info-box-text"><b>REGISTRASI</b></span>
                          <span class="info-box-text"><b>USULAN BANSOS</b></span>
                          <span class="info-box-number">
                          <!-- <small>10%</small> -->
                          </span>
                      </div>
                  <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
              </a>
              
              <a href="laporan.php?page=laporan" class="card col-12 col-sm-6 col-md-3 border mt-2 text-dark custom-margin">
                  <div class="info-box mb-3 mt-2">
                      <span class="info-box-icon bg-info elevation-1 shadow-lg">
                          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                          <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                          <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                          </svg>
                      </span>

                      <div class="info-box-content">
                          <span class="info-box-text"><b>LAPORAN</b></span>
                          <span class="info-box-text"><b>KEGIATAN FASILITATOR</b></span>
                          <span class="info-box-number">
                          <!-- <small>10%</small> -->
                          </span>
                      </div>
                  <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                    <div class="">
                      <h3 class="text-center">Total : <?= $total_data; ?></h3>
                    </div>
              </a>
            <!-- /.col -->
             
              <a href="layanan.php?page=layanan" class="card col-12 col-sm-6 col-md-3 border mt-2 text-dark custom-margin">
                  <div class="info-box mb-3 mt-2">
                      <span class="info-box-icon bg-danger elevation-1 shadow-lg">
                          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                              <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                          </svg>
                      </span>

                  <div class="info-box-content">
                      <span class="info-box-text"><b>LAYANAN</b></span>
                      <span class="info-box-text"><b>SEKRETARIAT SLRT</b></span>
                      <!-- <span class="info-box-number">41,410</span> -->
                  </div>
                  <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->

                    <div class="">
                      <h3 class="text-center">Total : <?= $total_pelayanan; ?></h3>
                    </div>
              </a>
            <!-- /.col -->

    

              <a href="laporan_bbl.php?page=laporan_bbl" class="card col-12 col-sm-6 col-md-3 border mt-2 text-dark custom-margin">
                  <div class="info-box mb-3 mt-2">
                      <span class="info-box-icon bg-success elevation-1 shadow-lg">
                      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-hearts" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M11.5 1.246c.832-.855 2.913.642 0 2.566-2.913-1.924-.832-3.421 0-2.566M9 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h10s1 0 1-1-1-4-6-4-6 3-6 4m13.5-8.09c1.387-1.425 4.855 1.07 0 4.277-4.854-3.207-1.387-5.702 0-4.276ZM15 2.165c.555-.57 1.942.428 0 1.711-1.942-1.283-.555-2.281 0-1.71Z"/>
                          </svg>
                      </span>

                  <div class="info-box-content">
                      <span class="info-box-text"><b>LAPORAN BBL</b></span>
                      <!-- <span class="info-box-number">760</span> -->
                  </div>
                  <!-- /.info-box-content -->
                  </div>

                    <div class="">
                      <h3 class="text-center">Total : <?= $total_bbl; ?></h3>
                    </div>
                  <!-- /.info-box -->
              </a>

            <!-- /.col -->
              <a href="laporan_tambahan.php?page=laporan_tambahan" class="card col-12 col-sm-6 col-md-3 border mt-2 text-dark custom-margin">
                  <div class="info-box mb-3 mt-2">
                  <span class="info-box-icon bg-primary elevation-1 shadow-lg">
                  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
                      <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
                      <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2"/>
                      <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z"/>
                      </svg>
                  </span>

                  <div class="info-box-content">
                      <span class="info-box-text"><b>LAPORAN TAMBAHAN</b></span>
                      <!-- <span class="info-box-number">2,000</span> -->
                  </div>
                  <!-- /.info-box-content -->
                  </div>

                    <div class="">
                      <h3 class="text-center">Total : <?= $total_tambahan; ?></h3>
                    </div>
                  <!-- /.info-box -->
              </a>
            <!-- /.col -->
       


          


        </div>
        <!-- /.row -->
      </div>



    
     






          
               
 <?php 
    include "layout/footer.php"
 ?>