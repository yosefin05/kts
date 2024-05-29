<?php
include 'koneksi.php';

// Cek apakah ada ID yang dikirim melalui URL
if(isset($_GET['id_tiket'])){
    $id_tiket = $_GET['id_tiket'];

    // Buat query untuk menghapus data tiket berdasarkan ID
    $query = "DELETE FROM tiket WHERE id_tiket='$id_tiket'";
    $result = mysqli_query($mysqli, $query);

    // Cek apakah query berhasil
    if($result){
        // Redirect kembali ke halaman admin jika berhasil
        header("Location: admin.php");
        exit();
    } else {
        // Tampilkan pesan error jika gagal
        echo "Error deleting record: " . mysqli_error($mysqli);
    }
} else {
    // Redirect ke halaman admin jika tidak ada ID yang dikirim
    header("Location: admin.php");
    exit();
}
?>
