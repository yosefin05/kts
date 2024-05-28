<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <div class="Halaman-Admin">
        <h1>Selamat Datang, Admin!</h1></div>
    <div class="box_user">
        <h3><a href="tabel_user.php">View Table User</h3>
    </div>
    <div class="box_kategori">
        <h3><a href="tabel_kategori.php">View Table Kategori</h3>
    </div>
    <div class="box_rumah">
        <h3><a href="tabel_rumah.php">View Table Rumah</h3>
    </div>
    <div class="box_tiket">
        <h3><a href="tabel_tiket.php">View Table Tiket</h3>
    </div>
    <div class="button">
        <a href="index.php" class="btn1">KEMBALI</a>
    </div> 
</body>


<style>
.Halaman-Admin {
    text-align: center;
    color: white;
    margin-top: 28px;
    align-content: center;
    background-color: #070F2B;
}
.box_user, .box_kategori, .box_rumah, .box_tiket{
    width: 100px;
    height: 100px;
    background-color:#070F2B;
    text-align: center;
    color: white;
    text-decoration-color:white;
    padding: 100px 85px;
    margin: 90px 15px 15px 40px;
    border-radius: 20px;
    float: left;
}
a{
    color: white;
    color: white;
    text-decoration: none;
    transition: 0.6s ease;
}
.button{
    position:absolute;
    top: 9%;
    left: 5%;
    transform: translate(-50%-50%);
}
.btn1{
    border: 1px solid white;
    padding: 5px 15px;
    color: white;
    text-decoration: none;
    transition: 0.6s ease;
    margin top: 20px;
}
.btn1:hover{
    background-color: rgba(173, 173, 173, 0.377);
    color: white;
}