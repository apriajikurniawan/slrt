<?php 
include "layout/header.php";
 include "koneksi.php";

 
?>



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>




 

<div class="container" style="position: relative; top: 90px;">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3 class="text-center">LAPORAN FASILITATOR</h3>
        </div>

      
            <div class="card-body">
                <div class="content d-flex">
                    <div class="text-center mx-1 d-none d-md-block">
                        <a href="dashboard.php?page=dashboard" class="btn btn-primary">KEMBALI</a>
                    </div>
                    <button type="button" class="btn btn-success text-center mx-1 mb-3 d-none d-md-block" data-bs-toggle="modal" data-bs-target="#modaltambah">
                        Tambahkan
                    </button>
                    <!-- <div class="text-center mx-1 d-none d-md-block">
                        <a href="" class="btn btn-danger">CETAK</a>
                    </div> -->
                </div>

                <div class="table-responsive">
                <table class="table table-bordered border table-striped table-hover">
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
                        <th>Aksi</th>
                    </tr>

                    <?php 
                        //ambil data
                        $no = 1;
                        $tampil = mysqli_query($koneksi, "SELECT * FROM percobaan WHERE session_id = '$session_id' ORDER BY id DESC");
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
                        <td>
                            <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modaledit<?= $no ?>">Edit</a>
                            <a href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalhapus<?= $no ?>">Hapus</a>
                        </td>
                    </tr>

                    <style>
                            .fade .modal_dialog .modal-content form .input-field input {
                                position: relative;
                                left: 10px;
                            }
                    </style>

                



<!-- Button trigger modal -->
                            <!-- Modal ubah-->
                            <div class="modal fade" id="modaledit<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel"><b>EDIT DATA LAPORAN</b></h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="aksi_crud.php" method="POST" style="position: relative; top:-150px;">
                                            <div class="container">
                                                <div class="card p-2" style="position: relative; top:-200px;">
                                                    <input type="hidden" name="id" value="<?= $data['id']; ?>">
                                                    <div class="rounded p-2">
                                                        <div class="input-field form-group">
                                                            <input type="text" required name="jadwal" value="<?= $data['jadwal'] ?>" style="text-transform: uppercase;" oninput="this.value = this.value.toUpperCase();" id="jadwal" autofocus>
                                                            <label>JADWAL</label>
                                                        </div> <br>
                                                        <div class="input-field form-group">
                                                            <input type="text" required name="jlh_layanan" value="<?= $data['jlh_layanan'] ?>">
                                                            <label>JUMLAH LAYANAN</label>
                                                        </div><br>
                                                    </div>
                                                    <div class="bg-light rounded p-2">
                                                        <span class="bold text-dark">PENDATAAN</span>
                                                        <div class="input-field form-group mt-2">
                                                            <input type="text" required name="cek_bansos" value="<?= $data['cek_bansos'] ?>">
                                                            <label>CEK BANSOS</label>
                                                        </div><br>
                                                        <div class="input-field form-group">
                                                            <input type="text" required name="usulan_baru" value="<?= $data['usulan_baru'] ?>">
                                                            <label>USULAN BARU</label>
                                                        </div><br>
                                                        <div class="input-field form-group">
                                                            <input type="text" required name="bbl" value="<?= $data['bbl'] ?>">
                                                            <label>BBL</label>
                                                        </div><br>
                                                        <div class="input-field form-group">
                                                            <input type="text" required name="kelayakan" value="<?= $data['kelayakan'] ?>">
                                                            <label>KELAYAKAN</label>
                                                        </div><br>
                                                        <div class="input-field form-group">
                                                            <input type="text" required name="tugas_lain" value="<?= $data['tugas_lain'] ?>">
                                                            <label>TUGAS LAIN</label>
                                                        </div>
                                                    </div> <br>
                                                    <div class="rounded p-2">
                                                        <div class="input-field form-group">
                                                            <input type="text" required name="keterangan1" value="<?= $data['keterangan1'] ?>">
                                                            <label>KETERANGAN</label>
                                                        </div><br>
                                                        <div class="input-field form-group">
                                                            <input type="text" required name="tantangan" value="<?= $data['tantangan'] ?>">
                                                            <label>TANTANGAN</label>
                                                        </div><br>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" name="ubah" class="btn btn-primary">Ubah</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Button trigger modal -->





                            <!-- DELETE DATA =========================================================-->
                            <!-- Button trigger modal -->
                            <!-- Modal hapus-->
                            <div class="modal fade" id="modalhapus<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Konfirmasi</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                        <form action="aksi_crud.php" method="POST" style="position: relative; top:-150px;">
                                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                            <div class="modal-body" style="position: relative; top:-100px;">
                                                <h5 class="text-center">Yakin Menghapus Data ini <br>
                                                    <span class="text-danger"><?= $data['jadwal'] ?></span>
                                                </h5>
                                            </div>
                                            
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                                <button type="submit" name="hapus" class="btn btn-primary">Ya</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Button trigger modal -->
                            <!-- DELETE DATA =========================================================-->





                    <?php 
                        } 
                    ?>
                </table>
                </div>






                <!-- Button trigger modal -->
                <!-- Modal -->
                <div class="modal fade" id="modaltambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel"><b>TAMBAH DATA LAPORAN</b></h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                        <form action="aksi_crud.php" method="POST" style="position: relative; top:-10px;">
                            <div class="modal-form">
                                <div class="input-field form-group">
                                    <input type="text" required name="jadwal" style="text-transform: uppercase;" oninput="this.value = this.value.toUpperCase();" id="jadwal" autofocus>
                                    <label>JADWAL</label>
                                </div> <br>
                                <div class="input-field form-group">
                                    <input type="text" required name="jlh_layanan">
                                    <label>JUMLAH LAYANAN</label>
                                </div><br>
                                        
                                <div class="bg-light rounded">
                                    <span class="bold text-dark">PENDATAAN</span>
                                    <div class="input-field form-group mt-2">
                                        <input type="text" required name="cek_bansos">
                                        <label>CEK BANSOS</label>
                                    </div><br>
                                    <div class="input-field form-group">
                                        <input type="text" required name="usulan_baru">
                                        <label>USULAN BARU</label>
                                    </div><br>
                                    <div class="input-field form-group">
                                        <input type="text" required name="bbl">
                                        <label>BBL</label>
                                    </div><br>
                                    <div class="input-field form-group">
                                        <input type="text" required name="kelayakan">
                                        <label>KELAYAKAN</label>
                                    </div><br>
                                    <div class="input-field form-group">
                                        <input type="text" required name="tugas_lain">
                                        <label>TUGAS LAIN</label>
                                    </div> 
                                </div> <br>
                                        
                                <div class="input-field form-group">
                                    <input type="text" required name="keterangan1">
                                    <label>KETERANGAN</label>
                                </div><br>
                                <div class="input-field form-group">
                                    <input type="text" required name="tantangan">
                                    <label>TANTANGAN</label>
                                </div><br>
                            
                                
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="bsimpan" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                    </div>
                </div>
                 <!-- Button trigger modal -->
        </div>
      
    </div>
</div>





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
                    <a href="" class="nav-link" data-bs-toggle="modal" data-bs-target="#modaltambah">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus-square-fill text-dark" viewBox="0 0 16 16">
                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0"/>
                        </svg> <br>
                        <span><b>TAMBAH</b></span>
                    </a>
                </li>


                <!-- <li class="nav-item" style="position: relative; top: -20px;">
                    <a href="lap_keg_fas.php?page=lap_keg_fas" class="nav-link d-inline-block rounded-circle shadow bg-white" data-bs-toggle="modal" data-bs-target="#modaltambah" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus-square-fill text-dark" viewBox="0 0 16 16">
                            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0"/>
                        </svg>
                    </a>
                </li> -->
                <li class="nav-item" style="position: relative; top:3px;">
                    <a href="daftar_laporan.php?page=daftar_laporan" class="nav-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list-check" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0m0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0m0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0"/>
                        </svg> <br>
                        <span><b>LIHAT DATA</b></span>
                    </a>
                </li>
            </ul>
    </nav>
<!-- NAVBAR BAWAH -->



<br>
<br>
<br>

<?php 
    include "layout/footer.php";

?>

<br>