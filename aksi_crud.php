<?php
// Database connection
include "koneksi.php";

// Ketika tombol simpan diklik
if (isset($_POST['bsimpan'])) {
    // Simpan data
    $jadwal = mysqli_real_escape_string($koneksi, $_POST['jadwal']);
    $jlh_layanan = mysqli_real_escape_string($koneksi, $_POST['jlh_layanan']);
    $cek_bansos = mysqli_real_escape_string($koneksi, $_POST['cek_bansos']);
    $usulan_baru = mysqli_real_escape_string($koneksi, $_POST['usulan_baru']);
    $bbl = mysqli_real_escape_string($koneksi, $_POST['bbl']);
    $kelayakan = mysqli_real_escape_string($koneksi, $_POST['kelayakan']);
    $tugas_lain = mysqli_real_escape_string($koneksi, $_POST['tugas_lain']);
    $keterangan1 = mysqli_real_escape_string($koneksi, $_POST['keterangan1']);
    $tantangan = mysqli_real_escape_string($koneksi, $_POST['tantangan']);

    $simpan = mysqli_query($koneksi, "INSERT INTO percobaan (jadwal, jlh_layanan, cek_bansos, usulan_baru, bbl, kelayakan, tugas_lain, keterangan1, tantangan) 
    VALUES ('$jadwal', '$jlh_layanan', '$cek_bansos', '$usulan_baru', '$bbl', '$kelayakan', '$tugas_lain', '$keterangan1', '$tantangan')");

    if ($simpan) {
        echo "<script> alert('Simpan Data Berhasil');
        document.location='laporan.php';
        </script>";
    } else {
        echo "<script> alert('Simpan Data Gagal');
        document.location='laporan.php';
        </script>";
    }
}



// Ketika tombol edit diklik
if (isset($_POST['ubah'])) {
    // Pastikan id ada di dalam array $_POST
    if (isset($_POST['id'])) {
        // Update data
        $id = mysqli_real_escape_string($koneksi, $_POST['id']); // Mengamankan input dari serangan SQL Injection
        $jadwal = mysqli_real_escape_string($koneksi, $_POST['jadwal']);
        $jlh_layanan = mysqli_real_escape_string($koneksi, $_POST['jlh_layanan']);
        $cek_bansos = mysqli_real_escape_string($koneksi, $_POST['cek_bansos']);
        $usulan_baru = mysqli_real_escape_string($koneksi, $_POST['usulan_baru']);
        $bbl = mysqli_real_escape_string($koneksi, $_POST['bbl']);
        $kelayakan = mysqli_real_escape_string($koneksi, $_POST['kelayakan']);
        $tugas_lain = mysqli_real_escape_string($koneksi, $_POST['tugas_lain']);
        $keterangan1 = mysqli_real_escape_string($koneksi, $_POST['keterangan1']);
        $tantangan = mysqli_real_escape_string($koneksi, $_POST['tantangan']);

        // Debug output
        //echo "ID: $id, Jadwal: $jadwal, Jlh Layanan: $jlh_layanan, Cek Bansos: $cek_bansos, Usulan Baru: $usulan_baru, BBL: $bbl, Kelayakan: $kelayakan, Tugas Lain: $tugas_lain, Keterangan1: $keterangan1, Tantangan: $tantangan";

        $query = "UPDATE percobaan SET 
                  jadwal = '$jadwal',
                  jlh_layanan = '$jlh_layanan',
                  cek_bansos = '$cek_bansos',
                  usulan_baru = '$usulan_baru',
                  bbl = '$bbl',
                  kelayakan = '$kelayakan',
                  tugas_lain = '$tugas_lain',
                  keterangan1 = '$keterangan1',
                  tantangan = '$tantangan'
                  WHERE id = '$id'";

        $ubah = mysqli_query($koneksi, $query);

        if ($ubah) {
            echo "<script> alert('Edit Data Berhasil');
            document.location='laporan.php';
            </script>";
        } else {
            echo "Error: " . mysqli_error($koneksi); // Tambahkan ini untuk memeriksa error dari MySQL
            echo "<script> alert('Edit Data Gagal');
            document.location='laporan.php';
            </script>";
        }
    } else {
        echo "<script> alert('ID tidak ditemukan');
        document.location='laporan.php';
        </script>";
    }
}




// Ketika tombol hapus diklik
if (isset($_POST['hapus'])) {
    // Hapus data
    $id = mysqli_real_escape_string($koneksi, $_POST['id']); // Mengamankan input dari serangan SQL Injection

    $hapus = mysqli_query($koneksi, "DELETE FROM percobaan WHERE id = '$id'");

    if ($hapus) {
        echo "<script> alert('Data Berhasil Dihapus');
        document.location='laporan.php';
        </script>";
    } else {
        echo "<script> alert('Data Tidak bisa Dihapus');
        document.location='laporan.php';
        </script>";
    }
}
?>
