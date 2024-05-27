<?php
include("koneksi.php");

//cek apakah tombol simpan sudah diklik atau belum
if(isset($_POST['simpan'])){
    $id_rumah = $_POST['id_rumah'];
    $nama = $_POST['nama']; 
    $informasi = $_POST['informasi']; 
    $gambar = $_POST['gambar']; 
    $id_pulau = $_POST['id_pulau']; 

    //buat query update
    $result = mysqli_query($mysqli, "UPDATE rumah SET nama='$nama', informasi='$informasi', gambar='$gambar', id_pulau='$id_pulau' WHERE id_rumah=$id_rumah");
    header('location:tabel_rumah .php');
} else {
    die("Akses dilarang...");
}
?>