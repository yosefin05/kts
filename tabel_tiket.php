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
            <th>Username</th>
            <th>No Telepon</th>
            <th>Provinsi</th>
            <th>Jumlha</th>
            <th>Tanggal</th>
            <th colspan="2">Aksi</th>
        </tr>
    <div class="button">
        <a href="admin.php" class="btn1">KEMBALI</a>
    </div> 
    <div class="button2">
        <a href="tiket.php" class="btn2">TAMBAHKAN</a>
    </div> 
<?php

$nomor=1;

$mysqli = new mysqli('localhost', 'root', '', 'rumah_adat');

$query_mysql=mysqli_query($mysqli, "SELECT * FROM tiket ") or die (mysqli_error());

while($data= mysqli_fetch_array($query_mysql)){
?>

<tr>
    <td><?php echo $nomor++;?></td>
    <td><?php echo $data["username"];?></td> 
    <td><?php echo $data["telepon"];?></td>
    <td><?php echo $data["provinsi"];?></td>
    <td><?php echo $data["jumlah"];?></td>
    <td><?php echo $data["tanggal"];?></td>

    <td><span><a href='delete_tiket.php?id_tiket=<?php echo $data["id_tiket"];?>'>Hapus</a></span></td>
    <?php ?>
    <td><span><a href='edit_tiket.php?id_tiket=<?php echo $data["id_tiket"];?>'>Edit</a></span></td>
    <?php }?>

</tr>
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