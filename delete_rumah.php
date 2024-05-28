<?php
include "koneksi.php"; 

if (isset($_GET['id_rumah'])) {
    $id_rumah = $_GET['id_rumah'];

    // Hapus data terkait di tabel tiket terlebih dahulu
    $delete_tiket = mysqli_query($mysqli, "DELETE FROM tiket WHERE id_rumah='$id_rumah'");

    if ($delete_tiket) {
        // Lanjutkan penghapusan data di tabel rumah
        $delete_rumah = mysqli_query($mysqli, "DELETE FROM rumah WHERE id_rumah='$id_rumah'");
        
        if ($delete_rumah) {
            // Redirect ke halaman utama setelah penghapusan
            header("Location: tabel_rumah.php");
            exit();
        } else {
            echo "Error deleting record in rumah: " . mysqli_error($mysqli);
        }
    } else {
        echo "Error deleting record in tiket: " . mysqli_error($mysqli);
    }
} else {
    // Jika id_rumah tidak ada, kembali ke halaman utama
    header("Location: tabel_rumah.php");
    exit();
}
?>
