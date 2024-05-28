<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Pulau</th>            
            <th>Nama Rumah</th>
            <th>Informasi</th>
            <th>Gambar</th>
            <th>Harga</th>
            <th colspan="2">Aksi</th>
        </tr>
    <div class="button">
        <a href="admin.php" class="btn1">KEMBALI</a>
    </div> 
    <div class="button2">
        <a href="rumah.php" class="btn2">TAMBAHKAN</a>
    </div> 

<?php

$nomor = 1;

$mysqli = new mysqli('localhost', 'root', '', 'rumah_adat');

$query_mysql = mysqli_query($mysqli, "SELECT rumah.id_rumah, pulau.pulau, rumah.nama, rumah.informasi, rumah.gambar, rumah.harga 
FROM rumah
JOIN pulau ON pulau.id_pulau = rumah.id_pulau;") or die (mysqli_error($mysqli));

while($data = mysqli_fetch_array($query_mysql)){
?>

<tr>
    <td><?php echo $nomor++; ?></td>
    <td><?php echo $data["pulau"]; ?></td>    
    <td><?php echo $data["nama"]; ?></td> 
    <td><?php echo $data["informasi"]; ?></td>
    <td><?php echo $data["gambar"]; ?></td>
    <td><?php echo $data["harga"]; ?></td>
    <td><span><a href='delete_rumah.php?id_rumah=<?php echo $data["id_rumah"]; ?>'>Hapus</a></span></td>
    <td><span><a href='edit_rumah.php?id_rumah=<?php echo $data["id_rumah"]; ?>'>Edit</a></span></td>
</tr>

<?php } ?>

</table>

</body>
</html>

<style>
    body{
        margin: 40px;
        font-family: "poppins", "sans-serif";
        background-color: #070F2B;
    }
    table{
        width: 100%;
        font-size: 14px;
        color: black;
        white-space: normal;
        word-wrap: break-word;
        text-align: center;
        background-color: whitesmoke;
        margin-top: 7%;
    }
    .button{
        position:absolute;
        top: 5%;
        left: 5%;
        display: inline-block;
    }
    .btn1{
        border: 1px solid;
        padding: 5px 20px;
        color: white;
        text-decoration: none;
        transition: 0.6s ease;
        margin: 10px;
    }
    .btn1:hover{
        background-color: rgba(173, 173, 173, 0.377);
        color: white;
    }
    .button2{
        position:absolute;
        top: 5%;
        right: 5%;
        transform: translate(-50%-50%);
        display: inline-block;
    }
    .btn2{
        border: 1px solid;
        padding: 5px 20px;
        color: white;
        text-decoration: none;
        transition: 0.6s ease;
        margin: 10px;
    }
    .btn2:hover{
        background-color: rgba(173, 173, 173, 0.377);
        color: white;
    }