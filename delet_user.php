<?php
$mysqli = new mysqli('localhost', 'root', '', 'rumah_adat');
    $id=$_GET["id_user"];

    $result= mysqli_query($mysqli, "DELETE FROM user WHERE id_user='$id'");
    header("location:tabel_user.php");
?>