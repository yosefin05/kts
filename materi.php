<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pulau</title>
</head>
<body>
     <div class="rumah-adat">
        <h1>Pulau di Indonesia</h1></div>
        <div class="box">
        <?php
            //select tabel pulau dari database
            include 'koneksi.php';
            $result = mysqli_query($mysqli, "SELECT * FROM pulau") or die (mysqli_error());

            while($data = mysqli_fetch_array($result)){
                ?>
            <div class="box">
                <h3><?php echo $data['pulau']; ?></h3>
                <p><?php echo $data['informasi']; ?></p>
                <div class="button"></div>
                <a href="tket.php" class="btn">Dapatkan Tiket</a>
            </div>
        <?php } ?>

     <div class="button">
        <a href="user.php" class="btn1">KEMBALI</a>
    </div> 
</body>
</html>
<style>

.rumah-adat {
    text-align: center;
    color: white;
    margin-top: 28px;
    align-content: center;
    background-color: #070F2B;
}
a{
    color: white;
}
.box {
    background-color: whitesmoke;
    border: 4px solid #070F2B;
    padding: 20px;
    box-sizing: border-box;
    text-align: center;
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
</style>