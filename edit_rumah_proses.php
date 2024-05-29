<?php
include("koneksi.php");

// Cek apakah tombol simpan sudah diklik atau belum
if(isset($_POST['simpan'])){
    $id_rumah = mysqli_real_escape_string($mysqli, $_POST['id_rumah']);
    $nama = mysqli_real_escape_string($mysqli, $_POST['nama']);  
    $informasi = mysqli_real_escape_string($mysqli, $_POST['informasi']); 
    $gambar = mysqli_real_escape_string($mysqli, $_POST['gambar']); 
    $harga = mysqli_real_escape_string($mysqli, $_POST['harga']); 
    $pulau = mysqli_real_escape_string($mysqli, $_POST['pulau']); 

    // Buat query update
    $query = "UPDATE rumah SET nama='$nama', informasi='$informasi', gambar='$gambar', harga='$harga', id_pulau='$pulau' WHERE id_rumah='$id_rumah'";
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
