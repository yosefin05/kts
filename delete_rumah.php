<?php
$mysqli = new mysqli('localhost', 'root', '', 'rumah_adat');
    $id=$_GET["id_rumah"];

    $result= mysqli_query($mysqli, "DELETE FROM rumah WHERE id_rumah='$id'");
    header("location:tabel_rumah.php");
?>