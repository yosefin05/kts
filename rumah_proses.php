<?php
include 'koneksi.php';

$nama = $_POST['nama']; 
$informasi = $_POST['informasi'];
$gambar = $_POST['gambar'];
$pulau = $_POST['pulau'];
$harga = $_POST['harga'];


$sql = "INSERT INTO `rumah`(`nama`, `informasi`, `gambar`, `id_pulau`, `harga`) VALUES ('$nama','$informasi','$gambar','$pulau','$harga')";
$result = mysqli_query($mysqli,$sql);
if($result){
    echo "<script>
            alert('Input data successfully');
            document.location = 'rumah.php';
        </script>";
}else{
    echo "<script>
    alert('Input data Failed');
    document.location = 'rumah.php';
</script>";
}
?>