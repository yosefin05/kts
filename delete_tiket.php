<?php
$mysqli = new mysqli('localhost', 'root', '', 'rumah_adat');
    $id=$_GET["id_tiket"];

    $result= mysqli_query($mysqli, "DELETE FROM tiket WHERE id_tiket='$id'");
    header("location:tabel_tiket.php");
?>