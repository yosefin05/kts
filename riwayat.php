<?php
include 'koneksi.php';
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Ambil data id_user dari session
$id_user = $_SESSION['id_user'];

// Ambil riwayat pembelian tiket pengguna dari basis data
$query = "SELECT tiket.jumlah, tiket.tanggal, rumah.nama, rumah.harga, (tiket.jumlah * rumah.harga) as total_harga 
    FROM tiket
    JOIN rumah ON tiket.id_rumah = rumah.id_rumah 
    WHERE tiket.id_user='$id_user'";
$result = mysqli_query($mysqli, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pembelian Tiket</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #070F2B;
            margin: 0;
            padding: 0;
        }
        .wrapper {
            display: flex-start;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .btn {
            border: 1px solid white;
            padding: 5px 15px;
            color: white;
            margin-left: 5%;
            text-decoration: none;
            transition: 0.6s ease;
        }
        .btn1:hover{
            background-color: rgba(173, 173, 173, 0.377);
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
<div class="wrapper">
    <a href="user.php" class="btn">KEMBALI</a>   
    <div class="container">
        <h1>Riwayat Pembelian Tiket</h1>
        <table>
            <tr>
                <th>Nama Rumah</th>
                <th>Jumlah Tiket</th>
                <th>Harga per Tiket</th>
                <th>Total Harga</th>
                <th>Tanggal Pemesanan</th>
            </tr>
            <?php
            // Periksa apakah ada data riwayat pembelian tiket
            if (mysqli_num_rows($result) > 0) {
                // Tampilkan data riwayat pembelian tiket
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['nama'] . "</td>";
                    echo "<td>" . $row['jumlah'] . "</td>";
                    echo "<td>Rp " . number_format($row['harga'], 0, ',', '.') . "</td>";
                    echo "<td>Rp " . number_format($row['total_harga'], 0, ',', '.') . "</td>";
                    echo "<td>" . $row['tanggal'] . "</td>";
                    echo "</tr>";
                }
            } else {
                // Jika tidak ada riwayat pembelian tiket
                echo "<tr><td colspan='5'>Tidak ada riwayat pembelian tiket.</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
<footer>
    &copy; 2024 Rumah Adat Indonesia | Yosefin KT
</footer>
</html>
