<?php
include 'koneksi.php';

$username = $_POST['username']; 
$rumah = $_POST['rumah'];
$jumlah = $_POST['jumlah'];
$tanggal = $_POST['tanggal'];


$sql = "INSERT INTO `tiket`(`id_user`, `id_rumah`, `jumlah`, `tanggal`) VALUES ('$username','$rumah','$jumlah','$tanggal')";
$result = mysqli_query($mysqli,$sql);
if($result){
    echo "<script>
            alert('Input data successfully');
            document.location = 'tabel_rumah.php';
        </script>";
}else{
    echo "<script>
    alert('Input data Failed');
    document.location = 'rumah.php';
</script>";
}
?>