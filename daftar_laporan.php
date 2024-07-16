<?php 
    include "layout/header.php";
    include "koneksi.php";


?>



<!-- DataTables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>


<style>
    /* .print {
        position: fixed;
        top: 550px;
        border: 2px solid red;
        border-radius: 50%;
        background-color: red;
        box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.1);
        z-index: 2;
        right: 20px;
    } */
</style>


<!-- <div class="print d-none d-lg-block">
    <a href="cetak_laporan.php?page=cetak_laporan" class="text-white">
    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-printer-fill" viewBox="-1 -2 18 18">
    <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1"/>
    <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1"/>
    </svg>
    </a>
</div> -->




   <!-- Main content -->
<section class="content" style="position: relative; top:100px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card shadow mt-2 mb-2">
                    <div class="card-header text-center">
                        <h3 class="card bg-primary rounded">LAPORAN FASILITATOR</h3>
                        <div class="float-left">
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
                                $tampil = mysqli_query($koneksi, "SELECT * FROM percobaan_apriaji ORDER BY id DESC");
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

                        <br>
                        <br>
                        <br>

                        <!-- TABEL LAPORAN SEKRETARIAT SLRT -->
                        <div class="card shadow mt-2">
                            <div class="card-header text-center">
                                <h4 class="card bg-primary rounded">LAPORAN PELAYANAN</h4>
                                <div class="float-left">
                                    <a href="layanan.php?page=layanan" class="btn btn-danger"><b>EDIT</b></a>
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
                                    $tampil = mysqli_query($koneksi, "SELECT * FROM pelayanan ORDER BY id DESC");
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
                                <h4 class="card bg-primary rounded">LAPORAN BBL</h4>
                                <div class="float-left">
                                    <a href="laporan_bbl.php?page=laporan_bbl" class="btn btn-danger"><b>EDIT</b></a>
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
                                    $tampil = mysqli_query($koneksi, "SELECT * FROM bbl ORDER BY id DESC");
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
                                <h4 class="card bg-primary rounded">LAPORAN TAMBAHAN</h4>
                                <div class="float-left">
                                    <a href="laporan_tambahan.php?page=laporan_tambahan" class="btn btn-danger"><b>EDIT</b></a>
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
                                    $tampil = mysqli_query($koneksi, "SELECT * FROM tambahan ORDER BY id DESC");
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
    <nav class="shadow-lg navbar-expand fixed-bottom" style="bottom:0px;">
            <ul class="navbar-nav nav-justified w-100 text-dark bolt bg-white shadow-lg">
                <li class="nav-item" style="position: relative; top:3px;">
                    <a href="" id="resetData" class="btn" class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-calendar2-x-fill" viewBox="0 0 16 16">
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5m9.954 3H2.545c-.3 0-.545.224-.545.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5m-6.6 5.146a.5.5 0 1 0-.708.708L7.293 10l-1.147 1.146a.5.5 0 0 0 .708.708L8 10.707l1.146 1.147a.5.5 0 0 0 .708-.708L8.707 10l1.147-1.146a.5.5 0 0 0-.708-.708L8 9.293z"/>
                    </svg> <br>
                    <span><b>HAPUS</b></span>
                    </a>
                </li>
            
                <li class="nav-item" style="position: relative; top:3px;">
                    <a href="dashboard.php?page=dashboard" class="nav-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-menu-button-wide-fill text-dark" viewBox="0 0 16 16">
                        <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v2A1.5 1.5 0 0 0 1.5 5h13A1.5 1.5 0 0 0 16 3.5v-2A1.5 1.5 0 0 0 14.5 0zm1 2h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1 0-1m9.927.427A.25.25 0 0 1 12.604 2h.792a.25.25 0 0 1 .177.427l-.396.396a.25.25 0 0 1-.354 0zM0 8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm1 3v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2zm14-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2zM2 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5"/>
                        </svg> <br>
                        <span><b>MENU</b></span>
                    </a>
                </li>

                <li class="nav-item" style="position: relative; top:3px;">
                    <a href="cetak_laporan.php" target="_BLANK" class="nav-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-printer-fill text-dark" viewBox="0 0 16 16">
                        <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1"/>
                        <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1"/>
                        </svg> <br>
                        <span><b>CETAK</b></span>
                    </a>
                </li>
            </ul>
    </nav>
    
<!-- NAVBAR BAWAH -->



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#resetData').click(function() {
        if (confirm('Apakah Anda yakin ingin mereset semua data?')) {
            $.ajax({
                url: 'reset_data.php',
                type: 'POST',
                success: function(response) {
                    alert('Semua data berhasil direset!');
                    location.reload(); // Muat ulang halaman setelah reset
                },
                error: function(xhr, status, error) {
                    alert('Terjadi kesalahan: ' + error);
                }
            });
        }
    });
});

</script>






<br>
<br>
<br>


<?php 
    include "layout/footer.php";
?>