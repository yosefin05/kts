<?php
include 'koneksi.php';

$pulau = $_POST['pulau']; 

$sql = "INSERT INTO `kategori`(`id_pulau`) VALUES ('$pulau')";;
$result = mysqli_query($mysqli,$sql);
if($result){
    echo "<script>
            alert('Input Data Successfully');
            document.location = 'tabel_kategori.php';
        </script>";
}else{
    echo "<script>
    alert('Input Data Failed');
    document.location = 'tabel_kategori.php';
</script>";
}
?>

