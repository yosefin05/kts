<?php
include 'koneksi.php';

$pulau = $_POST['pulau']; 
$provinsi = $_POST['provinsi'];

$sql = "INSERT INTO `kategori`(`pulau`, `provinsi`) VALUES ('$pulau','$provinsi')";;
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

