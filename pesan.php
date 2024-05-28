<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelian Tiket</title>
</head>

<body>
    <a href="roemahku.php" class="btn2">KEMBALI</a>
    <div class="container">
        <h1>Pembelian Tiket</h1>
        <form action="tiket_proses.php" method="post" name="formPembelian">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>
                        <select name="username" required>
                            <?php 
                            include "koneksi.php";
                            $sql = "SELECT id_user, username FROM user";
                            $all_users = mysqli_query($mysqli, $sql);
                            while ($username = mysqli_fetch_array($all_users, MYSQLI_ASSOC)):; 
                            ?>
                                <option value="<?php echo $user["id_user"]; ?>">
                                    <?php echo $username["username"]; ?>
                                </option>
                            <?php 
                            endwhile; 
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Provinsi</td>
                    <td><select name="rumah">
                        <?php 
                        $sql = "SELECT * FROM rumah";
                        $all_rumah = mysqli_query($mysqli, $sql);
                        while ($rumah = mysqli_fetch_array($all_rumah, MYSQLI_ASSOC)):; 
                        ?>
                            <option value="<?php echo $rumah["id_rumah"]; ?>">
                                <?php echo $rumah["nama"]; ?>
                            </option>
                        <?php 
                        endwhile; 
                        ?>
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

input[type="number"],
input[type="date"],
input[type="text"],
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

.btn2{
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

.btn2:hover{
    background-color: rgba(173, 173, 173, 0.377);
    color: white;
}

</style>
