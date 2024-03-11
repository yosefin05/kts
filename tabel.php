<title>View Table</title>
<body>
<table border="1" class="table">
    <tr>
        <th>No</th>
        <th>Email</th>
        <th>Username</th>
        <th>Password</th>
        <th>Aksi</th>
    </tr>
</body>
<?php
//select tabel user dari database
$nomor = 1;
//echo $nomor;
include 'koneksi.php';
$query_mysql =mysqli_query($mysqli, "SELECT * FROM user ") or die (mysqli_error());

while($data = mysqli_fetch_array($query_mysql)){
    ?>
<tr>
    <td><?php echo $nomor++; ?></td>
    <td><?php echo $data['email']; ?></td>
    <td><?php echo $data['username']; ?></td>
    <td><?php echo $data['password']; ?></td>
    <td> <span class="action_btn">
        <a href='delete_user.php?id=<?php echo $data ['id_user'];?>'>Hapus</a>
    <?php } ?>
</tr>
</form>
</table>

<style>
    body{
        margin: 40px;
        font-family: "poppins", "sans-serif";
        background-color: #070F2B;
    }
    table{
        width: 100%;
        font-size: 14px;
        color: black;
        white-space: nowrap;
        text-align: center;
        background-color: whitesmoke;
    }


