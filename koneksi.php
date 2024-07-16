<?php 
    $server     = "localhost";
    $user       = "root";
    $password   = "";
    $database   = "db_latihan";

    $koneksi = mysqli_connect($server, $user, $password, $database)  or die(mysqli_error($koneksi));
   
    // periksa koneksi
    if (mysqli_connect_errno()) {
        die("koneksi database Gagal: " . mysqli_connect_error());
    }

 
?>
