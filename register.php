<body>
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

</style>
    <div class="button2">
        <a href="index.php" class="btn2">KEMBALI</a>
    </div> 
    <div class="container">   
        <h1>Register</h1>
        <form action="register_proses.php" method="post" name="form1">
            <table>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" required></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td>Role</td>
                    <td>
                        <select name="role" id="role"required>
                            <option disabled selected> Pilih </option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="btn" name="submit">Register</button></td>
                    <a href="login.php">
                </tr>
            </table>
        </form>
    </div>
</body>