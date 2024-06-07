<?php
// Mengaktifkan session pada PHP
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

// Lakukan pencarian user berdasarkan username dan password
$login = mysqli_query($mysqli, "SELECT * FROM user WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($login);

if ($cek > 0) {
    // Jika ditemukan data user yang sesuai
    $data = mysqli_fetch_assoc($login);

    // Simpan id_user dalam session
    $_SESSION['id_user'] = $data['id_user'];

    // Simpan username dalam session
    $_SESSION['username'] = $data['username'];

    // Cek peran (role) pengguna
    if ($data['role'] == "admin") {
        // Jika pengguna adalah admin, set session dan arahkan ke halaman admin
        $_SESSION['role'] = "admin";
        header("location: admin.php");
    } elseif ($data['role'] == "user") {
        // Jika pengguna adalah user, set session dan arahkan ke halaman user
        $_SESSION['role'] = "user";
        header("location: user.php");
    } else {
        // Jika tidak ada peran yang cocok, arahkan ke halaman login
        header("location: login.php");
    }
} else {
    // Jika tidak ada pengguna yang cocok, tampilkan pesan kesalahan dan arahkan kembali ke halaman login
    echo "<script>
    alert('Username atau password salah!');
    document.location = 'login.php';
    </script>";
}
?>
