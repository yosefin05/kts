<?php
include 'koneksi.php';
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $id_rumah = $_POST['id_rumah'];
    $jumlah = $_POST['jumlah'];
    $tanggal = $_POST['tanggal'];

    // Query untuk memasukkan data tiket
    $query = "INSERT INTO tiket (id_user, id_rumah, jumlah, tanggal) VALUES ('$username', '$id_rumah', '$jumlah', '$tanggal')";
    $result = mysqli_query($mysqli, $query);

    if ($result) {
        echo "<script>
            alert('Pembelian Berhasil');
            document.location = 'user.php';
        </script>";
    } else {
        echo "<script>
            alert('Pembelian Gagal');
            document.location = 'pesan.php';
        </script>";
    }
}
?>
