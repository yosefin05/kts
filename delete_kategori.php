<?php
$mysqli = new mysqli('localhost', 'root', '', 'rumah_adat');
    $id=$_GET["id_pulau"];

    $result= mysqli_query($mysqli, "DELETE FROM pulau WHERE id_pulau='$id'");
    header("location:tabel_kategori.php");
?>