<?php
include 'koneksi.php';
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Ambil data username dan id_user dari session
$username = $_SESSION['username'];
$id_user = $_SESSION['id_user'];

// Cek apakah id_rumah ada di query string
if (!isset($_GET['id_rumah'])) {
    header('Location: pesan.php');
    exit();
}

$id_rumah = $_GET['id_rumah'];

// Fetch user data based on id_rumah
$result = mysqli_query($mysqli, "SELECT * FROM rumah WHERE id_rumah='$id_rumah'") or die(mysqli_error($mysqli));
$rumah_data = mysqli_fetch_assoc($result);

if (!$rumah_data) {
    die("Data rumah tidak ditemukan.");
}

$nama = $rumah_data['nama'];
$harga = $rumah_data['harga'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelian Tiket</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #070F2B;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 350px;
            text-align: center;
        }
        h1 {
            margin-bottom: 20px;
        }
        table {
            margin: 0 auto;
            margin-bottom: 20px;
            width: 100%;
        }
        td {
            padding: 10px;
            text-align: left;
        }
        input[type="number"],
        input[type="date"],
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        .btn {
            background-color: #070F2B;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
            display: inline-block;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #070F2B;
        }
        .btn2 {
            border: 1px solid;
            padding: 5px 15px;
            color: white;
            text-decoration: none;
            transition: 0.6s ease;
            margin: 10px;
            position: absolute;
            top: 11%;
            left: 10px;
        }
        .btn2:hover {
            background-color: rgba(173, 173, 173, 0.377);
            color: white;
        }
    </style>
</head>
<body>
    <a href="roemahku.php" class="btn2">KEMBALI</a>
    <div class="container">
        <h1>Pembelian Tiket</h1>
        <form action="tiket_proses.php" method="POST">
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="username" value="<?php echo $username; ?>" readonly></td>
                </tr>
                <tr>
                    <td>Rumah</td>
                    <td><input type="text" name="nama" value="<?php echo $nama; ?>" readonly></td>
                </tr>
                <tr>
                    <td>Jumlah Tiket</td>
                    <td><input type="number" name="jumlah" min="1" required></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td><input type="text" name="harga" value="<?php echo $harga; ?>" readonly></td>
                </tr>
                <tr>
                    <td>Tanggal Pemesanan</td>
                    <td><input type="date" name="tanggal" required></td>
                </tr>
                <tr>
                    <td><button class="btn" type="submit" name="submit">Beli Tiket</button></td>
                </tr>
            </table>
            <input type="hidden" name="id_rumah" value="<?php echo $id_rumah; ?>">
            <input type="hidden" name="id_user" value="<?php echo $id_user; ?>">
        </form>
    </div>
</body>
</html>
