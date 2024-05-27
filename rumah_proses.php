<?php
include 'koneksi.php';

$nama = $_POST['nama']; 
$informasi = $_POST['informasi'];
$gambar = $_POST['gambar'];
$last_id_pulau = $_POST['id_pulau'];

$sql = "INSERT INTO `rumah`(`nama`, `informasi`, `gambar`, `id_pulau`) VALUES ('$nama','$informasi','$gambar','$last_id_pulau')";
$result = mysqli_query($mysqli,$sql);
if($result){
    echo "<script>
            alert('Register successfully');
            document.location = 'tabel_rumah.php';
        </script>";
}else{
    echo "<script>
    alert('Register Failed');
    document.location = 'rumah.php';
</script>";
}
?>