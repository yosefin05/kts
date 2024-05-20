<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelian Tiket</title>
</head>
<div class="button2">
    <a href="user.php" class="btn2">KEMBALI</a>
</div> 
<body>
    <div class="container">
        <h1>Pembelian Tiket</h1>
        <form action="tiket_proses.php" method="post" name="formPembelian">
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" required></td>
                </tr>
                <tr>
                    <td>Nomor Telepon</td>
                    <td><input type="text" name="telepon" required></td>
                </tr>
                <tr>
                    <td>Provinsi</td>
                    <td>
                        <select name="provinsi" required>
                            <option disabled selected>Pilih</option>
                            <option value="Aceh">Aceh</option>
                            <option value="Sumatera Utara">Sumatera Utara</option>
                            <option value="Sumatera Barat">Sumatera Barat</option>
                            <option value="Riau">Riau</option>
                            <option value="Jambi">Jambi</option>
                            <option value="Sumatera Selatan">Sumatera Selatan</option>
                            <option value="Bengkulu">Bengkulu</option>
                            <option value="Lampung">Lampung</option>
                            <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                            <option value="Kepulauan Riau">Kepulauan Riau</option>
                            <option value="Banten">Banten</option>
                            <option value="Jawa Barat">Jawa Barat</option>
                            <option value="Jawa Tengah">Jawa Tengah</option>
                            <option value="DI Yogyakarta">DI Yogyakarta</option>
                            <option value="Jawa Timur">Jawa Timur</option>
                            <option value="Kalimantan Barat">Kalimantan Barat</option>
                            <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                            <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                            <option value="Kalimantan Timur">Kalimantan Timur</option>
                            <option value="Kalimantan Utara">Kalimantan Utara</option>
                            <option value="Sulawesi Utara">Sulawesi Utara</option>
                            <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                            <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                            <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                            <option value="Gorontalo">Gorontalo</option>
                            <option value="Sulawesi Barat">Sulawesi Barat</option>
                            <option value="Papua">Papua</option>
                            <option value="Papua Barat">Papua Barat</option>
                            <option value="Papua Tengah">Papua Tengah</option>
                            <option value="Papua Pegunungan">Papua Pegunungan</option>
                            <option value="Papua Selatan">Papua Selatan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Jumlah Tiket</td>
                    <td><input type="number" name="jumlah" min="1" required></td>
                </tr>
                <tr>
                    <td>Tanggal Pemesanan</td>
                    <td><input type="date" name="tanggal" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="btn" type="submit" name="submit">Beli Tiket</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>

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

input[type="text"],
input[type="number"],
input[type="date"],
select {
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
.button2{
    position:absolute;
    top: 5%;
    left: 5%;
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
</style>