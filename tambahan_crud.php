<?php
// Database connection
include "koneksi.php";

// Ketika tombol simpan diklik
if (isset($_POST['tambahan'])) {
    // Simpan data
    $tanggal = mysqli_real_escape_string($koneksi, $_POST['tanggal']);
    $nama_klien = mysqli_real_escape_string($koneksi, $_POST['nama_klien']);
    $alamat_klien = mysqli_real_escape_string($koneksi, $_POST['alamat_klien']);
    $jenis_layanan = mysqli_real_escape_string($koneksi, $_POST['jenis_layanan']);
    $keterangan4 = mysqli_real_escape_string($koneksi, $_POST['keterangan4']);
   
    $simpan = mysqli_query($koneksi, "INSERT INTO tambahan (tanggal, nama_klien, alamat_klien, jenis_layanan, keterangan4) 
    VALUES ('$tanggal', '$nama_klien', '$alamat_klien', '$jenis_layanan', '$keterangan4')");

    if ($simpan) {
        echo "<script> alert('Simpan Data Berhasil');
        document.location='laporan_tambahan.php';
        </script>";
    } else {
        echo "<script> alert('Simpan Data Gagal');
        document.location='laporan_tambahan.php';
        </script>";
    }
}

// Ketika tombol edit diklik
if (isset($_POST['ubahtambahan'])) {
    // Pastikan id ada di dalam array $_POST
    if (isset($_POST['id'])) {
        // Update data
        $id = mysqli_real_escape_string($koneksi, $_POST['id']); // Mengamankan input dari serangan SQL Injection
        $tanggal = mysqli_real_escape_string($koneksi, $_POST['tanggal']);
        $nama_klien = mysqli_real_escape_string($koneksi, $_POST['nama_klien']);
        $alamat_klien = mysqli_real_escape_string($koneksi, $_POST['alamat_klien']);
        $jenis_layanan = mysqli_real_escape_string($koneksi, $_POST['jenis_layanan']);
        $keterangan4 = mysqli_real_escape_string($koneksi, $_POST['keterangan4']);

        // Validasi bahwa semua data yang diperlukan ada
        if ($tanggal && $nama_klien && $alamat_klien && $jenis_layanan && $keterangan4) {
            $query = "UPDATE tambahan SET 
                      tanggal = '$tanggal',
                      nama_klien = '$nama_klien',
                      alamat_klien = '$alamat_klien',
                      jenis_layanan = '$jenis_layanan',
                      keterangan4 = '$keterangan4'
                      WHERE id = '$id'";

            $ubah1 = mysqli_query($koneksi, $query);

            if ($ubah1) {
                echo "<script> alert('Edit Data Berhasil');
                document.location='laporan_tambahan.php';
                </script>";
            } else {
                echo "Error: " . mysqli_error($koneksi); // Tambahkan ini untuk memeriksa error dari MySQL
                echo "<script> alert('Edit Data Gagal');
                document.location='laporan_tambahan.php';
                </script>";
            }
        } else {
            echo "<script> alert('Data tidak lengkap');
            document.location='laporan_tambahan.php';
            </script>";
        }
    } else {
        echo "<script> alert('ID tidak ditemukan');
        document.location='laporan_tambahan.php';
        </script>";
    }
}

// Ketika tombol hapus diklik
if (isset($_POST['hapustambahan'])) {
    // Hapus data secara permanen
    if (isset($_POST['id'])) {
        $id = mysqli_real_escape_string($koneksi, $_POST['id']); // Mengamankan input dari serangan SQL Injection

        $hapus = mysqli_query($koneksi, "DELETE FROM tambahan WHERE id = '$id'");

        if ($hapus) {
            echo "<script> alert('Data Berhasil Dihapus');
            document.location='laporan_tambahan.php';
            </script>";
        } else {
            echo "Error: " . mysqli_error($koneksi); // Tambahkan ini untuk memeriksa error dari MySQL
            echo "<script> alert('Data Tidak bisa Dihapus');
            document.location='laporan_tambahan.php';
            </script>";
        }
    } else {
        echo "<script> alert('ID tidak ditemukan');
        document.location='laporan_tambahan.php';
        </script>";
    }
}
?>
