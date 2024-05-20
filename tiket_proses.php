<?php
include 'koneksi.php';

$username = $_POST['username'];
$telepon = $_POST['telepon'];
$provinsi = $_POST['provinsi'];
$jumlah = $_POST['jumlah'];
$tanggal = $_POST['tanggal'];

$sql = "INSERT INTO `tiket`(`username`, `telepon`, `provinsi`,`jumlah`,`tanggal`) VALUES ('$username','$telepon','$provinsi','$jumlah','$tanggal')";;
$result = mysqli_query($mysqli,$sql);
if($result){
    echo "<script>
            alert('Pembelian Berhasil');
            document.location = 'user.php';
        </script>";
}else{
    echo "<script>
    alert('Pembelian Gagal');
    document.location = 'tiket.php';
</script>";
}
?>