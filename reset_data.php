<?php
include 'koneksi.php'; // Sesuaikan dengan file koneksi database Anda

// Hapus semua data dari tabel yang relevan
$tables = ['percobaan', 'pelayanan', 'bbl', 'tambahan'];

foreach ($tables as $table) {
    $query = "DELETE FROM $table";
    mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
}

echo 'Semua data berhasil direset!';
?>
