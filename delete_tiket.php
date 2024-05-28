<?php
include("koneksi.php"); 

if (isset($_GET['id_tiket'])) {
    $id_tiket = $_GET['id_tiket'];

    // Periksa apakah id_tiket ada di database
    $check_tiket = mysqli_query($mysqli, "SELECT * FROM tiket WHERE id_tiket='$id_tiket'");
    
    if (mysqli_num_rows($check_tiket) > 0) {
        // Hapus data terkait di tabel tiket
        $delete_tiket = mysqli_query($mysqli, "DELETE FROM tiket WHERE id_tiket='$id_tiket'");

        if ($delete_tiket) {
            // Redirect ke halaman utama setelah penghapusan
            header("Location: tabel_tiket.php");
            exit();
        } else {
            echo "Error deleting record in tiket: " . mysqli_error($mysqli);
        }
    } else {
        echo "Record with id_tiket $id_tiket does not exist.";
    }
} else {
    echo "ID Tiket not provided.";
}
?>
