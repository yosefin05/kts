<?php
include 'koneksi.php';

//kalau tidak ada id di query string
if(!isset($_GET['id_user'])){
    header('location:index.php');
}
$id_user = $_GET['id_user'];

//fetech user data based on id
$result = mysqli_query($mysqli,"SELECT * FROM user WHERE id_user=$id_user");

while($user_data = mysqli_fetch_array($result))
{
$email = $user_data['email']; 
$username = $user_data['username'];
$password = $user_data['password'];
$role = $user_data['role'];
}
?>

<html>
    <div class="container">   
        <h1>Edit User</h1>
    <form method="POST" action="proses_edit_user.php">
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
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "poppins", "sans-serif";
            color: white;
            background-color: #070F2B;
        }
        body { 
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #070F2B;
        }
        .container h1{
            font-size: 36px;
            text-align: center;
        }
        .container{
            background-color: #070F2B;
            border: none;
            border: 2px solid whitesmoke;
        }
        .container input{
            width: 100%;
            height: 200%;
            background: transparent;
            border: none;
            outline: none;
            border: 2px solid whitesmoke;
            border-radius: 20px;
            font-size: 16px;
        }
        .container select{
            background: #070F2B;
        }
        .btn{
            width: 35%;
            height:auto;
            margin-top: 2px;
            background: transparent;
            border: none;
            border: 2px solid whitesmoke;
            outline: none;
            cursor: pointer;
            font-size: 16px;
            color: white;
            font-weight: 600;
        }

    </style>
</html>