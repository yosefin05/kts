<?php
include 'koneksi.php';

$pulau = $_POST['pulau']; 

$sql = "INSERT INTO `pulau`(`pulau`) VALUES ('$pulau')";;
$result = mysqli_query($mysqli,$sql);
if($result){
    echo "<script>
            alert('Input Data successfully');
            document.location = 'tabel_kategori.php';
        </script>";
        $last_id_pulau= $mysqli->insert_id;
}else{
    echo "<script>
    alert('Register Failed');
    document.location = 'register.php';
</script>";
}
?>