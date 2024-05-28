<?php
include("koneksi.php");

// Cek apakah tombol simpan sudah diklik atau belum
if(isset($_POST['simpan'])){
    $id_rumah = $_POST['id_rumah'];
    $nama = mysqli_real_escape_string($mysqli, $_POST['rumah']);  
    $informasi = mysqli_real_escape_string($mysqli, $_POST['informasi']); 
    $gambar = mysqli_real_escape_string($mysqli, $_POST['gambar']); 
    $pulau = mysqli_real_escape_string($mysqli, $_POST['pulau']); 

    // Buat query update
    $query = "UPDATE rumah SET nama='$nama', informasi='$informasi', gambar='$gambar', id_pulau='$pulau' WHERE id_rumah='$id_rumah'";
    $result = mysqli_query($mysqli, $query);

    // Cek apakah query update berhasil
    if($result){
        header('Location: tabel_rumah.php');
        exit();
    } else {
        die("Error updating record: " . mysqli_error($mysqli));
    }
} else {
    die("Akses dilarang...");
}
?>
