<!DOCTYPE html>
<html>
    <head>
        <title>RUMAH ADAT</title>
    </head>
    <body>
        <header>
            <div class="logo">
                <img src="newlogo.png" width='90px'>
            </div>
            <div class="main">
                <ul>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Sign In</a></li>
                    <li><a href="profil.php">Contact Us</a></li>                
                </ul>
                </div>
                <div class="title">
                    <h1>RUMAH ADAT INDONESIA</h1>
                </div>
            </div>
        </header>
    </body>
</html>

<style>
*{
    margin:0;
    padding:0;
    font-family: sans-serif;
}
header{
    background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(bg.jpg);
    height: 100vh;
    background-size: cover;
    background-position: center;
}
.logo{
    position:fixed;
    left:20px;
    top:10px;
}
ul{
    float:right;
    list-style-type: none;
    margin-top: 25px;   
}
ul li{
    display: inline-block;
}
ul li a{
    text-decoration: none;
    color: white;
    padding: 15px 20px;
    border: 1px solid;
    transition: 0.6s;
    margin: 10px;
}
ul li a:hover{
    background-color:rgba(173, 173, 173, 0.377);
    color: white;
}
.main{
    max-width: 1200px;
    margin: auto; 
}
.title {
    position: absolute;
    text-align: center;
    top: 43%;
    left:27%;
    transform: translate(-50%-50%);
}
.title h1{
    font-family: poppins;
    color: white;
    font-size: 50px;
}
</style>
