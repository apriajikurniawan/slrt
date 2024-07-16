<?php
// Database connection
include "koneksi.php";

// Ketika tombol simpan diklik
if (isset($_POST['simpanbbl'])) {
    // Simpan data
    $tanggal = mysqli_real_escape_string($koneksi, $_POST['tanggal']);
    $nama_klien = mysqli_real_escape_string($koneksi, $_POST['nama_klien']);
    $alamat_klien = mysqli_real_escape_string($koneksi, $_POST['alamat_klien']);
    $jenis_layanan = mysqli_real_escape_string($koneksi, $_POST['jenis_layanan']);
    $keterangan3 = mysqli_real_escape_string($koneksi, $_POST['keterangan3']);
   

    $simpan = mysqli_query($koneksi, "INSERT INTO bbl (tanggal, nama_klien, alamat_klien, jenis_layanan, keterangan3) 
    VALUES ('$tanggal', '$nama_klien', '$alamat_klien', '$jenis_layanan', '$keterangan3')");

    if ($simpan) {
        echo "<script> alert('Simpan Data Berhasil');
        document.location='laporan_bbl.php';
        </script>";
    } else {
        echo "<script> alert('Simpan Data Gagal');
        document.location='laporan_bbl.php';
        </script>";
    }
}



// Ketika tombol edit diklik
if (isset($_POST['ubahbbl'])) {
    // Pastikan id ada di dalam array $_POST
    if (isset($_POST['id'])) {
        // Update data
        $id = mysqli_real_escape_string($koneksi, $_POST['id']); // Mengamankan input dari serangan SQL Injection
        $tanggal = mysqli_real_escape_string($koneksi, $_POST['tanggal']);
        $nama_klien = mysqli_real_escape_string($koneksi, $_POST['nama_klien']);
        $alamat_klien = mysqli_real_escape_string($koneksi, $_POST['alamat_klien']);
        $jenis_layanan = mysqli_real_escape_string($koneksi, $_POST['jenis_layanan']);
        $keterangan3 = mysqli_real_escape_string($koneksi, $_POST['keterangan3']);

        // Validasi bahwa semua data yang diperlukan ada
        if ($tanggal && $nama_klien && $alamat_klien && $jenis_layanan && $keterangan3) {
            $query = "UPDATE bbl SET 
                      tanggal = '$tanggal',
                      nama_klien = '$nama_klien',
                      alamat_klien = '$alamat_klien',
                      jenis_layanan = '$jenis_layanan',
                      keterangan3 = '$keterangan3'
                      WHERE id = '$id'";

            $ubah1 = mysqli_query($koneksi, $query);

            if ($ubah1) {
                echo "<script> alert('Edit Data Berhasil');
                document.location='laporan_bbl.php';
                </script>";
            } else {
                echo "Error: " . mysqli_error($koneksi); // Tambahkan ini untuk memeriksa error dari MySQL
                echo "<script> alert('Edit Data Gagal');
                document.location='laporan_bbl.php';
                </script>";
            }
        } else {
            echo "<script> alert('Data tidak lengkap');
            document.location='laporan_bbl.php';
            </script>";
        }
    } else {
        echo "<script> alert('ID tidak ditemukan');
        document.location='laporan_bbl.php';
        </script>";
    }
}






// Ketika tombol hapus diklik
if (isset($_POST['hapusbbl'])) {
    // Hapus data
    $id = mysqli_real_escape_string($koneksi, $_POST['id']); // Mengamankan input dari serangan SQL Injection

    $hapus = mysqli_query($koneksi, "DELETE FROM bbl WHERE id = '$id'");

    if ($hapus) {
        echo "<script> alert('Data Berhasil Dihapus');
        document.location='laporan_bbl.php';
        </script>";
    } else {
        echo "<script> alert('Data Tidak bisa Dihapus');
        document.location='laporan_bbl.php';
        </script>";
    }
}
?>
