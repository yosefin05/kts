<?php
include("koneksi.php");

//cek apakah tombol simpan sudah diklik atau belum
if(isset($_POST['simpan'])){
    $id_user = $_POST['id_user'];
    $email = $_POST['email']; 
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    
    //buat query update
    $result = mysqli_query($mysqli, "UPDATE user SET email='$email', username='$username', password='$password',role='$role' WHERE id_user=$id_user");
    header('location:tabel_user.php');
} else {
    die("Akses dilarang...");
}
?>