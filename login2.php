<?php
//mengaktifkan session pada php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$login = mysqli_query($mysqli,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){

    $data = mysqli_fetch_assoc($login);

    //cek jika user login sebagai admin
    if($data['role']=="admin"){

        //buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['role'] ="admin";
        //alihkan ke halaman dashboard admin
        header("location:admin.php");

    //cek jika user login sebagai user
    }else if ($data['role']=="user"){
        //buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['role'] = "user";
        //alihkan ke halaman dashboard user
        header("location:user.php");
    }else{

        //alihkan ke halaman login kembali
        header("location:login.php");
    }
}else{
    echo "<script>
    alert('You are not registered yet');
    document.location = 'login.php';
    </script>";}
?>