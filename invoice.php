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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Pembelian Tiket</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #070F2B;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            margin: 50px auto;
        }
        h1 {
            text-align: center;
        }
        table {
            margin-top: 20px;
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .total {
            font-weight: bold;
        }
        .btn {
            background-color: #070F2B;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #032343;
        }
    </style>
</head>
<body>
    <div class="container">
<?php
include 'koneksi.php';


// Ambil data dari URL
$id_rumah = $_GET['id_rumah'];
$jumlah = $_GET['jumlah'];
$tanggal = $_GET['tanggal'];

// Fetch data rumah berdasarkan id_rumah
$result = mysqli_query($mysqli, "SELECT * FROM rumah WHERE id_rumah='$id_rumah'") or die(mysqli_error($mysqli));
$rumah_data = mysqli_fetch_assoc($result);

if (!$rumah_data) {
    die("Data rumah tidak ditemukan.");
}

// Ambil data rumah
$nama = $rumah_data['nama'];
$harga = $rumah_data['harga'];

// Hitung total harga
$total_harga = $jumlah * $harga;

// Ambil data username dari session
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Pembelian Tiket</title>
<head>
    <body>
    <h1>Pembelian Tiket</h1>
    <table>
        <tr>
            <th>Nama Pengguna</th>
            <td><?php echo $username; ?></td>
        </tr>
        <tr>
            <th>Nama Rumah</th>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <th>Jumlah Tiket</th>
            <td><?php echo $jumlah; ?></td>
        </tr>
        <tr>
            <th>Harga Tiket</th>
            <td>Rp <?php echo number_format($harga, 0, ',', '.'); ?></td>
        </tr>
        <tr>
            <th>Total Harga</th>
            <td>Rp <?php echo number_format($total_harga, 0, ',', '.'); ?></td>
        </tr>
        <tr>
            <th>Tanggal Pemesanan</th>
            <td><?php echo $tanggal; ?></td>
        </tr>
    </table>
    <a href="user.php" class="btn">OKE</a>
</body>
</html>
