<!DOCTYPE html>
<html>
<head>
        <title>Halaman Login</title>
        <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "poppins", "sans-serif";
            color: white;
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
            text-align: center;
        }
        .btn{
            width: 35%;
            height:auto;
            margin-left: 33%;
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
        .forgot{
            text-align: center;
        }
        </style>
</head>
<body>
    <div class="container">
        <h1>Login</h1><br>
        <div class="input-box">
        <form action="login2.php" method="post">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password"placeholder="Password">
        </div>    
    <button type="submit" class="btn">Login</button>
        </form>
    <div class="forgot">
        <a href="register.php">Register</a> <a href="#">Forgot Password</a>
    </div>
    </div>
</body>
</html>