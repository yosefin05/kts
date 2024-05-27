<?php
include 'koneksi.php';

//kalau tidak ada id di query string
if(!isset($_GET['id_user'])){
    header('location:index.php');
}
$id_user = $_GET['id_user'];

//fetech user data based on id
$result = mysqli_query($mysqli,"SELECT * FROM user WHERE id_user=$id_user");

while($user_data = mysqli_fetch_array($result)){
$email = $user_data['email']; 
$username = $user_data['username'];
$password = $user_data['password'];
$role = $user_data['role'];
}
?>

<div class="button2">
    <a href="tabel_user.php" class="btn2">KEMBALI</a>
</div> 
<div class="container">   
    <h1>Edit User</h1> 
    <form method="POST" action="edit_user_proses.php">
</div> 
    <table>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" value="<?php echo $email;?>"></td>
        </tr>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username" value="<?php echo $username;?>"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" value="<?php echo $password;?>"></td>
        </tr>
        <tr>
            <td>Role</td>
            <td>
                <select name="role" id="role"required>
                    <option disabled selected> <?php echo $role;?></option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><input type="hidden" name="id_user"value=<?php echo $_GET['id_user'];?>></td>
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