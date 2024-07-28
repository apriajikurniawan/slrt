//VALIDASI 22222222=============================================2


<?php

// panggil koneksi db
include "koneksi.php";

// deklarasi variabel pass
$pass       = md5($_POST['password']);
$username   = mysqli_real_escape_string($koneksi, $_POST['username']);
$password   = mysqli_real_escape_string($koneksi, $pass);
$level      = mysqli_real_escape_string($koneksi, $_POST['level']);

// cek username terdaftar
$query      = "SELECT * FROM user WHERE username = '$username' AND level = '$level' ";
$cek_user   = mysqli_query($koneksi, $query);
$user_valid = mysqli_fetch_array($cek_user);

if ($user_valid) {
    // cek password yang sesuai
    if ($password == $user_valid['password']) {
        // tambahkan pengecekan session sebelum memulai session baru
        session_start();
        
        if ((isset($_SESSION['username']) && $_SESSION['username'] == $user_valid['username']) &&
        (isset($_SESSION['id']) && $_SESSION['id'] == $user_valid['id'])) {
        // jika session sudah ada dan sesuai dengan nama_lengkap yang sedang login, maka pengguna sudah login di perangkat lain
        echo "<script>alert('Maaf, Anda sudah login di perangkat lain.'); document.location='index.php'</script>";
        exit; // keluar dari skrip
    }
    
        
        // buat session baru
        $_SESSION['username'] = $user_valid['username'];
        $_SESSION['nama_lengkap'] = $user_valid['nama_lengkap'];
        $_SESSION['level'] = $user_valid['level'];
        $_SESSION['area_tugas'] = $user_valid['area_tugas'];
        $_SESSION['kecamatan'] = $user_valid['kecamatan'];
        $_SESSION['id'] = $user_valid['id']; // pastikan $_SESSION['id'] diset sesuai dengan field yang sesuai dari database

        // lanjutkan dengan switch case seperti sebelumnya
        switch ($level) {
            case "fasilitator":
                header('Location: dashboard.php');
                break; 
            case "tksk":
                header('Location: tksk.php');
                break; 
            case "operator":
                header('Location: operator.php');
                break; 
            case "koordinator":
                header('Location: koordinator.php');
                break; 
            case "manajer":
                header('Location: manajer.php');
                break; 
            default:
                echo "<script>alert('Login Gagal. Level tidak dikenal.'); document.location='index.php'</script>";
                break;
        }
    } else {
        echo "<script>alert('Login Gagal. Password tidak sesuai.'); document.location='index.php'</script>";
    }
} else {
    echo "<script>alert('Maaf, Login Gagal. Username tidak terdaftar.'); document.location='index.php'</script>";
}

?>