<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
</head>
<body>
    <div class="button2">
        <a href="index.php" class="btn2">KEMBALI</a>
    </div> 
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
