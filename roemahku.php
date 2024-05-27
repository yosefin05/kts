<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Adat di Indonesia</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #070F2B;
            color: white;
        }
        body a{
            margin-left: 15px;
        }
        .rumah-adat {
            text-align: center;
            margin-top: 28px;
            background-color: #070F2B;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }
        .box {
            background-color: whitesmoke;
            border: 4px solid #070F2B;
            padding: 20px;
            text-align: center;
            width: 45%;
            color: black;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .box-header {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            margin-bottom: 20px;
        }
        .box-header h3 {
            margin: 0 auto; /* Set margin auto untuk menempatkan nama rumah di tengah */
            text-align: center;
        }
        .box-content {
            flex: 1;
            text-align: center;
        }
        .box img {
            margin: 20px 0;
            width: 300px;
            height: 200px;
        }
        .btn1, .btn2 {
            border: 1px solid white;
            padding: 5px 15px;
            color: white;
            text-decoration: none;
            transition: 0.6s ease;
        }
        .btn1:hover, .btn2:hover {
            background-color: rgba(173, 173, 173, 0.377);
            color: white;
        }
        .order-btn {
            background-color: #070F2B;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
        }
        .order-btn:hover {
            background-color: rgba(173, 173, 173, 0.377);
        }
        .price {
            position: absolute; /* Menjadikan posisi absolut */
            top: 0;
            right: 0;
            background-color: #070F2B;
            padding: 5px 10px;
            color: white;
        }
        footer {
        background-color: #070F2B;
        color: white;
        text-align: center;
        padding: 10px;
        }
    </style>
</head>
<body>            
    <h1 class="rumah-adat">Rumah Adat di Indonesia</h1>

    <a href="user.php" class="btn1">KEMBALI</a>

    <div class="container">
        <?php
            //select tabel rumah dari database
            include 'koneksi.php';
            $result = mysqli_query($mysqli, "SELECT * FROM rumah") or die (mysqli_error());

            while($data = mysqli_fetch_array($result)){
                ?>
                <div class="box">
                    <div class="box-header">
                        <h3><?php echo $data['nama']; ?></h3>
                    </div>
                    <div class="box-content">
                        <p><?php echo $data['informasi']; ?></p>
                        <img src="<?php echo $data['gambar']; ?>" alt="Gambar Rumah Adat">
                    </div>
                    <a href="pesan.php?id_rumah=<?php echo $data['id_rumah']; ?>" class="order-btn">Pesan (<?php echo $data['harga']; ?>)</a>
                </div>
            <?php } ?>
    </div>
</body>
<footer>
    &copy; 2024 | Yosefin KT
</footer>
</html>
