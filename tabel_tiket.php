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
            <th>Nama</th>
            <th>Rumah</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Total Harga</th>
            <th>Tanggal</th>
            <th colspan="2">Aksi</th>
        </tr>
    <div class="button">
        <a href="admin.php" class="btn1">KEMBALI</a>
    </div> 
    <div class="button2">
        <a href="pesan.php" class="btn2">TAMBAHKAN</a>
    </div> 
<?php

$nomor=1;

include 'koneksi.php';

$query_mysql=mysqli_query($mysqli, "SELECT user.username, rumah.nama, rumah.harga, tiket.jumlah, tiket.tanggal, (rumah.harga * tiket.jumlah) AS total_harga
FROM tiket JOIN rumah ON tiket.id_rumah = rumah.id_rumah 
JOIN user ON tiket.id_user = user.id_user;") or die (mysqli_error());

while($data= mysqli_fetch_array($query_mysql)){
?>

<tr>
    <td><?php echo $nomor++;?></td>
    <td><?php echo $data["username"];?></td>
    <td><?php echo $data["nama"];?></td>
    <td><?php echo $data["jumlah"];?></td>
    <td><?php echo $data["harga"];?></td>
    <td><?php echo $data["total_harga"];?></td>    
    <td><?php echo $data["tanggal"];?></td>

    <td><span><a href='delete_tiket.php?id_tiket=<?php echo $data["id_tiket"];?>'>Hapus</a></span></td>
    <?php ?>
    <td><span><a href='edit_tiket.php?id_tiket=<?php echo $data["id_tiket"];?>'>Edit</a></span></td>
</tr>    
<?php }?>
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
        white-space: nowrap;
        text-align: center;
        background-color: whitesmoke;
        margin-top: 7%;
    }
    .button{
        position:absolute;
        top: 5%;
        left: 5%;
        transform: translate(-50%-50%);
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