<?php
include("koneksi.php");

//cek apakah tombol simpan sudah diklik atau belum
if(isset($_POST['simpan'])){
    $id_pulau = $_POST['id_pulau'];
    $pulau = $_POST['pulau']; 
    $informasi = $_POST['informasi']; 

    //buat query update
    $result = mysqli_query($mysqli, "UPDATE kategori SET pulau='$pulau'', informasi='$informasi' WHERE id_pulau=$id_pulau");
    header('location:tabel_kategori.php');
} else {
    die("Akses dilarang...");
}
?>