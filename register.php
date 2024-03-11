<body>
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
    <div class="container">   
        <h1>Register</h1>
        <form action="register_process.php" method="post" name="form1">
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
