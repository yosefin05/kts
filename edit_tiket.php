<?php
include 'koneksi.php';

//kalau tidak ada id di query string
if(!isset($_GET['id_tiket'])){
    header('location:index.php');
}
$id_tiket = $_GET['id_tiket'];

//fetech user data based on id
$result = mysqli_query($mysqli,"SELECT * FROM tiket WHERE id_tiket=$id_tiket");

while($user_data = mysqli_fetch_array($result)){
$username = $user_data['username'];
$telepon = $user_data['telepon']; 
$provinsi = $user_data['provinsi'];
$jumlah = $user_data['jumlah'];
$tanggal = $user_data['tanggal'];
}
?>

 
        <a href="tabel_tiket.php" class="btn2">KEMBALI</a>    
    <div class="button2">      
        <form method="POST" action="edit_tiket_proses.php">   
        <form action="tiket_proses.php" method="post" name="formPembelian">
        <div class="container">   
    <h1>Pembelian Tiket</h1>
    <a href="tabel_user.php" class="btn2">KEMBALI</a>    
<div class="button2">  
    <form method="POST" action="edit_user_proses.php">
</div> 
    <table>
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
            <td><input type="hidden" name="id_user"value=<?php echo $_GET['id_tiket'];?>></td>
            <td><input type="submit" name="simpan"value="Simpan"></td>
        </tr>
    </table>
    </form>
</div>


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
    width: 300px;
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

input[type="email"],
input[type="text"],
input[type="password"],
select {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    margin-bottom: 10px;
    box-sizing: border-box;
}

input[type="submit"] {
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

input[type="submit"]:hover {
    background-color: #070F2B;
}

a {
    display: block;
    margin-top: 10px;
    text-decoration: none;
    color: #070F2B;
    font-size: 0.9em;
}

a:hover {
    color: #070F2B;
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