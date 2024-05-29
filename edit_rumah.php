<?php
include 'koneksi.php';

// Cek apakah ada parameter id_rumah yang dikirim
if (isset($_GET['id_rumah'])) {
    $id_rumah = $_GET['id_rumah'];

    // Ambil data rumah berdasarkan id_rumah
    $query = mysqli_query($mysqli, "SELECT * FROM rumah WHERE id_rumah = '$id_rumah'");
    $data = mysqli_fetch_array($query);
} else {
    die("ID Rumah tidak ditemukan.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Rumah</title>
</head>
<body>
    <div class="container">
    <h1>Edit Rumah Adat</h1> 
    <form action="edit_rumah_proses.php" method="post">
        <input type="hidden" name="id_rumah" value="<?php echo $data['id_rumah']; ?>">
        <table>
            <tr>
                <td>Pulau</td>
                <td><select name="pulau">
                <?php 
                include "koneksi.php";
                $sql = "SELECT * FROM `pulau`";
                $all_pulau = mysqli_query($mysqli,$sql);
                    // use a while loop to fetch data 
                    // from the $all_categories variable 
                    // and individually display as an option
                    while ($pulau = mysqli_fetch_array(
                            $all_pulau,MYSQLI_ASSOC)):; 
                ?>
                    <option value="<?php echo $pulau["id_pulau"];
                        // The value we usually set is the primary key
                    ?>">
                        <?php echo $pulau["pulau"];
                            // To show the category name to the user
                        ?>
                    </option>
                <?php 
                    endwhile; 
                    // While loop must be terminated
                ?> 
                </select></td>
            </tr>        
            <tr>
                <td>Nama Rumah</td>
                <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>" required></td>
            </tr>
            <tr>
                <td>Informasi</td>
                <td><textarea name="informasi" required><?php echo $data['informasi']; ?></textarea></td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td><input type="text" name="gambar" value="<?php echo $data['gambar']; ?>" required></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga" value="<?php echo $data['harga']; ?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" name="simpan">Simpan</button></td>
            </tr>
        </table>
    </form>
    </div>
    <div class="button2">
        <a href="admin.php" class="btn2">KEMBALI</a>
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
    width: 300px;
    text-align: center;
    }
    h1 {
        margin-bottom: 20px;
    }
    table {
        margin-bottom: 20px;
    }
    td {
        padding: 10px;
    }
    input[type="text"],
    input[type="number"],
    textarea,
    select {
        width: 100%;
        padding: 8px;
    }
    button {
        padding: 10px 20px;
        background-color: #070F2B;
        color: white;
        border: none;
        cursor: pointer;
    }
    button:hover {
        background-color: #555;
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
    a {
        text-decoration: none;
        color: #070F2B;
    }
    a:hover {
        text-decoration: underline;
    }
</style>
