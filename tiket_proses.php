<?php
include 'koneksi.php';
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$id_user = $_POST['id_user'];
$id_rumah = $_POST['id_rumah'];
$jumlah = $_POST['jumlah'];
$tanggal = $_POST['tanggal'];

// Periksa apakah id_rumah valid
$query_check = "SELECT * FROM rumah WHERE id_rumah=?";
$stmt_check = $mysqli->prepare($query_check);
$stmt_check->bind_param("i", $id_rumah);
$stmt_check->execute();
$result_check = $stmt_check->get_result();

if ($result_check->num_rows == 0) {
    echo "<script>
            alert('Rumah tidak ditemukan');
            document.location = 'pesan.php';
        </script>";
    exit();
}

// Insert data ke tabel tiket
$query = "INSERT INTO tiket (id_user, id_rumah, jumlah, tanggal) VALUES (?, ?, ?, ?)";
$stmt = $mysqli->prepare($query);
$stmt->bind_param("iiis", $id_user, $id_rumah, $jumlah, $tanggal);
$result = $stmt->execute();

if ($result) {
    echo "<script>
            alert('Pemesanan Berhasil');
            document.location = 'invoice.php';
        </script>";
        // Setelah proses selesai, alihkan pengguna ke halaman invoice
        header("Location: invoice.php?id_rumah=$id_rumah&jumlah=$jumlah&tanggal=$tanggal");
        exit();
} else {
    echo "<script>
            alert('Pemesanan Gagal');
            document.location = 'pesan.php';
        </script>";
}
?>
