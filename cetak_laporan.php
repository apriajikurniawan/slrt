

  <!-- DataTables -->
  <link rel="stylesheet" href="assets5/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets5/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="assets5/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets5/dist/css/adminlte.min.css">


  
<?php
include "koneksi.php";

session_start();

if (empty($_SESSION['nama_lengkap']) || empty($_SESSION['area_tugas']) || empty($_SESSION['kecamatan'])) {
    echo "<script>alert('Maaf, Silahkan Login terlebih dahulu.');</script>";
    header("Location: index.php");
    exit();
}

// Koneksi ke database (Pastikan variabel $koneksi sudah tersedia)
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Ketika tombol Simpan diklik
if (isset($_POST['slaporan'])) {
    // Mengamankan input dari pengguna
    $jadwal = htmlspecialchars($_POST['jadwal'], ENT_QUOTES);
    $jlh_layanan = htmlspecialchars($_POST['jlh_layanan'], ENT_QUOTES);
    $cek_bansos = htmlspecialchars($_POST['cek_bansos'], ENT_QUOTES);
    $usulan_baru = htmlspecialchars($_POST['usulan_baru'], ENT_QUOTES);
    $kelayakan = htmlspecialchars($_POST['kelayakan'], ENT_QUOTES);
    $tugas_lain = htmlspecialchars($_POST['tugas_lain'], ENT_QUOTES);
    $keterangan1 = htmlspecialchars($_POST['keterangan1'], ENT_QUOTES);
    $tantangan = htmlspecialchars($_POST['tantangan'], ENT_QUOTES);

    // Query untuk menyimpan data
    $query = "INSERT INTO percobaan (jadwal, jlh_layanan, cek_bansos, usulan_baru, kelayakan, tugas_lain, keterangan1, tantangan) 
              VALUES ('$jadwal', '$jlh_layanan', '$cek_bansos', '$usulan_baru', '$kelayakan', '$tugas_lain', '$keterangan1', '$tantangan')";

    $simpan = mysqli_query($koneksi, $query);

    // Uji jika simpan data sukses
    if ($simpan) {
        echo "<script>alert('Simpan data Sukses.'); window.location='daftar_laporan.php'</script>";
    } else {
        echo "<script>alert('Simpan data Gagal: " . mysqli_error($koneksi) . "'); window.location=''</script>";
    }
}
?>

    <style>
        .rotasi {
            transform: rotate(90deg);
            position: relative;
            top: 100px;
        }
    </style>

<section class="rotasi mx-1 text-dark mt-5" style="font-family: 'Times New Roman', Times, serif;">
    <div class="text-center">
        <div class="text-center mt-3" style="position: relative; display: flex; justify-content: center; text-align: center;">
            <h1 class="card-title bold"><b>LAPORAN KEGIATAN FASILITATOR</b></h1>
        </div>
    </div>


    <div class="table-responsive">
        <table class="">
            <tr>
                <td>BULAN : <?= date('m', strtotime('-1 month')) ?></td>
                <td>TAHUN : <?= date('Y') ?></td>
            </tr>
            <tr>
                <td><b>WILAYAH KERJA FASILITATOR</b></td>
            </tr>
            <tr>
                <td>Kelurahan</td>
                <td>: <?= htmlspecialchars($_SESSION['area_tugas']) ?></td>
            </tr>
            <tr>
                <td>Kecamatan</td>
                <td>: <?= htmlspecialchars($_SESSION['kecamatan']) ?></td>
            </tr>
            <tr>
                <td>Kota</td>
                <td>: Tanjungbalai</td>
            </tr>
            <tr>
                <td>Provinsi</td>
                <td>: Sumatera Utara</td>
            </tr>
        </table>
    </div>

    <div class="mt-2">
        <div class="">
            <div class="table">
                <table id="example2" border="2" class="table table-bordered rounded-5">
                    <thead>
                        <tr>
                            <th rowspan="2"><span style="position: relative; top: -30px;">NO</span></th>
                            <th rowspan="2"><span style="position: relative; top: -30px;">JADWAL</span></th>
                            <th rowspan="2"><span style="position: relative; top: -20px;">JUMLAH LAYANAN</span></th>
                            <th colspan="5" class="text-center">PENDATAAN</th>
                            <th rowspan="2"><span style="position: relative; top: -30px;">KETERANGAN</span></th>
                            <th rowspan="2"><span style="position: relative; top: -30px;">TANTANGAN</span></th>
                        
                        </tr>
                        <tr>
                            <th>CEK BANSOS</th>
                            <th>USULAN BARU</th>
                            <th>BBL</th>
                            <th>KELAYAKAN</th>
                            <th>TUGAS LAIN</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $stmt = $koneksi->prepare("SELECT * FROM percobaan ORDER BY id DESC");
                        $stmt->execute();
                        $result = $stmt->get_result();
                        $no = 1;
                        while ($data = $result->fetch_assoc()) {
                    ?>
                        <tr>
                            <td align="center"><?= $no++; ?></td>
                            <td align="center"><?= htmlspecialchars($data['jadwal']); ?></td>
                            <td align="center"><?= htmlspecialchars($data['jlh_layanan']); ?></td>
                            <td align="center"><?= htmlspecialchars($data['cek_bansos']); ?></td>
                            <td align="center"><?= htmlspecialchars($data['usulan_baru']); ?></td>
                            <td align="center"><?= htmlspecialchars($data['bbl']); ?></td>
                            <td align="center"><?= htmlspecialchars($data['kelayakan']); ?></td>
                            <td align="center"><?= htmlspecialchars($data['tugas_lain']); ?></td>
                            <td align="center"><?= htmlspecialchars($data['keterangan1']); ?></td>
                            <td align="center"><?= htmlspecialchars($data['tantangan']); ?></td>
                            
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <br>

    <div class="d-flex justify-content-between mb-5 text-dark">
        <div style="font-family: 'Times New Roman', Times, serif;">
            <span>Dibuat Oleh:</span>
            <br>
            <span>FASILITATOR</span>
            <br><br>
            <span style="position: relative; top:70px;"><?= htmlspecialchars($_SESSION['nama_lengkap']) ?></span>
        </div>
        <div style="font-family: 'Times New Roman', Times, serif; text-align: center;">
            <span>Diperiksa Oleh:</span>
            <br>
            <span>KOORDINATOR SLRT</span>
            <br><br>
            <span style="position: relative; top:70px;">MUHAMMAD TAUFIK, SE</span>
        </div>
        <div style="font-family: 'Times New Roman', Times, serif; text-align: center;">
            <span style="position: relative; left: -38px;">Diketahui Oleh:</span>
            <br>
            <span>KA. SEKRETARIAT SLRT</span>
            <br><br>
            <span style="position: relative; top:70px; left: -24px;">ELVI TRISNA, S.ST</span><br>
            <span style="position: relative; top:70px; left: 2px;">NIP. 19790124 200502 2 002</span>
        </div>
    </div>



  
        <table style="position: relative; top:108px; font-size:15px;">
            <tr>
                <td>
                    <img src="icon/slrt.jpg" style="width: 35px; height:35px; position:relative; top:40px;">
                </td>
            </tr>
    
            
            <tr class="mx-5 ms-5" style="position: relative; top:5px;">
                <!-- <td><p class="text-dark" style="font-family: Verdana, Geneva, Tahoma, sans-serif; position: relative; left:40px;">Sistem Layanan Dan Rujukan Terpadu</p></td> -->
                <td style="position: relative; right:-1020px;"><p class="text-dark" style="font-family: Verdana, Geneva, Tahoma, sans-serif;"> All Right Reserved <?= date('Y') ?></p></td>
            </tr>
        </table>

                <?php  
                    include "layout/footer.php";
                ?>














                        <!-- TABEL LAPORAN SEKRETARIAT SLRT -->
                        <div class="" style="position: relative; top: 600px;">
                                <div class="text-center mx-3">
                                    <h4 class="card">LAPORAN DI SEKRETARIAT SLRT</h4>
                                </div>
                                <div class="card-body mt-3">
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
                        </div>
                        <!-- TABEL LAPORAN SEKRETARIAT SLRT -->






                    <br>
                    <br>





                         <!-- TABEL LAPORAN SEKRETARIAT SLRT -->
                         <div class="" style="position: relative; top: 1000px;">
                                <div class="text-center mx-3">
                                    <h4 class="card">LAPORAN DI SEKRETARIAT SLRT</h4>
                                </div>
                                <div class="card-body mt-3">
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
                        </div>
                        <!-- TABEL LAPORAN SEKRETARIAT SLRT -->

                        <br>
                        <br>
                        <br>








                         <!-- TABEL LAPORAN SEKRETARIAT SLRT -->
                         <div class="" style="position: relative; top: 1000px;">
                                <div class="text-center mx-3">
                                    <h4 class="card">LAPORAN DI SEKRETARIAT SLRT</h4>
                                </div>
                                <div class="card-body mt-3">
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
                        </div>
                        <!-- TABEL LAPORAN SEKRETARIAT SLRT -->

                        <br>
                        <br>
                        <br>
                    
</section>

                          










<script>
 window.print()

</script>


</body>
</html>
































