<?php 
    include "layout/header.php";
    include "koneksi.php";

?>

<style>
    section div .row .col-12 .card {
        border: 1px solid black;
        border-radius: 14px;
    }
</style>

      <!-- Main content -->
<section class="content" style="position: relative; top:100px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card shadow mt-2 mb-2">
                    <div class="card-header text-center">
                        <h4 class="card rounded">LAPORAN FASILITATOR</h4>
                        <div class="d-none d-md-flex justify-content-start mb-2">
                            <a href="dashboard.php?page=dashboard" class="btn btn-primary me-2"><b>KEMBALI</b></a>
                            <a href="laporan.php?page=laporan" class="btn btn-danger"><b>EDIT</b></a>
                        </div>

                    </div>
                   
                    
                    <!-- /.card-header -->
                    <div class="card-body">
                        <!-- TABEL LAPORAN FASILITATOR -->
                        <table id="example1" class="table table-bordered text-dark table-striped">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>JADWAL</th>
                                    <th>JUMLAH LAYANAN</th>
                                    <th>CEK BANSOS</th>
                                    <th>USULAN BARU</th>
                                    <th>BBL</th>
                                    <th>KELAYAKAN</th>
                                    <th>TUGAS LAIN</th>
                                    <th>KETERANGAN</th>
                                    <th>TANTANGAN</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no = 1;
                                $tampil = mysqli_query($koneksi, "SELECT * FROM backup_percobaan ORDER BY id DESC");
                                while ($data = mysqli_fetch_array($tampil)) {
                                ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?= $data['jadwal']; ?></td>
                                    <td><?= $data['jlh_layanan']; ?></td>
                                    <td><?= $data['cek_bansos']; ?></td>
                                    <td><?= $data['usulan_baru']; ?></td>
                                    <td><?= $data['bbl']; ?></td>
                                    <td><?= $data['kelayakan']; ?></td>
                                    <td><?= $data['tugas_lain']; ?></td>
                                    <td><?= $data['keterangan1']; ?></td>
                                    <td><?= $data['tantangan']; ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                        <br>
                        <br>
                        <br>

                        <!-- TABEL LAPORAN SEKRETARIAT SLRT -->
                        <div class="card shadow mt-2">
                            <div class="card-header text-center">
                                <h4 class="card rounded">LAPORAN PELAYANAN</h4>
                                <div class="d-none d-md-flex justify-content-start mb-2">
                                    <a href="dashboard.php?page=dashboard" class="btn btn-primary me-2"><b>KEMBALI</b></a>
                                    <a href="laporan.php?page=laporan" class="btn btn-danger"><b>EDIT</b></a>
                                </div>
                            </div>
                            <table id="example2" class="table table-bordered text-dark table-striped">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>TANGGAL</th>
                                        <th>NAMA</th>
                                        <th>ALAMAT</th>
                                        <th>JENIS LAYANAN</th>
                                        <th>KETERANGAN</th>
                                    </tr>
                                </thead>
                                <tbody class="text-dark">
                                    <?php 
                                    $no = 1;
                                    $tampil = mysqli_query($koneksi, "SELECT * FROM backup_pelayanan ORDER BY id DESC");
                                    while ($data = mysqli_fetch_array($tampil)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?= $data['tanggal']; ?></td>
                                        <td><?= $data['nama_klien']; ?></td>
                                        <td><?= $data['alamat_klien']; ?></td>
                                        <td><?= $data['jenis_layanan']; ?></td>
                                        <td><?= $data['keterangan2']; ?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- TABEL LAPORAN SEKRETARIAT SLRT -->

                        <br>
                        <br>
                        <br>
                    
                           
                       
                        <!-- TABEL LAPORAN BBL -->
                        <div class="table-responsive card shadow mt-2">
                            <div class="card-header text-center">
                                <h4 class="card rounded">LAPORAN BBL</h4>
                                <div class="d-none d-md-flex justify-content-start mb-2">
                                    <a href="dashboard.php?page=dashboard" class="btn btn-primary me-2"><b>KEMBALI</b></a>
                                    <a href="laporan.php?page=laporan" class="btn btn-danger"><b>EDIT</b></a>
                                </div>
                            </div>

                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>TANGGAL</th>
                                        <th>NAMA</th>
                                        <th>ALAMAT</th>
                                        <th>JENIS LAYANAN</th>
                                        <th>KETERANGAN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $no = 1;
                                    $tampil = mysqli_query($koneksi, "SELECT * FROM backup_bbl ORDER BY id DESC");
                                    while ($data = mysqli_fetch_array($tampil)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?= $data['tanggal']; ?></td>
                                        <td><?= $data['nama_klien']; ?></td>
                                        <td><?= $data['alamat_klien']; ?></td>
                                        <td><?= $data['jenis_layanan']; ?></td>
                                        <td><?= $data['keterangan3']; ?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- TABEL LAPORAN BBL -->


                        <br>
                        <br>
                        <br>


                        <!-- TABEL LAPORAN TAMBAHAN -->
                        <div class="table-responsive card shadow mt-2">
                            <div class="card-header text-center">
                                <h4 class="card rounded">LAPORAN TAMBAHAN</h4>
                               <div class="d-none d-md-flex justify-content-start mb-2">
                                    <a href="dashboard.php?page=dashboard" class="btn btn-primary me-2"><b>KEMBALI</b></a>
                                    <a href="laporan.php?page=laporan" class="btn btn-danger"><b>EDIT</b></a>
                                </div>
                            </div>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>TANGGAL</th>
                                        <th>NAMA</th>
                                        <th>ALAMAT</th>
                                        <th>JENIS LAYANAN</th>
                                        <th>KETERANGAN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $no = 1;
                                    $tampil = mysqli_query($koneksi, "SELECT * FROM backup_tambahan ORDER BY id DESC");
                                    while ($data = mysqli_fetch_array($tampil)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?= $data['tanggal']; ?></td>
                                        <td><?= $data['nama_klien']; ?></td>
                                        <td><?= $data['alamat_klien']; ?></td>
                                        <td><?= $data['jenis_layanan']; ?></td>
                                        <td><?= $data['keterangan4']; ?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- TABEL LAPORAN TAMBAHAN -->
                   
                      

                        
                     
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
<!-- /.container-fluid -->
</section>




  <!-- NAVBAR BAWAH -->
  <nav class="shadow-lg navbar-expand fixed-bottom d-lg-none d-xl-none" style="bottom:0px;">
            <ul class="navbar-nav nav-justified w-100 text-dark bolt bg-white shadow-lg">
                <li class="nav-item" style="position: relative; top:3px;">
                    <a href="dashboard.php?page=dashboard" class="nav-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-menu-button-wide-fill text-dark" viewBox="0 0 16 16">
                        <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v2A1.5 1.5 0 0 0 1.5 5h13A1.5 1.5 0 0 0 16 3.5v-2A1.5 1.5 0 0 0 14.5 0zm1 2h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1 0-1m9.927.427A.25.25 0 0 1 12.604 2h.792a.25.25 0 0 1 .177.427l-.396.396a.25.25 0 0 1-.354 0zM0 8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm1 3v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2zm14-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2zM2 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5"/>
                        </svg> <br>
                        <span class=""><b>DASHBOARD</b></span>
                    </a>
                </li>
                                        
                <li class="nav-item" style="position: relative; top:3px;">
                    <a href="" target="_BLANK" class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cloud-download-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 0a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 4.095 0 5.555 0 7.318 0 9.366 1.708 11 3.781 11H7.5V5.5a.5.5 0 0 1 1 0V11h4.188C14.502 11 16 9.57 16 7.773c0-1.636-1.242-2.969-2.834-3.194C12.923 1.999 10.69 0 8 0m-.354 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V11h-1v3.293l-2.146-2.147a.5.5 0 0 0-.708.708z"/>
                    </svg> <br>
                        <span><b>RESTROE</b></span>
                    </a>
                </li>


                <!-- <li class="nav-item" style="position: relative; top: -20px;">
                    <a href="lap_keg_fas.php?page=lap_keg_fas" class="nav-link d-inline-block rounded-circle shadow bg-white" data-bs-toggle="modal" data-bs-target="#modaltambah" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus-square-fill text-dark" viewBox="0 0 16 16">
                            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0"/>
                        </svg>
                    </a>
                </li> -->
                <!-- <li class="nav-item" style="position: relative; top:3px;">
                    <a href="daftar_laporan.php?page=daftar_laporan" class="nav-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list-check" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0m0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0m0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0"/>
                        </svg> <br>
                        <span><b>LIHAT DATA</b></span>
                    </a>
                </li> -->
            </ul>
    </nav>
<!-- NAVBAR BAWAH -->

<br>
<br>
<br>
<?php 
    include "layout/footer.php";
?>